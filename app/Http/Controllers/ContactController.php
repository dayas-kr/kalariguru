<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\CourseEnquiryMail;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:5000'],
            'course' => ['nullable', 'string'],
        ]);

        $course = null;

        if ($request->filled('course')) {
            $course = Course::where('slug', $request->course)->first();
        }

        $data = [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'phone' => $validated['phone'],
            'message' => $validated['message'] ?? null,
        ];

        if ($course) {
            Mail::to(config('mail.contact_address'))
                ->send(new CourseEnquiryMail($data, $course));
        } else {
            Mail::to(config('mail.contact_address'))
                ->send(new ContactMail($data));
        }

        return back()->with(
            'success',
            'Thank you! Your enquiry has been sent successfully.'
        );
    }
}
