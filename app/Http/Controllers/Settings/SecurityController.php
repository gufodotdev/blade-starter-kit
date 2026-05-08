<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Laravel\Fortify\Features;

class SecurityController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return Features::canManageTwoFactorAuthentication()
            && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword')
                ? [new Middleware('password.confirm', only: ['edit'])]
                : [];
    }

    public function edit(Request $request): View
    {
        $user = $request->user();
        $canManageTwoFactor = Features::canManageTwoFactorAuthentication();
        $twoFactorEnabled = $canManageTwoFactor && $user->hasEnabledTwoFactorAuthentication();
        $twoFactorPending = $canManageTwoFactor
            && $user->two_factor_secret
            && ! $user->two_factor_confirmed_at;

        $data = [
            'canManageTwoFactor' => $canManageTwoFactor,
            'twoFactorEnabled' => $twoFactorEnabled,
            'twoFactorPending' => $twoFactorPending,
        ];

        if ($twoFactorPending || $twoFactorEnabled) {
            $data['qrCodeSvg'] = $user->twoFactorQrCodeSvg();
            $data['manualSetupKey'] = decrypt($user->two_factor_secret);
        }

        if ($twoFactorEnabled) {
            $data['recoveryCodes'] = json_decode(decrypt($user->two_factor_recovery_codes), true);
        }

        return view('pages.settings.security', $data);
    }
}
