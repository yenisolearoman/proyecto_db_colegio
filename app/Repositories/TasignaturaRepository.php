<?php

namespace App\Repositories;

use App\Models\Tasignatura;
use App\Repositories\BaseRepository;

/**
 * Class TasignaturaRepository
 * @package App\Repositories
 * @version March 12, 2020, 4:56 pm UTC
*/

class TasignaturaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'intensidad'
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
        return Tasignatura::class;
    }
}
