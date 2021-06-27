<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $view = view('home');

        if (Auth::user()) {
            $view = view('feed');
        }

        return $view;
    }
}
