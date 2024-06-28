<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'item_id', 'bid_price'];
    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
