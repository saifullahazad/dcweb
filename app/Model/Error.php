<?php
/**
 * Created by PhpStorm.
 * User: cio
 * Date: 10/30/2017
 * Time: 2:23 PM
 */

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    //

    protected $table = 'error';
    protected $fillable = ['status', 'message'];
    public $timestamps = false;

    public static function getErrorAsObject(\Exception $e){
        $arrError = array(
            'status' => 'error',
            'message' => $e->getMessage(),
        );

        $error = new Error($arrError);

        return $error;
    }

    public static function getErrorAsArray(\Exception $e){
        $error = self::getErrorAsObject($e);
        $err=array($error);

        return $err;
    }
}
