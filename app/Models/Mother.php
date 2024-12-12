<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_hp',
        'umur',
        'berat_badan',
        'tinggi_badan',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function child()
    {
        return $this->hasOne(Baby::class);
    }
    public function pumping()
    {
        return $this->hasMany(Pumping::class);
    }
}
