@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget p-lg">
                <div class="row">
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label  class="col-sm-2  control-label">Email</label>
                            <div class="col-sm-4">
                                <input id="email" name="email" class="form-control input-sm" type="email" placeholder="" autofocus>
                            </div>
                            <input id="event_id" name="event_id" type="hidden" value="{{$event_id}}">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-submit btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Send Invitation</button>
                                <a href="{{url('/home')}}" type="button" class="btn btn-default btn-sm">Back to Home</a>
                            </div>
                        </div>
                        <div class="col-sm-12 alert alert-danger print-error-msg" style="display:none">
                            <ul>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="m-b-lg">Invitation List</h4>
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            @foreach($invitations as $i => $invitation)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$invitation->email}}</td>
                                <td>
                                    <button invitation_id='{{$invitation->id}}' onclick='deleteInvitation($(this))' type="button" class="btn btn-xs btn-danger btn-icon-anim btn-circle">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div><!-- END column -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //Create Invitation.............................
        $(".btn-submit").click(function(e){
            e.preventDefault();
            var email = $("#email").val();
            var event_id = $("#event_id").val();
            $.ajax({
                type:'POST',
                url:"{{ route('events.invite') }}",
                data:{email:email, event_id:event_id},
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                        location.reload();
                    }else{
                        printErrorMsg(data.error);
                    }
                }
            });
        });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }

        //Delete Invited.................
        function deleteInvitation(ele){
            if (confirm("Are you realy want to remove!") == true) {
                var invitation_id = ele.attr('invitation_id');
                $.ajax({
                    type:'DELETE',
                    url:"{{ url('delinvite') }}/"+invitation_id,
                    //data:{email:email, event_id:event_id},
                    success:function(data){
                        if($.isEmptyObject(data.error)){
                            alert(data.success);
                            location.reload();
                        }else{
                            printErrorMsg(data.error);
                        }
                    }
                });
            }
        }
    </script>
@endsection
