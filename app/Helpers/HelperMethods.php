<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\DeviceInfo;





//---------------------------------------------------//
//                GET IP                             //
//---------------------------------------------------//

function getIP()
{
    $deviceIP = DeviceInfo::find(1);

    return $deviceIP->device_ip;
}



//---------------------------------------------------//
//                GET DeviceIP                       //
//---------------------------------------------------//
function getDeviceIP(){

    return optional(DeviceInfo::where('id', 1)->select('device_ip')->first())->device_ip;

}

//---------------------------------------------------//
//                GET DevicePort                     //
//---------------------------------------------------//
function getDevicePort(){

    return optional(DeviceInfo::where('id', 1)->select('device_port')->first())->device_port;

}



//---------------------------------------------------//
//                 GET setDevice                     //
//---------------------------------------------------//
function setDevice($source){
    return Session::put('source', $source);
}




//---------------------------------------------------//
//                 GET getDevice                     //
//---------------------------------------------------//
function getDevice(){
    return Session::get('source');
}





