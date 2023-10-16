<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    use HasFactory;

    protected $fillable = [
        'memory',
        'display',
        'ram',
        'battery',
        'model',
        'sim',
        'refreshRate',
        'color',
        'processor',
        'connection',
        'displayType',
        'nfc',
        'processorModel',
        'isRecommended'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id_params');
    }
}
