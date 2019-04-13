@extends('layouts.app')
@section('content')
        <form action="/attendance/report/search" method="GET">
            <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-7 col-xs-12">
                        <div class="form-example-int form-example-st">
                            <div class="form-group">
                                <div class="nk-int-st">
                                    <input type="text" name="search" class="form-control input-sm" placeholder="Enter Lastname">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                        <div class="form-example-int">
                            <button type="submit" class="btn btn-success notika-btn-success">Search</button>
                        </div>
                    </div>
            </div>
        </form>    
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
                                                  <th scope="col">Log</th>
                                                </tr>
                                </thead>
                                <tbody>
                                        @foreach($participants as $participant)
                                        <tr>
                                            <td>{{$participant->lastname}}</td>
                                            <td>{{$participant->firstname}}</td>
                                            <td>{{$participant->logdatetime}}</td>
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
