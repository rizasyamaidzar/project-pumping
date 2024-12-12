<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pumping extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal',
        'pukul',
        'menit',
        'note',
        'pd_kiri',
        'pd_kanan',
        'mother_id'
    ];
    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }
    //
}
