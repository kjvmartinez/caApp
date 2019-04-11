<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Participant;

class AttendanceController extends Controller
{
    //public $timestamps = false;

    public function ajaxRequestPost(Request $request)
    {

        $input = $request->all();
       return response()->json(['success'=>$request->id]);
    }

    public function updateAttendance(Request $request){
        $data = $request->all();
        dd($data);
    }


    public function index()
    {
        return view('attendance.qrattendance');
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if(!(Participant::where('idparticipants','=',$request->id)->exists()))
        {
            return response()->json(['success'=>'ID does not exist.']);
        }

        $attendance = new Attendance;
        $attendance->timestamps = false;
        $attendance->logdatetime = date('Y-m-d H:i:s');
        $attendance->participant_idparticipants = $request->id; 
        $attendance->save();
         
        return response()->json(['success'=>'Attendance Completed ']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
