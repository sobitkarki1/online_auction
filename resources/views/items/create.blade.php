<!DOCTYPE html>
<html>
<head>
    <title>Create Item</title>
</head>
<body>
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        <br>
        <button type="submit">Create Item</button>
    </form>
</body>
</html>
