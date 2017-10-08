<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'userInfo';
    protected $fillable = ['fullName', 'userEmail', 'userPass','userGender', 'birthday', 'contactNo','address', 'holdingType', 'userType', 'userPhoto'];
    public $timestamps = false;

    public function PatientTreatments(){
        return $this->belongsToMany('App\Model\Treatment', 'patientEmail', 'userEmail');
    }

    public function DoctorTreatments(){
        return $this->belongsToMany('App\Model\Treatment', 'doctorEmail', 'userEmail');
    }
}
