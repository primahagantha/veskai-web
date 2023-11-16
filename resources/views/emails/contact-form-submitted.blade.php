<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submitted</title>
</head>
<body>
    <p>
        Hi, Admin!
    </p>
    <p>
        You have received a new contact form submission:
    </p>
    <ul>
        <li>Name: {{ $name }}</li>
        <li>Email: {{ $email }}</li>
        <li>Message: {{ $message }}</li>
    </ul>
    <p>
        Best regards,
        <br>
        Veskai Production
    </p>
</body>
</html>
