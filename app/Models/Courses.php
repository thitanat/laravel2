<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Courses
 * @package App\Models
 * @version July 31, 2021, 2:16 am UTC
 *
 * @property integer $user_id
 * @property integer $category_id
 * @property string $title
 * @property string $description
 * @property string $objective
 * @property string $playlist_url
 * @property integer $view_count
 * @property integer $status
 * @property integer $subscriber_count
 * @property string $photo
 * @property number $actual_price
 * @property number $discount_price
 */
class Courses extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'category_id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'objective' => 'string',
        'playlist_url' => 'string',
        'view_count' => 'integer',
        'status' => 'integer',
        'subscriber_count' => 'integer',
        'photo' => 'string',
        'actual_price' => 'float',
        'discount_price' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'category_id' => 'required|integer',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'objective' => 'required|string',
        'playlist_url' => 'required|string|max:255',
        'view_count' => 'required|integer',
        'status' => 'required|integer',
        'subscriber_count' => 'required|integer',
        'photo' => 'nullable|string|max:255',
        'actual_price' => 'required|numeric',
        'discount_price' => 'required|numeric',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
