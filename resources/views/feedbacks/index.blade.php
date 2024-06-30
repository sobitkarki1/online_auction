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

    <h1>Feedback List</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $feedback)
            <tr>
                <td>{{ $feedback->id }}</td>
                <td>{{ $feedback->name }}</td>
                <td>{{ $feedback->email }}</td>
                <td>{{ $feedback->message }}</td>
                <td>{{ $feedback->created_at }}</td>
                <td>{{ $feedback->updated_at }}</td>

                <!-- do we need this? no! 

                <td><a href="__ route('feedback.show', $feedback->id) __">View</a></td>
                
                -->

            </tr>
            @endforeach
        </tbody>
    </table>
    
    @else
        <p>No feedbacks available.</p>
    @endif
</body>
</html>
