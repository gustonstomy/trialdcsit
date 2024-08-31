<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class MessageController extends Controller
{
     public function create()
    {
        return view('contact'); // Adjust the view path as necessary
    }

    // Handle the form submission
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

    
        // Send email
        Mail::send('emails.message', [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'messageContent' => $request->message,
        ], function ($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('gustomstomy@gmail.com'); // Replace with your email address
            $mail->subject($request->subject);
        });
// dd('Mail attempted to be sent');
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    
}
