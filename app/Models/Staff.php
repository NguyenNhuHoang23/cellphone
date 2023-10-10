<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'stafff';

    public function sex(){
        return $this->belongsTo(Sex::class, 'sex', 'sex_id');
    }
}
