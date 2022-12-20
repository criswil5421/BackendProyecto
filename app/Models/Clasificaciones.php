<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificaciones extends Model
{
    use HasFactory;
    protected $fillable = ['imagen','resultado','user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
