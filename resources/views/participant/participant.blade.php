@extends('layouts.app')
@section('content')
<div class="row">
@if(count($participants)>0)
<div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>List of Participants</h2>
                           
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                                <tr>
                                                  <th scope="col">Last Name</th>
                                                  <th scope="col">First Name</th>
                                                  <th scope="col">Date Registered</th>
                                                  <th scope="col">Last Updated</th>
                                                  <th scope="col">Action</th>
                                                </tr>
                                </thead>
                                <tbody>
                                        @foreach($participants as $participant)
                                        <tr>
                                        <td>{{$participant->lastname}}</td>
                                            <td>{{$participant->firstname}}</td>
                                            <td>{{$participant->created_at}}</td>
                                            <td>{{$participant->updated_at}}</td>
                                            <td>
                                                <!--
                                                DELETE part of the blog form.
                                                -->
                                                <div class="btn-list">
                                                <form action="/participant/{{$participant->idparticipants}}" method="POST">
                                                    @csrf 
                                                    @method("DELETE")
                                                    <a href="/participant/{{$participant->idparticipants}}/edit" class="btn btn-info notika-btn-info btn-xs" role="button">Edit</a>
                                                    <button name="delete" type="submit" class="btn btn-danger notika-btn-danger btn-xs">Delete</button>
                                                </form>
                                                </div>
                                            </td>
                                        </tr> 
                                    @endforeach    
                                </tbody>
                            </table>
                            {{ $participants->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<p>You have no participant registered yet.</p>
@endif

@endsection
