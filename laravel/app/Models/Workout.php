<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    protected $fillable = ['name','user_id']; // Add other fields as necessary


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exercice()
    {
        return $this->belongsToMany(Exercice::class);
    }

}
