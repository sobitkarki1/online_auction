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

            <p class="description" > Description: {{ $item->description}}</p>
            
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
                    <P>{{$highestBid}}</P>
                </div>
            </div>
           <form method="POST" action="{{ route('bid.store', ['id' => $item->id]) }}">
            @csrf
            <label>Place Your Bid</label>
            <br>
            
            <input type="number" placeholder="put your price" name="bid_price">
            @if(session('fail'))
    
      <p class="fail"> {{ session('fail') }} </p>

@endif
<p class="time_remaining"> Time remaining: {{ $remainingDaysInteger}} days remaining</p>
            <br>
            <button type="submit">Submit</button>
            </form>
            
            <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="margin-top: 20px;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
            </form>
        </div>
    </div>
    <div class="">
    <h2 class="alert-text">Bids</h2>
    
    @if($bids)
    @foreach($bids as $bid)
    
    <ul>
        <li class="alert-text"> User ID:{{ $bid->user_id }} , Bid: Rs.{{ $bid->bid_price }}</li>
    </ul>
    @endforeach
@else
    <p class="alert-text">No bids available.</p>
@endif
    <!-- sucess message -->
@if(session('success'))
    <div class="alert alert-success">
      <p class="alert-text"> {{ session('success') }} </p>
    </div>
@endif

</body>
</html>