<?php

namespace App\Repositories;

use App\Models\Courses;
use App\Repositories\BaseRepository;

/**
 * Class CoursesRepository
 * @package App\Repositories
 * @version July 31, 2021, 2:16 am UTC
*/

class CoursesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'category_id',
        'title',
        'description',
        'objective',
        'playlist_url',
        'view_count',
        'status',
        'subscriber_count',
        'photo',
        'actual_price',
        'discount_price'
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
        return Courses::class;
    }
}
