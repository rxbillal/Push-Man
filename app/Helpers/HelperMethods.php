<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\DeviceInfo;
use App\Models\Integration;


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




//---------------------------------------------------//
//                GET DevicePort                     //
//---------------------------------------------------//
function getIntDeviceID(){

    return optional(DeviceInfo::where('id', 1)->select('device_port')->first())->device_port;

}


//---------------------------------------------------//
//            GET Integration BaseUrl                //
//---------------------------------------------------//
function getIntBaseUrl(){

    return optional(Integration::where('id', 1)->select('base_url')->first())->base_url;

}


//---------------------------------------------------//
//              GET Integration ApiUrl               //
//---------------------------------------------------//
function getIntApiUrl(){

    return optional(Integration::where('id', 1)->select('api_url')->first())->api_url;

}


//---------------------------------------------------//
//             GET Integration ApiKey                //
//---------------------------------------------------//
function getIntApiKey(){

    return optional(Integration::where('id', 1)->select('api_key')->first())->api_key;

}


//---------------------------------------------------//
//              GET Integration PushKey              //
//---------------------------------------------------//
function getIntPushKey(){

    return optional(Integration::where('id', 1)->select('push_key')->first())->push_key;

}



