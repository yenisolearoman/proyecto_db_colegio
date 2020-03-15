<?php

namespace App\Repositories;

use App\Models\Tdocente;
use App\Repositories\BaseRepository;

/**
 * Class TdocenteRepository
 * @package App\Repositories
 * @version March 12, 2020, 4:59 pm UTC
*/

class TdocenteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombres',
        'aula'
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
        return Tdocente::class;
    }
}
