<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    public function edit(): View
    {
        $user = Auth::user();

        return view('dashboard.user.edit', [
            'user' => $user,
        ]);
    }

    public function update(UserUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $validated = Arr::except($request->validated(), ['avatar', 'password', 'password_confirmation']);

        if ($request->input('password') && $request->input('password') == $request->input('password_confirmation')) {
            $validated['password'] = bcrypt($request->input('password'));
        }
        $user->update($validated);

        return redirect()->back();
    }
}
