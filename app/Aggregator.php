<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aggregator extends Model
{
    protected $table = 'aggregators';
    protected $fillable = [
        'company_name',
        'address',
        'phone',
        'bank',
        'account_no',
        'tin',
        'feed_pupils',
        'amount_to_paid_cook',
        'program_manager_id',
        'is_verified',
        'is_active',
    ];

    public static function get_name($id)
    {
        return Aggregator::find($id)->company_name;
    }



}
