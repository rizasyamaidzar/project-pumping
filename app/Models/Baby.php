<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Baby extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'berat_badan',
        'tinggi_badan',
        'mother_id'
    ];
    public function mother()
    {
        return $this->hasOne(Mother::class);
    }
}
