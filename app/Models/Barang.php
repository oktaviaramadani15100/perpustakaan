<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    
    protected $table = 'barang';
    protected $fillable = [
        'name_barang',
        'price',
        'stock_barang',
        'foto'
    ];
}
