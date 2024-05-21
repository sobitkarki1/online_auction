<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Item extends Model
{
    use HasFactory;

    // Putting the mass assignable attribute haru
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'minimum_price',
    ];

