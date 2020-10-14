<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupMail;

class SignupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'unique:signups,email']
        ]);

        Mail::to(request("email"))->send(new SignupMail());

        // $signup = new Signup();
        // $signup->email = $request->input('email');
        // $signup->save();

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email']
        ]);

        $signup = Signup::where('email', $request->input('email'));
        $signup->delete();

        return redirect('/');
    }
}
