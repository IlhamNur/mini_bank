<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    protected $fillable = ['id_rekening', 'saldo'];

    public function rekening(){
        return $this->hasOne(Saldo::class, 'id', 'id_rekening');
    }
}
