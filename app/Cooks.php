<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cooks extends Model
{
    protected $table = 'cooks';
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'gender',
        'dob',
        'account_number',
        'bank_name',
        'bvn',
        'phone',
        'email',
        'state',
        'lga',
        'photo',
        'school_id',
        'students',
        'is_active',
    ];

    public function getPhotoAttribute($value)
    {
        if ($value) {
            return asset('uploads/' . $value);
        } else {
            return asset('backend/dist/img/avatar.png');
        }
    }

     public function school()
     {
         return $this->hasOne(School::class, 'id', 'school_id');
     }

     public function getFullNameAttribute(){
        return $this->first_name . ' ' . $this->middle_name;
    }

    public static function get_name($id)
    {
        $cooks = Cooks::find($id);
        return $cooks->first_name.' '.$cooks->middle_name;
    }

}
