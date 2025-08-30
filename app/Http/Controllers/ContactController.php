<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contact;
class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate form
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            // Return back with error messages
            return back()->with('error', 'Please fill in all fields correctly.');
        }

        // Save to database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Return back with success message (for toast)
        return back()->with('success', 'Message sent successfully!');
    }
}
