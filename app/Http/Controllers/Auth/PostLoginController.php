<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PostLoginController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        /** @var User|null $user */
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        return match (true) {
            $user->hasRole('admin') => redirect()->route('admin.dashboard'),
            $user->hasRole('agent') => redirect()->route('agent.dashboard'),
            default => redirect()->route('dashboard'),
        };
    }
}
