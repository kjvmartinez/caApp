<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Participant;

class ReportController extends Controller
{
    
    public function index()
    {
        $participants = DB::table('participants')
        ->join('attendances','participants.idparticipants','=','attendances.participant_idparticipants')
        ->select('participants.*','attendances.logdatetime as logdatetime')
        ->paginate(25);
        
        return view('attendance.report')->with('participants',$participants);
    }

    public function search(Request $request){
        $search = $request -> get('search');
        $participants = DB::table('participants')
        ->join('attendances','participants.idparticipants','=','attendances.participant_idparticipants')
        ->select('participants.*','attendances.logdatetime as logdatetime')
        ->where('lastname','like','%'.$search.'%')
        ->paginate(7);
        return view('attendance.report')->with('participants',$participants);
    }
}
