<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favoris extends Model
{
    use HasFactory;

    public function scene()
    {
        return $this->belongsTo(Scene::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
