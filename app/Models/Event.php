<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Dizemos ao Laravel quais campos podem ser preenchidos
    protected $fillable = ['name', 'date', 'price', 'description', 'lat', 'lng', 'image', 'time'];
}