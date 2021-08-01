<?php

namespace App\Repositories;

use App\Models\Subscription;
use App\Repositories\BaseRepository;

/**
 * Class SubscriptionRepository
 * @package App\Repositories
 * @version August 1, 2021, 3:31 am UTC
*/

class SubscriptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'course_id',
        'user_account_id',
        'paid_date',
        'expiry_date',
        'plan',
        'paid_amount',
        'status'
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
        return Subscription::class;
    }
}
