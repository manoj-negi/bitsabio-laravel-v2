<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $subscriber = Subscriber::where('email', $request->email)->first();

        // New user
        if (! $subscriber) {

            Subscriber::create([
                'email' => $request->email,
                'is_subscribed' => true,
                'subscribed_at' => now(),
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Successfully subscribed.',
            ]);
        }

        // Re-subscribe 

        if (! $subscriber->is_subscribed) {

            $subscriber->update([
                'is_subscribed' => true,
                'subscribed_at' => now(),
                'unsubscribed_at' => null,
            ]);

            return response()->json([
                'status' => 'success',
                'message' => 'Welcome back! Subscription reactivated.',
            ]);
        }

        //  subscribed
        return response()->json([
            'status' => 'exists',
            'message' => 'You are already subscribed.',
        ]);
    }

    // unsubscribe
    public function unsubscribe($email)
    {
        $subscriber = Subscriber::where('email', $email)->first();

        if ($subscriber) {

            $subscriber->update([
                'is_subscribed' => false,
                'unsubscribed_at' => now(),
            ]);
        }

        return view('newsletter.unsubscribed');
    }
}