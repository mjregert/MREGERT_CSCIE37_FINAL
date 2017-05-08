<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wishlist;

class Wishitem extends Model
{
    public function wishlist() {
        # Wishitems belong to a Wishlist
        # Define an inverse one-to-many relationship
        return  $this->belongsTo('App\Wishlist');
    }
}
