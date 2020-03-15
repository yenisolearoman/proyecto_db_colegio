<?php

namespace App\Repositories;

use App\Models\Tasignacion;
use App\Repositories\BaseRepository;

/**
 * Class TasignacionRepository
 * @package App\Repositories
 * @version March 12, 2020, 5:22 pm UTC
*/

class TasignacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_a',
        'id_as',
        'id_d'
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
        return Tasignacion::class;
    }
}
