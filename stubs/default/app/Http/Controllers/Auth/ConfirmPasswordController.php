<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConfirmPasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {

        return view('auth.confirm-password');

    }

    /**
     * Confirm the user's password.
     *
     * @return mixed
     */
    public function store(Request $request)
    {

        if (! Auth::guard('web')->validate([
            'email' => $request->user()->email,
            'password' => $request->password,
        ])) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended('/');

    }
}
