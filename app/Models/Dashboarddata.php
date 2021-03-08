<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dashboarddata extends Model
{
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dashboarddata';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
    ];

    /**
     * Fillable fields for a Profile.
     *
     * @var array
     */
    protected $fillable = [
        'Business_Development_Division',
        'CEO_Office',
        'Commercial_Division',
        'Corporate_Affairs_Division',
        'Corporate_Security_Division',
        'EBUD',
        'Finance_Division',
        'Financial_Services_Division',
        'Resource_Division',
        'Technology_Division',
        'VGE_Division',
    ];

    /**
     * Typecasting is awesome.
     *
     * @var array
     */
    protected $casts = [
       
        'Business_Development_Division'  => 'int',
        'CEO_Office'  => 'int',
        'Commercial_Division'  => 'int',
        'Corporate_Affairs_Division'  => 'int',
        'Corporate_Security_Division'  => 'int',
        'EBUD'  => 'int',
        'Finance_Division'  => 'int',
        'Financial_Services_Division'  => 'int',
        'Resource_Division'  => 'int',
        'Technology_Division'  => 'int',
        'VGE_Division'  => 'int',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];


}
