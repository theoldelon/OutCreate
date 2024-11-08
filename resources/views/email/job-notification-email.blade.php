<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Notification Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header {
            text-align: center;
            background-color: #007bff;
            color: #fff;
            padding: 15px 0;
            border-radius: 8px 8px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
            color: #333;
        }

        .content h2 {
            color: #007bff;
            font-size: 20px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
        }

        .content .details {
            margin-top: 20px;
        }

        .content .details p {
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 12px;
            color: #aaa;
        }

        .footer p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <h1>Job Notification</h1>
        </div>

        <!-- Content Section -->
        <div class="content">
            <p>Hello <strong>{{ $mailData['employer']->name }}</strong>,</p>
            <p>You have a new job application for the following job:</p>

            <div class="details">
                <p><strong>Job Title:</strong> {{ $mailData['job']->title }}</p>
                <p><strong>Job Description:</strong> {{ $mailData['job']->description }}</p>
            </div>

            <h2>Employee Details:</h2>
            <div class="details">
                <p><strong>Name:</strong> {{ $mailData['user']->name }}</p>
                <p><strong>Email:</strong> {{ $mailData['user']->email }}</p>
                <p><strong>Mobile No:</strong> {{ $mailData['user']->mobile }}</p>
            </div>

            <p>We hope this information helps you in making your decision. If you have any questions, feel free to reach out.</p>

            <p>Best Regards,</p>
            <p>The {{ config('app.name') }} Team</p>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>If you did not request this notification, please ignore this email.</p>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
        </div>
    </div>
</body>

</html>
