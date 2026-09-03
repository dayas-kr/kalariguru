<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enquiry</title>
</head>

<body style="margin: 0; padding: 32px; background: #f5f5f4; font-family: Arial, sans-serif; color: #292524;">

    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 32px; border-radius: 12px;">

        <div style="margin-bottom: 24px;">

            <p
                style="margin: 0 0 8px; color: #a16207; font-size: 13px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">
                Course Enquiry
            </p>

            <h1 style="margin: 0; font-size: 26px;">
                Person Wants to Join This Course
            </h1>

        </div>

        <div style="background: #fafaf9; padding: 20px; border-radius: 10px; margin-bottom: 24px;">

            <p style="margin: 0 0 6px; color: #78716c; font-size: 13px;">
                COURSE
            </p>

            <p style="margin: 0; font-size: 20px; font-weight: bold;">
                {{ $course->name }}
            </p>

        </div>

        <div style="border-top: 1px solid #e7e5e4; padding-top: 20px;">

            <h2 style="font-size: 17px; margin: 0 0 16px;">
                Person Details
            </h2>

            <p>
                <strong>Name</strong><br>
                {{ $data['name'] }}
            </p>

            <p>
                <strong>Email</strong><br>
                {{ $data['email'] }}
            </p>

            <p>
                <strong>Phone</strong><br>
                {{ $data['phone'] }}
            </p>

            <p>
                <strong>Subject</strong><br>
                {{ $data['subject'] }}
            </p>

            <p>
                <strong>Message</strong><br>
                {{ $data['message'] ?: 'No message provided.' }}
            </p>

        </div>

    </div>

</body>

</html>
