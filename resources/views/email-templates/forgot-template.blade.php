<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Password</title>
<style>
  /* ✅ Basic responsive adjustments for mobile */
  @media only screen and (max-width: 600px) {
    .email-container {
      width: 100% !important;
      padding: 15px !important;
    }
    h1 {
      font-size: 22px !important;
    }
    h4, p {
      font-size: 16px !important;
    }
    a.button {
      display: block !important;
      width: 100% !important;
      box-sizing: border-box;
    }
  }
</style>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0;">

  <div class="email-container" style="max-width: 500px; margin: 30px auto; background: #ffffff; padding: 20px; border-radius: 8px; text-align: center;">
    <h1 style="color: #333;">Reset Your Password</h1>
    <h4 style="color: #555;">Hello {{ $user->name }},</h4>
    
    <p style="color: #555;">We received a request to reset your password. Click below to set a new one:</p>
    
    <a href="{{ $actionLink }}" target="_blank" class="button" style="display: inline-block; background: #007bff; color: #fff; padding: 12px 24px; text-decoration: none; border-radius: 5px; margin: 20px 0; font-weight: bold;">
      Reset Password
    </a>

    <p>
      This link valid for 15 minutes.
    </p>

    <!-- <p style="color: #777; font-size: 14px;">
      If the button doesn’t work, copy and paste this link:<br>
      <a href="{{ $actionLink }}" target="_blank" style="color: #007bff;">{{ $actionLink }}</a>
    </p> -->

    <div class="email-footer" style="margin-top: 25px; border-top: 1px solid #eee; padding-top: 10px;">
      <p style="color: #aaa; font-size: 13px;">&copy; {{ date('Y') }} Larablog. All rights reserved.</p>
      <p style="color: #aaa; font-size: 12px;">If you didn’t request this, you can safely ignore this email.</p>
    </div>
  </div>

</body>
</html>
