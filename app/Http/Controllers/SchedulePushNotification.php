<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use App\ProviderDevice;
use App\User;
use App\Provider;
use App\UserRequests;
use Exception;
use \Carbon\Carbon;
use DB;

class SchedulePushNotification extends Controller
{
	public function sendSchedulePushToProvider(){

		try{
			$mytime = Carbon::now();
			//$aftertime = ((new Carbon(Carbon::now()->addMinutes(30)))->format('Y-m-d H:i'));

			$starttime = Carbon::createFromTime(Carbon::now()->hour,Carbon::now()->minute,00)->addMinutes(30)->format('Y-m-d H:i:s');

			$endtime = Carbon::createFromTime(Carbon::now()->hour,Carbon::now()->minute,59)->addMinutes(30)->format('Y-m-d H:i:s');
			
			$UserRequests = DB::table('user_requests')->where('status','SCHEDULED')
                        ->where('schedule_at','>=',$starttime)
                        ->where('schedule_at','<=',$endtime)
                        ->get();
                     
			foreach ($UserRequests as $UserRequest) {

			    $provider = ProviderDevice::where('provider_id',$UserRequest->provider_id)->first();

	 			if($provider->player_id != "")
	 			{
	 				return $provider->player_id;
	 				
                    $playerId = $provider->player_id;
                    $title = "Schedule Trip";
                    $sender = "ExpressDrive";
                    $message = "Please be ready your accepted Trip will start after 30 min";
                    $type = "Schedule";
                    $notification_type = 'Schedule';
	 				SchedulePushNotification::sendNotification($playerId, $title, $sender, $message, $type, $notification_type);
	 			}
	 			else
	 			{
	 				return "No player_id found";
	 			}
			}
		
 			
		} catch(Exception $e){
    		return $e;
    	}
    }

    public static function sendNotification($playerId, $title, $sender,$message,$type,$notification_type)
    {
        //$ProviderDeviceModel = ProviderDevice::where(['player_id'=>$playerId])->get();
       
        $currentTime = date('d-m-Y h-i-s a');
        $content = array(
            "en" => $message
        );

        $fields = array(
            'app_id' => "aa932db3-9d9b-465c-8620-51f668bfe92b",
            'include_player_ids' => array($playerId),
            'data' => array("title" => $title, "sender" => $sender, "time" => $currentTime, "message" => $message, "type" => $type),
            'contents' => $content
        );
        $fields = json_encode($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
            'Authorization: Basic ZjQzNmQ5NzQtYjEwZi00YzY1LTljZDktOGJjZjhiMGI4NWQw'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);

    }
}
?>