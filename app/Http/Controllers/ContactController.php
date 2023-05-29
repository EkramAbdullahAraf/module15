<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        $data = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ];

        Mail::send('emails.contact', $data, function ($message) {
            $message->to('your-email@example.com', 'Your Name')
                ->subject('New Contact Form Submission');
        });

        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon!');
    }
}
