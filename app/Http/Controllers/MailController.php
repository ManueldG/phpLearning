<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\TestShipped;



use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class MailController extends Controller
{
    public function form()
    {
        $users = User::all();

        return view('components.mail', compact('users'));

    }

    public function send(Request $request) : RedirectResponse
    {
        $title = $request->input('title');
        $msg = $request->input('message');
        $to = $request->input('to');

        if (true) {
            $ship = new TestShipped();
            $ship->setMessage($msg);
            $ship->setSubject($title);
            Mail::to($to)->send($ship);
        };

        return redirect()->route('mail.form')->with('status', 'Email sent successfully!');
    }
}
