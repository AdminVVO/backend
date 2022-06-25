<!DOCTYPE html>
<html>
<head>
    <title>Report Message Chat</title>
</head>
<body>
    <h2>Report description:</h2>
    <h3>Type of report: {{ $contentMessage['type'] }}</h3>
    <h3>Reporting user: {{ $contentMessage['user_report'] }}</h3>
    <h3>Reported chat: {{ $contentMessage['chat_report'] }}</h3>
    @if ( $contentMessage['comment'] != null )
        <h3>Comment report: {{ $contentMessage['comment'] }}</h3>
    @endif
    <h3>Message: {{ $contentMessage['message'] }}</h3>
</body>
</html>