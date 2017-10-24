<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //

    protected $table = 'content';
    protected $fillable = ['contentCode', 'contentDetail'];
    public $timestamps = false;
}
