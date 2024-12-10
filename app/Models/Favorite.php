<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function favoriteUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function favoriteProduct()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }
}
