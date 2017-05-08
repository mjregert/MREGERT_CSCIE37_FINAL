<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Wishitem;

class Wishlist extends Model
{
    public function wishitems() {
        # Wishlists have many wishitems
        # Define a one-to-many relationship
        return $this->hasMany('App\Wishitem');
    }
}
