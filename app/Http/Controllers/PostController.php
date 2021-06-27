<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        return view('dashboard.posts.index');
    }

    public function create(): View
    {
        return view('dashboard.posts.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->back();
    }
}
