<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    public function scene() {
        return $this->belongTo(Scene::class);
    }

    public function user() {
        return $this->belongTo(User::class);
    }
}
