<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Participant;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants = Participant::orderBy('created_at','desc')->paginate(20);
        return view('participant.participant')->with('participants',$participants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "lastname" => "required|min:1",
            "firstname"=> "required|min:1"
        ]);

        $participant = new Participant;
        $participant->lastname = $request->input('lastname');
        $participant->firstname = $request->input('firstname');
        $participant->contactno = $request->input('contactno');
        $participant->save();
        
        return redirect()->route('participant.index');

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
        $participant = Participant::find($id);
        return view('participant.edit')->with('participant',$participant);

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
        $participant = Participant::find($id);
        $participant->lastname = $request->input('lastname');
        $participant->firstname = $request->input('firstname');
        $participant->contactno = $request->input('contactno');
        $participant->save();

        return redirect()->route('participant.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Participant::destroy($id);
        return redirect()->route('participant.index');
    }
}
