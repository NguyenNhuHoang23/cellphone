<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product_attributes;
use App\Models\cart;
class cellphone extends Model
{
    use HasFactory;
    protected $table = 'cellphone';
    public function product_attributes()
    {
        return $this->belongsTo(product_attributes::class,'id' ,'product_id');

    }
    // public function cart()
    // {
    //     return $this->belongsTo(cart::class,'id' ,'product_id');

    // }
}
