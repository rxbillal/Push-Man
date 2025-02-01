<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceInfo;
use App\Models\Integration;
use App\Models\User;
use Rats\Zkteco\Lib\ZKTeco;
use Illuminate\Support\Facades\Http;

class DevicesController extends Controller
{


    public function device_ip()
    {

        if (session()->exists('dip')) {
            $deviceip = session('dip');
        }
        else
        {
            session()->put('dip', getDeviceIP());

            $deviceip = getDeviceIP();
        }

        return $deviceip;
    }



    //--------------------------------------------------------------------------
    //                          PROFILE METHOD
    //--------------------------------------------------------------------------
    public function profile(){

        $user = User::find(1)->first();
        return view('dashboard.profile',compact('user'));
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

        DeviceInfo::updateOrCreate(
                ['id' => 1],
                [
                    'identifier' => $request->identifier,
                    'device_ip' => $request->device_ip,
                    'device_port' => $request->device_port,
                ]
            );
        return redirect()->route('devices')->with('success_message','Device Add Successful.',compact('deviceip'));
    }


    public function setting(){

        // $deviceip = $this->device_ip();

        $devices = Integration::get()->all();

        return view('dashboard.setting',compact('devices'));
    }



    public function addSetting(){

        // $deviceip = $this->device_ip();

        $devices = Integration::get()->all();

        return view('dashboard.add_setting',compact('devices'));
    }



    public function SettingConfig(Request $request)
    {
        Integration::updateOrCreate(
            ['id' => 1],
            [
                'name' => $request->name,
                'device_id' => $request->device_id,
                'base_url' => $request->base_url,
                'api_url' => $request->api_url,
                'api_key' => $request->api_key,
                'push_key' => $request->push_key,
            ]
        );

        return redirect()->route('setting')->with('success_message', 'Add Or Update Successful.');
    }




    public function PushSetting(){

        // $deviceip = $this->device_ip();

        $data['devices'] = Integration::get()->all();


        $data['deviceip'] = $this->device_ip();
        $zk = new ZKTeco($data['deviceip'],getDevicePort());
        $zk->connect();
        $zk->disableDevice();
        $data['users'] = $zk->getUser();
        $data['attendaces'] = $zk->getAttendance();

        return view('dashboard.push_setup',$data);
    }


    public function Push()
    {
        $data['deviceip'] = $this->device_ip();
        $zk = new ZKTeco($data['deviceip'], getDevicePort());
        $zk->connect();

        $attendances = $zk->getAttendance();
        $formattedData = [];

        foreach ($attendances as $attendance) {
            $formattedData[] = [
                'finger_print_id' => $attendance['id'],
                'identifier' => (string) $attendance['id'],
                'log_time' => $attendance['timestamp'],
            ];
        }

        $payload = [
            'push_key' => getIntPushKey(),
            'data' => $formattedData
        ];

        // Push the data to the external API
        $response = Http::post(getIntApiUrl(), $payload);

        // Return both local response and API response
        return response()->json([
            'status' => true,
            'message' => 'Attendance data fetched and pushed successfully',
            'local_data' => $payload,
            'api_response' => $response->json(),
        ]);
    }




}
