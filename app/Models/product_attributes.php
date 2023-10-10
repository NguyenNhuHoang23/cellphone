<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cellphone;
class product_attributes extends Model
{
    use HasFactory;
    protected $table = 'product_attributes';
    public function cellphone()
    {
        return $this->hasOne(cellphone::class, 'product_id', 'id');
    }
}
