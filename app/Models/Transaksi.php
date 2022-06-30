<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Wildside\Userstamps\Userstamps;

class Transaksi extends Model
{
    use HasFactory;
    use Userstamps;

    protected $fillable = ['id_rekening', 'tgl_transaksi', 'jenis_transaksi', 'nominal'];

    public function rekening(){
        return $this->hasOne(Transaksi::class, 'id', 'id_rekening');
    }
}
