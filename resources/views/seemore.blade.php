<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
    <link rel="stylesheet" href="{{ asset('css/seemore.css') }}">
</head>
<body>
    <div class="parents">
        <div class="box1">
            <img src= "{{ asset(str_replace('public', 'storage', $item->image_path)) }}">
        </div>
        <div class="box2">
            <h1>{{$item->name}}</h1>
            <label>Minimum Price</label>
            <div class="smallbox">
                <div class="smallbox1">
                    <p>NPR</p>
                </div>
                <div class="smallbox2">
                    <P>{{$item->minimum_price}}</P>
                </div>
            </div>
            
            <label>Highest Bid</label>
            <div class="smallbox">
                <div class="smallbox1">
                    <p>NPR</p>
                </div>
                <div class="smallbox2">
                    <P>5000</P>
                </div>
            </div>
           <form method="POST" action="">
            <label>Place Your Bid</label>
            <br>
            <input type="number" placeholder="put your price">
        
            <br>
            <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <h2>Bids</h2>
    
    @if($item->bids)
    @foreach($item->bids as $bid1)
    
    <ul>
        <li>{{ $bid1->user->name }}: ${{ $bid1->bid_price }}</li>
    </ul>
    @endforeach
@else
    <p>No bids available.</p>
@endif
</body>
</html>