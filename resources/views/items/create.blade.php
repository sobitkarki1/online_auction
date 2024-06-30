<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- a change for test --}}

</head>
<body>
        
        <div class="container">
      
        <h2> Add Item</h2>
        <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label><br>
            <input type="text" placeholder="Product name" id="name" name="name" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description:</label><br>
            <textarea  id="description" placeholder="Please mention the condition also" name="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="image">Image:</label><br>

            <input type="file" id="image_path" name="image_path" onchange="readURL(this)" accept="image/*">
        </div>

        <div class="form-group">
            <label for="min_price">Minimum Price:</label>
            <input type="text" id="minimum_price" name="minimum_price" required="">
        </div>
        <button type="submit">Create Item</button>
    </form>
    <div class="note">
        <p>Note: All items are auctioned for 15 days</p>
    </div>
    
    <div class="login">
    @auth
            <p class="logintext">Logged in as: {{ auth()->user()->name }}</p>
        @else
            <p class="logintext">You are not logged in.</p>
        @endauth
        </div>
</div>
</body>
</html>
