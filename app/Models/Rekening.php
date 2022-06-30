<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Rekening extends Model
{
    use HasFactory;
    use Userstamps;

    protected $fillable = ['id_nasabah', 'nomor_rekening'];

    public function rekening(){
        return $this->hasOne(Rekening::class, 'id', 'id_nasabah');
    }
}
