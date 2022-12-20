<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_rol',
        ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}