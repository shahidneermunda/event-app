@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget p-lg">
                <div class="row">
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label  class="col-sm-2  control-label">Event Name</label>
                            <div class="col-sm-4">
                                <input id="name" name="name" class="form-control input-sm" type="text" placeholder="" autofocus>
                            </div>
                            <label  class="col-sm-1 control-label">Venue</label>
                            <div class="col-sm-4">
                                <input id="venue" name="venue" class="form-control input-sm" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label">Start Date</label>
                            <div class="col-sm-4">
                                <input id="start_date" name="start_date" class="form-control input-sm" type="text" onfocus="(this.type='date')" placeholder="">
                            </div>
                            <label  class="col-sm-1 control-label">End Date</label>
                            <div class="col-sm-4">
                                <input id="end_date" name="end_date" class="form-control input-sm" type="text" onfocus="(this.type='date')" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12 alert alert-danger print-error-msg" style="display:none">
                            <ul>
                            </ul>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 text-right">
                                <button type="submit" class="btn btn-submit btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
                                <a href="{{url('/home')}}" type="button" class="btn btn-default btn-sm">Cancel</a>
                            </div>
                        </div>
                    </form>
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

        $(".btn-submit").click(function(e){
            e.preventDefault();
            var name = $("#name").val();
            var venue = $("#venue").val();
            var start_date = $("#start_date").val();
            var end_date = $("#end_date").val();
            $.ajax({
                type:'POST',
                url:"{{ route('events.store') }}",
                data:{name:name, venue:venue,start_date:start_date,end_date:end_date},
                success:function(data){
                    if($.isEmptyObject(data.error)){
                        alert(data.success);
                        window.location.href ='/home';
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
    </script>
@endsection
