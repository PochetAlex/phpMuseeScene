<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    use HasFactory;

    public function commentaire() {
        return $this->hasMany(Commentaire::class);
    }

    public function user() {
        return $this->belongTo(User::class);
    }

    public function favoris(){
        return $this->belongsToMany(User::class, 'favoris');
    }

    public function note(int $note){
            return $this->belongsToMany(User::class, 'note');
    }
}
