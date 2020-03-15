<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Talumno
 * @package App\Models
 * @version March 12, 2020, 4:48 pm UTC
 *
 * @property string nombre
 * @property string fecha_nac
 */
class Talumno extends Model
{

    public $table = 'talumno';
    



    public $fillable = [
        'nombre',
        'fecha_nac'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'fecha_nac' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
