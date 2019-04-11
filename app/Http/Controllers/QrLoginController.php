<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use App\Attendance;
use App\QrLogin;

class QrLoginController extends Controller
{
    public function index(Request $request) {
    	
		return view('attendance.qrattendance');
    }

    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
       
        $attendance = new Attendance;
       	$attendance->idparticipants = 1; //$request->input('lastname');
        $participant->save();
        
        echo "Successfully added.";
    }

    /**
    * Call attendance by name
    */
	public function indexoption2(Request $request) {
    	
		return view('auth.QrLogin2');
	}
	public function ViewUserQrCode($value='')
	{
		return view('backEnd.users.viewqrcode');
    }
    
	public function checkUser(Request $request) {
		 $result =0;
			if ($request->data) {
				$user = Participant::where('idparticipants','=',$request->data)->first();
				if ($user) {
					//$participant = Participant::find($id);
				    $result =1;
				 }else{
				 	$result =0;
				 }
				
			}
			
			return $result;
	}
	public function QrAutoGenerate(Request $request)
	{	
		$result=0;
		if ($request->action = 'updateqr') {
			$user = Sentinel::getUser();
			if ($user) {
				$qrLogin=bcrypt($user->personal_number.$user->email.str_random(40));
		        $user->QRpassword= $qrLogin;
		        $user->update();
		        $result=1;
			}
		
		}
		
        return $result;
	}
}
