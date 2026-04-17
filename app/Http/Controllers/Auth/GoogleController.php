<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Throwable;

class GoogleController extends Controller
{
    public function redirect(): RedirectResponse
    {
        return Socialite::driver('google')
        ->with(['prompt' => 'select_account'])
        ->redirect();
    }

    public function callback(): RedirectResponse
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $email = $googleUser->getEmail();

            $user = User::firstOrNew(['email' => $email]);

            if (! $user->exists) {
                $user->password = Hash::make(Str::random(32));
            }

            $user->name = $googleUser->getName() ?: 'Google User';
            $user->google_id = $googleUser->getId();
            $user->avatar = $googleUser->getAvatar();
            $user->save();

            if (! $user->hasAnyRole(['admin', 'agent', 'customer'])) {
                $user->assignRole('customer');
            }

            $adminEmail = config('services.admin.email');

            if (
                $adminEmail &&
                strcasecmp($email, $adminEmail) === 0 &&
                ! $user->hasRole('admin')
            ) {
                $user->syncRoles(['admin']);
            }


            Auth::login($user);

            return redirect()->route('post-login');
        } catch (Throwable $exception) {
    dd($exception->getMessage(), $exception->getFile(), $exception->getLine());
}

    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }
}
