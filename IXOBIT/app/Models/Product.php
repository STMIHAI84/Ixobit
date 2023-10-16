<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'id_brand',
        'name',
        'price',
        'img',
        'id_params'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'idBrand');
    }

    public function params()
    {
        return $this->belongsTo(Param::class, 'id_params');
    }
}
