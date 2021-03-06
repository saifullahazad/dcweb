<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $table = 'treatment';
    protected $primaryKey = 'treatmentId';
    protected $fillable = ['treatmentId', 'patientEmail', 'patientRelation','patientName', 'patientGender', 'patientAge','latitude', 'longitude'
        ,'diabetes','pressure','asthma', 'currentDiseases', 'symptom', 'preDiseases', 'doctorGender','ambulance', 'requestDate', 'requestTime'
        , 'doctorCharge', 'ambulanceCharge','otherChargeTypes','otherChargeAmount','requestStatus', 'chargeStatus', 'doctorEmail', 'treatmentStatus', 'paymentStatus','treatmentInfo', 'userCommand'];
    public $timestamps = false;

    public function Patient(){
        return $this->hasOne('App\Model\UserInfo', 'userEmail', 'patientEmail');
    }

    public function Doctor(){
        return $this->hasOne('App\Model\UserInfo', 'userEmail', 'doctorEmail');
    }
}
