<!DOCTYPE html>
<html>
<head>
    <title>Items List</title>
</head>
<body>
    <h1>Items</h1>
    <ul>
        @foreach($items as $item)
            <li>
                <h2>{{ $item->name }}</h2>
                <p>{{ $item->description }}</p>
                @if($item->image_path)
                    <img src="{{ asset(str_replace('public', 'storage', $item->image_path)) }}" alt="{{ $item->name }}" style="max-width: 200px;">
                @endif
                <p>{{ $item->minimum_price }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
