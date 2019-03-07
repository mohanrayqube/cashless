<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QrStatus extends Model
{
    protected $table="ngr_qr_status";
    protected $fillable = [	'datetime','user_id','status'];

    public static function addQrStatus($data)
    {
        $data = QrStatus::create($data);
        if($data){
        	$response = [
        		'status'=> 1,
        		'message'=>'QR code add successfully'
        	];
        }else{
        	$response = [
        		'status'=> 0,
        		'message'=>'Something went wrong. Please try again.'
        	];
        }
        return $response;
    }

}
