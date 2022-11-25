<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendarioacademico extends Model
{
    use HasFactory;

    protected $fillable = [
        'cuatrimestre', 'tdia', 'tmes', 'tano', 'fecha'
       ];
}
