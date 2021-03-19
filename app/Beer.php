<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable=['name','brand','type','alcohol_vol', 'fermentation', 'color', 'taste', 'temperature', 'origin', 'year', 'price', 'image'];
}
