@extends('layouts.app')
    <meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')
    <div class="container">
        <h1>Starter Qr login</h1>
        <div class="container" id="QR-Code">
            <div class="well" style="position: relative;display: inline-block;">
                <canvas width="320" height="320" id="webcodecam-canvas"></canvas>
            </div>
        </div>
        <p id="inner"></p>
    </div>

@endsection


@section('ajaxpart')
<script type="text/javascript">
    var arg = {
                resultFunction: function(result) {
                    var code = result.code;
                    if (result.code!='') {
                        $.ajax({
                        type: 'POST',
                        url : '/attendance/qrattendance', 
                        data: {id: code}, 
                        success: function(data){
                            alert(data.success);
                        },
                        error: function(jqXHR, testStatus, errorThrown){
                                console.log(JSON.stringify(jqXHR));
                                console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                        }
                        });
                        $('body').append($('<li>' + result.format + ': ' + result.code + '</li>'));   
                    }
                    else{
                      
                    }
                }
            };
         
            new WebCodeCamJS("canvas").init(arg).play();
   
    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });

   

    // $(".btn-submit").click(function(e){

  

    //     e.preventDefault();

   

    //     var name = $("input[name=name]").val();
    //     var password = $("input[name=password]").val();
    //     var email = $("input[name=email]").val();

   

    //     $.ajax({
    //        type:'POST',
    //        url:'/ajaxRequest',
    //        data:{name:name, password:password, email:email},
    //        success:function(data){
    //           alert(data.success);
    //        }
    //     });
	// });

</script>

@endsection