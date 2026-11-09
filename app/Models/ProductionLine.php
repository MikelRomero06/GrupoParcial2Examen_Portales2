<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductionLine extends Model
{
    protected $fillable = [
        'name',
        'location',
        'status',
    ];

    public function machines()
    {
        return $this->hasMany(Machine::class);
    }
}
