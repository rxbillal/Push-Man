<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rats\Zkteco\Lib\ZKTeco;

class MachineController extends Controller
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
    public function device_setip(Request $request)
    {
        session()->put('dip', $request->deviceip);

        return redirect()->back();
    }
    public function index()
    {
        $deviceip = $this->device_ip();

        return view('device.welcome',compact('deviceip'));
    }
    public function test_sound()
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip,2256);
        $zk->connect();
        $zk->disableDevice();
        $zk->testVoice();
        return redirect()->back()->with('success_message','Playing sound on device.');
    }

    // public function devices(){

    //     $deviceip = $this->device_ip();
    //     return view('dashboard.devices',compact('deviceip'));
    // }

    // public function device_add(Request $request){

    //     $deviceip = $this->device_ip();

    //     return view('dashboard.device-add',compact('deviceip'));
    // }

    // public function devicesAdd(Request $request){

    //     return $request->all();

    //     $deviceip = $this->device_ip();

    //     return view('dashboard.device-add',compact('deviceip'));
    // }

    public function integration_add(){

        $deviceip = $this->device_ip();
        return view('dashboard.integration-add',compact('deviceip'));
    }

    public function device_information(){

        $data['deviceip'] = $this->device_ip();
        $zk = new ZKTeco($data['deviceip'],2256);
        $zk->connect();
        $zk->disableDevice();
        $data['deviceVersion']      = $zk->version();
        $data['deviceOSVersion']    = $zk->osVersion();
        $data['devicePlatform']     = $zk->platform();
        $data['devicefmVersion']    = $zk->fmVersion();
        $data['deviceworkCode']     = $zk->workCode();
        $data['devicessr']          = $zk->ssr();
        $data['devicepinWidth']     = $zk->pinWidth();
        $data['deviceserialNumber'] = $zk->serialNumber();
        $data['devicedeviceName']   = $zk->deviceName();
        $data['devicegetTime']      = $zk->getTime();

        return view('dashboard.device-information',$data);
    }

    public function device_data()
    {
        $data['deviceip'] = $this->device_ip();
        $zk = new ZKTeco($data['deviceip'],2256);
        $zk->connect();
        $zk->disableDevice();
        $data['users'] = $zk->getUser();
        $data['attendaces'] = $zk->getAttendance();
        return view('dashboard.device-data',$data);
    }

    public function device_attendance()
    {
        $data['deviceip'] = $this->device_ip();
        $zk = new ZKTeco($data['deviceip'],2256);
        $zk->connect();
        $zk->disableDevice();
        $data['users'] = $zk->getUser();
        $data['attendaces'] = $zk->getAttendance();
        return view('dashboard.device-attendance',$data);
    }


    public function device_data_clear_attendance()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip,2256);
        $zk->connect();
        $zk->disableDevice();
        $zk->clearAttendance();

        return redirect()->back()->with('success_message','Attendance cleared successfully.');
    }

    public function device_restart()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip,2256);
        $zk->connect();
        $zk->disableDevice();
        $zk->restart();

        return redirect()->back()->with('success_message','Device restart successfully.');
    }

    public function device_shutdown()
    {
        $deviceip = $this->device_ip();

        $zk = new ZKTeco($deviceip,2256);
        $zk->connect();
        $zk->disableDevice();
        $zk->shutdown();

        return redirect()->back();
    }

    public function device_adduser()
    {
        $deviceip = $this->device_ip();
        return view('dashboard.device-adduser',compact('deviceip'));
    }



    public function device_setuser(Request $request)
    {
       $deviceip = $this->device_ip();
       $uid = $request->uid;
       $userid = $request->userid;
       $name = $request->name;
       $role = (int)$request->role;
       $password = $request->password;
       $cardno = $request->cardno;
       //dd($request->role);
       $zk = new ZKTeco($deviceip,2256);
       $zk->connect();
       $zk->disableDevice();
       $zk->setUser($uid , $userid , $name , $role , $password , $cardno);

       return redirect()->back()->with('success_message','User added to device successfully.');
    }

    public function device_removeuser_single($uid)
    {
        $deviceip = $this->device_ip();
        $zk = new ZKTeco($deviceip,2256);
        $zk->connect();
        $zk->disableDevice();
        $zk->removeUser($uid);

        return redirect()->back()->with('success_message','User removed from device successfully.');
    }

    public function device_viewuser_single(Request $request)
    {
        $deviceip = $this->device_ip();
        $uid = $request->uid;
        $userid = $request->userid;
        $name = $request->name;
        $role = (int)$request->role;
        $password = $request->password;
        $cardno = $request->cardno;

        $zk = new ZKTeco($deviceip,2256);
        $zk->connect();
        $userfingerprints=$zk->getFingerprint($request->uid);

        // foreach($userfingerprints as $userfingerprint)
        // {
        //     $imagearray= unpack("C*",$userfingerprint);
        // }
        // $data = implode('', array_map(function($e) {
        //     return pack("C*", $e);
        // }, $$userfingerprint));
        // echo $data;
        // dd($data);

        //dd($userfingerprints);
        return view('device.device-information-user',compact(
            'deviceip','uid','userid','name',
            'role','password','cardno','userfingerprints',
        ));
    }
}
