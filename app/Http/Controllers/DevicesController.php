<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceInfo;

class DevicesController extends Controller
{


    public function device_ip()
    {

        if (session()->exists('dip')) {
            $deviceip = session('dip');
        }
        else
        {
            session()->put('dip', '103.79.183.44');

            $deviceip = '103.79.183.44';
        }

        return $deviceip;
    }


    public function devices(){

        $deviceip = $this->device_ip();

        $devices = DeviceInfo::get()->all();

        return view('dashboard.devices',compact('deviceip', 'devices'));
    }

    public function device_add(Request $request){

        $deviceip = $this->device_ip();

        return view('dashboard.device-add',compact('deviceip'));
    }

    public function devicesAdd(Request $request){


        $deviceip = $this->device_ip();

        DeviceInfo::create([
            'identifier' => $request->identifier,
            'device_ip' =>$request->device_ip
        ]);


        return redirect()->route('devices')->with('success_message','Device Add Successful.',compact('deviceip'));
    }
}
