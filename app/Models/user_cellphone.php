<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cart;

class user_cellphone extends Model
{
    use HasFactory;
    protected $table = 'user_cellphone';
    public function cart()
    {
        return $this->belongsTo(cart::class,'user_id' ,'id');
    }
}
