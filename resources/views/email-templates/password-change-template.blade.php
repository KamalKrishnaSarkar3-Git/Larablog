<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Changed</title>
    <style>
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
                padding: 15px !important;
            }

            h1 {
                font-size: 22px !important;
            }

            p {
                font-size: 16px !important;
            }
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">

    <div class="email-container"
        style="max-width: 500px; margin: 30px auto; background: #ffffff; padding: 20px; border-radius: 8px; text-align: center;">

        <h1 style="color: #333;">Password Changed Successfully</h1>
        <p style="color: #555;">Hello {{ $user->name }},</p>
        <p style="color: #555;">Your password has been updated successfully. Please find your updated login credentials
            below:</p>

        <div
            style="background: #f9f9f9; border: 1px solid #eee; border-radius: 5px; padding: 15px; margin: 20px 0; text-align: left;">
            <p style="margin: 8px 0;"><strong>Username/Email:</strong> {{ $user->email }} or {{ $user->username }}</p>
            <p style="margin: 8px 0;"><strong>New Password:</strong> {{ $new_password }}</p>
        </div>


        <p style="color: #aaa; font-size: 12px;">If you didn’t make this change, please contact our support team immediately.</p>


        <div style="margin-top: 25px; border-top: 1px solid #eee; padding-top: 10px;">
            <p>Thank you for using our service</p>
            <p style="color: #aaa; font-size: 13px;">&copy; {{ date('Y') }} Larablog. All rights reserved.</p>
        </div>

    </div>

</body>

</html>