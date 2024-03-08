<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoritosModel extends Model
{
    use HasFactory;
    protected $fillable = [
        "id_curso",
        "id_user",
    ] ;
}
