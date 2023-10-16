<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nume',
        'prenume'
    ];

    public function sales()
    {
        return $this->hasMany(Sale::class, 'id_client');
    }
}
