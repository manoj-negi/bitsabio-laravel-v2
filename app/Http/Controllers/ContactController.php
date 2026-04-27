<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   public function send(Request $request)
{
    // Validate (flexible for both forms)
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'company' => 'nullable',
        'project_type' => 'nullable',
        'message' => 'nullable',
        'phone' => 'nullable',
    ]);

    // Default values (important)
    $data['project_type'] = $data['project_type'] ?? 'Quick Inquiry';
    $data['company'] = $data['company'] ?? 'N/A';
    $data['message'] = $data['message'] ?? 'No message provided';
    $data['phone'] = $data['phone'] ?? 'N/A';

    // Save
    Contact::create($data);

    // Email to admin
    Mail::raw(
        "New message from {$data['name']} ({$data['email']})\n
        Phone: {$data['phone']}\n
        Company: {$data['company']}\n
        Project: {$data['project_type']}\n
        Message: {$data['message']}",
        function ($msg) {
            $msg->to('bitvistara@gmail.com')
                ->subject('New Contact Message');
        }
    );

    // Email to user
    Mail::raw(
        "Hi {$data['name']}, we received your message. We'll contact you soon!",
        function ($msg) use ($data) {
            $msg->to($data['email'])
                ->subject('Message Received');
        }
    );

    return back()->with('success', 'Message sent!');
}
}