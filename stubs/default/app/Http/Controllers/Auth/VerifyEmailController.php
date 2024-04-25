<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(EmailVerificationRequest $request) {

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended('/?verified=1');
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->intended('/?verified=1');

    }

    /**
     * Display the email verification prompt.
     *
     * @return mixed
     */
    public function prompt(Request $request) {

        return $request->user()->hasVerifiedEmail() ? redirect()->intended('/') : view('auth.verify-email');

    }

    /**
     * Send a new email verification notification.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request) {

        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended('/');
        }

        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');

    }
}
