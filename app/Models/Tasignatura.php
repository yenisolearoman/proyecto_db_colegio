<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tasignatura
 * @package App\Models
 * @version March 12, 2020, 4:56 pm UTC
 *
 * @property string nombre
 * @property integer intensidad
 */
class Tasignatura extends Model
{

    public $table = 'tasignatura';
    



    public $fillable = [
        'nombre',
        'intensidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'intensidad' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
