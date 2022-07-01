<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunNasabah extends Model
{
    use HasFactory;

    protected $fillable = ['nasabahs_id', 'users_id'];

    public function nasabah(){
        return $this->hasOne(Nasabah::class, 'id', 'users_id');
    }
}
