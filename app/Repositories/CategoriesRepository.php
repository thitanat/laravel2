<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Repositories\BaseRepository;

/**
 * Class CategoriesRepository
 * @package App\Repositories
 * @version July 31, 2021, 2:16 am UTC
*/

class CategoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'view_count'
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
        return Categories::class;
    }
}
