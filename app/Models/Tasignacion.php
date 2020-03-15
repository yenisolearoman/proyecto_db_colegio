<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tasignacion
 * @package App\Models
 * @version March 12, 2020, 5:22 pm UTC
 *
 * @property integer id_a
 * @property integer id_as
 * @property integer id_d
 */
class Tasignacion extends Model
{

    public $table = 'tasignacion';
    



    public $fillable = [
        'id_a',
        'id_as',
        'id_d'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_a' => 'integer',
        'id_as' => 'integer',
        'id_d' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
