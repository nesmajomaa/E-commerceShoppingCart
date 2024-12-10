<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function collection()
    {
        return $this->belongsTo('App\Models\Collection', 'collection_id');
        //return $this->belongsTo(Category::class);
    }
    public function orderItemProduct()
    {
        return $this->hasMany(OrderItem::class);
    }

}
