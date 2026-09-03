<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CourseEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public array $data,
        public $course
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Course Enquiry: ' . $this->course->name,
            replyTo: [$this->data['email']],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.course-enquiry',
        );
    }
}
