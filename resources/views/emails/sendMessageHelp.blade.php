<!DOCTYPE html>
<html>
<head>
    <title>Contact Message - Form Help Voutlet</title>
</head>
<body>
    <h1>Message Help From: {{ $content->recipients }}</h1>
    <h4>Message:</h4>
    <p>{{ $content->message }}</p>
</body>
</html>