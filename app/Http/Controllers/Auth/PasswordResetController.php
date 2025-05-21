<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetCodeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class PasswordResetController extends Controller
{
    public function showRequestForm()
    {
        return view('auth.forgot.email');
    }

    public function sendResetCode(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();
        if (!$user) return back()->with('error', 'Email tidak ditemukan');

        $code = rand(100000, 999999);
        $user->reset_code = $code;
        $user->save();

        Mail::to($user->email)->send(new ResetCodeMail($code));

        return redirect()->route('password.reset.form')->with('success', 'Kode reset dikirim ke email.');
    }

    public function showResetForm()
    {
        return view('admin.auth.forgot.password_baru');
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::where('email', $request->email)
                    ->where('reset_code', $request->code)
                    ->first();

        if (!$user) return back()->with('error', 'Kode salah atau email tidak sesuai');

        $user->password = Hash::make($request->password);
        $user->reset_code = null;
        $user->save();

        return redirect()->route('login')->with('success', 'Password berhasil direset!');
    }
}
