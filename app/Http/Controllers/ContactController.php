<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $data = [
            'contact_info' => [
                [
                    'icon' => 'bi-geo-alt-fill',
                    'title' => 'Address',
                    'content' => '1st Floor, Shafi Court, Merewether Road, Civil Lines, Karachi-Pakistan'
                ],
                [
                    'icon' => 'bi-telephone-fill',
                    'title' => 'UAN',
                    'content' => '(+92) 21 111 565 565'
                ],
                [
                    'icon' => 'bi-printer-fill',
                    'title' => 'FAX',
                    'content' => '(+92) 21 35671068'
                ],
                [
                    'icon' => 'bi-envelope-fill',
                    'title' => 'Email',
                    'content' => 'info@icsgroup.com.pk'
                ]
            ]
        ];

        return view('contact', $data);
    }

    /**
     * Handle contact form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000'
        ]);

        // Store the contact message
        ContactMessage::create($validated);

        // You can add email notification here if needed
        // Mail::to('info@icsgroup.com.pk')->send(new ContactFormMail($validated));

        return redirect()->route('contact')->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
