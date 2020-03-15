<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tdocente
 * @package App\Models
 * @version March 12, 2020, 4:59 pm UTC
 *
 * @property string nombres
 * @property integer aula
 */
class Tdocente extends Model
{

    public $table = 'tdocente';
    



    public $fillable = [
        'nombres',
        'aula'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombres' => 'string',
        'aula' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
