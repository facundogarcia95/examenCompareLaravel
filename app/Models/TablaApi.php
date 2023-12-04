<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaApi extends Model
{
    use HasFactory;

    public static $ESTADO_ACTIVO = 1;

    protected $table = 'tabla_api';

    protected $fillable = ['nombre','estado'];

}
