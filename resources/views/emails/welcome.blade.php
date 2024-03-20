<!-- resources/views/emails/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Law Firm X Team</title>
</head>
<body>
    <h1>Welcome to Law Firm X </h1>
    <p>Hello {{ $client->first_name }}  {{ $client->last_name }},</p>
    <p>Thank you for joining us! We are excited to have you as a member of our community.</p>
    <p>Feel free to explore our website and reach out to us if you have any questions or need assistance.</p>
    <p>Best regards,<br>Law Firm X Team</p>
</body>
</html>
