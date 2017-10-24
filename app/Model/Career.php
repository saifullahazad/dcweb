<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    //
    protected $table = 'career';
    protected $fillable = ['fullName', 'email', 'aboutMe','gender', 'birthday', 'contactNo','address', 'specialistOn', 'nid', 'photo'];
    public $timestamps = false;
}
