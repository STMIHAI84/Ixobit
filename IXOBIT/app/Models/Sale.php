<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'id_produs',
        'data_cumpararii'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_produs');
    }
}
