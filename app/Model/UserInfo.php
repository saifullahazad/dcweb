<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'userInfo';
    protected $fillable = ['fullName', 'userEmail', 'userPass','userGender', 'birthday', 'contactNo','address', 'holdingType', 'userType'];
    public $timestamps = false;
}
