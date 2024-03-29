<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'harga',
        'jumlah',
        'foto',
    ];

    public function carts(){
        return $this->hasMany(Cart::class);
    }
}
