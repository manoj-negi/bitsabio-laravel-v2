<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:20',
            'course_name' => 'nullable|string|max:255',
            'project_type' => 'nullable|string|max:255',
            'message' => 'nullable|string',
            'inquiry_type' => 'nullable|string',
        ]);

        // Default values
        $data['project_type'] = $data['project_type'] ?? 'Quick Inquiry';
        $data['company'] = 'N/A';
        $data['message'] = $data['message'] ?? 'No message provided';
        $data['phone'] = $data['phone'] ?? 'N/A';
        $data['course_name'] = $data['course_name'] ?? 'N/A';
        $formType = $data['inquiry_type'] ?? 'general';

        // Save
        Contact::create($data);

        // TRY MAIL
        try {

            // Admin mail
            Mail::raw(
            "New message from {$data['name']} ({$data['email']})

            Phone: {$data['phone']}
            Course: {$data['course']}
            Company: {$data['company']}
            Project: {$data['project_type']}
            Message: {$data['message']}",

                function ($msg) {
                         $msg->to([
                                env('ADMIN_MAIL'),
                                env('SUPPORT_MAIL')
                            ])
                        ->subject('New Contact Message');
                }
            );

            // User mail
            Mail::raw(
                "Hi {$data['name']},
                We received your request successfully.
                Our team will contact you shortly!",

                function ($msg) use ($data) {
                    $msg->to($data['email'])
                        ->subject('Application Submitted');
                }
            );

        } catch (\Exception $e) {

            Log::error('Mail Sending Failed: ' . $e->getMessage());

        }

    //  Course Data 
        if ($formType === 'course') {
            return back()->with('modal', [
                'title' =>
                    'Application Submitted Successfully!',
                'message' => '
                    <h5 class="fw-bold mb-3">
                        🎓 Your course request has been received.
                    </h5>
                    <p class="mb-3">
                        Our team will contact you shortly with:
                    </p>
                    <div class="text-start d-inline-block">
                        <p>✔ Course details</p>
                        <p>✔ Demo session access</p>
                        <p>✔ Placement guidance</p>
                    </div>
                    <div class="mt-4">
                        <strong>
                            💼 Start your journey towards
                            a ₹50K – ₹1 Lakh+ job!
                        </strong>
                    </div>
                ',
                'button_text' => 'View Courses',
                'button_link' => route('courses')
            ]);

        }


    //    Service Data 

        elseif ($formType === 'service') {
            return back()->with('modal', [
                'title' =>
                    '🎉 Message Sent Successfully!',
                'message' => '
                    <h5 class="fw-bold mb-3">
                        Thanks for reaching out to us.
                    </h5>
                    <p class="mb-3">
                      💼 Our team is reviewing your project requirements and will get back to you within 12–24 hours with:
                    </p>
                    <div class="text-start d-inline-block">
                        <p>✔ Tailored solution</p>
                        <p>✔ Estimated pricing</p>
                        <p>✔ Project timeline</p>
                    </div>
                    <div class="mt-4">
                        <strong>
                            Let’s build something amazing together.
                        </strong>
                    </div>
                ',
                'button_text' => 'View Services',
                'button_link' => route('services')
            ]);
        }
    }
}