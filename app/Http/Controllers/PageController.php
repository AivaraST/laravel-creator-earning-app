<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        if (!$user = Auth::user()) {
            return view('home');
        }

        return view('feed', [
            'articles' => $user->feed(),
        ]);
    }

    public function profile(string $username): View
    {
        if (!$user = User::where('username', $username)->first()) {
            return redirect()->route('home');
        }

        return view('dashboard.users.show', [
            'user' => $user,
        ]);
    }
}
