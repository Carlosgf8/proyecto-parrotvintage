<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name', 'type', 'size', 'color', 'description', 'brand', 'price', 'image'
    ];
    

    public function ropasFavoritas()
    {
        return $this->belongsToMany(Ropa::class, 'favorites')->withTimestamps();
    }
}
