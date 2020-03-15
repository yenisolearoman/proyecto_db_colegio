<?php

namespace App\Repositories;

use App\Models\Talumno;
use App\Repositories\BaseRepository;

/**
 * Class TalumnoRepository
 * @package App\Repositories
 * @version March 12, 2020, 4:48 pm UTC
*/

class TalumnoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'fecha_nac'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Talumno::class;
    }
}
