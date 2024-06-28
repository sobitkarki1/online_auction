<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>All Feedbacks</h1>
    @if($feedbacks->count())
        <ul>
            @foreach($feedbacks as $feedback)
                <li>
                    <strong>{{ $feedback->user->name }}:</strong>
                    <p>{{ $feedback->feedback }}</p>
                    <span>{{ $feedback->created_at->format('d M Y, H:i') }}</span>
                </li>
            @endforeach
        </ul>
    @else
        <p>No feedbacks available.</p>
    @endif
</body>
</html>
