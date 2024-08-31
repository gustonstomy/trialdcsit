<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message from {{ $name }}</title>
</head>
<body>
    <h1>You have a new message from {{ $name }}</h1>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Subject:</strong> {{ $subject }}</p>
    <p><strong>Message:</strong></p>
     <p>{{ $messageContent }}</p>
</body>
</html>
