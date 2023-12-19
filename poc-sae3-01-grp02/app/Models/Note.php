<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'scene_id',
        'user_id',
        'valeur',
    ];

    public function scene()
    {
        return $this->belongsTo(Scene::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
