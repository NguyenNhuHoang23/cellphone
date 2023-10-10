<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cart;
use App\Models\cellphone;
class cart extends Model
{
    use HasFactory;
    protected $table = 'cart';
    public function cellphone()
    {
        return $this->hasOne(cellphone::class, 'product_id', 'id');
    }
}
