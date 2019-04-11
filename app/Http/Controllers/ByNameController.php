<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;
use Illuminate\Support\Facades\DB;
use App\Attendance;

class ByNameController extends Controller
{
    public function search(Request $request){
        $search = $request -> get('search');
        $participants = DB::table('participants')->where('lastname','like','%'.$search.'%')->paginate(25);
        return view('attendance.nameattendance')->with('participants',$participants);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = DB::table('participants')->where('lastname','=','')->paginate(25);//Participant::paginate(20);
        return view('attendance.nameattendance')->with('participants',$participants);
        //return view('attendance.nameattendance');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
