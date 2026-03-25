<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
     public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        // استخدم الـ user method مع guard "admin"
        $admin = $request->user('admin'); // لو مش موجود هيرجع null

        if (! $admin) {
            abort(403); // مش مصادق عليه
        }

        // تحقق لو البريد متحقق بالفعل
        if ($admin->hasVerifiedEmail()) {
            return redirect()->intended(route("admin.index", false) . '?verified=1');
        }

        // تحقق البريد الآن
        if ($admin->markEmailAsVerified()) {
            event(new Verified($admin));
        }

        return redirect()->intended(route("admin.index", false) . '?verified=1');
    }
}
