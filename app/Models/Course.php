<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'descripcion',
        'fechaInicio',
        'fechaFinal',
        'tutor',
        'categoria'
     ];
     /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
}