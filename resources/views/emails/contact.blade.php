<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Enquiry</title>
</head>

<body style="margin: 0; padding: 32px; background: #f5f5f4; font-family: Arial, sans-serif; color: #292524;">

    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; padding: 32px; border-radius: 12px;">

        <h1 style="margin: 0 0 8px; font-size: 24px;">
            New Contact Enquiry
        </h1>

        <p style="margin: 0 0 24px; color: #78716c;">
            Someone has submitted an enquiry through your website.
        </p>

        <div style="border-top: 1px solid #e7e5e4; padding-top: 20px;">

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
