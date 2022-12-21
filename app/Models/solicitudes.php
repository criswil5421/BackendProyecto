<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitudes extends Model
{
    use HasFactory;
    protected $fillable = ['razon_social','ruc','descripcion','presupuesto','estado','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
