@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="widget p-lg">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="m-b-lg">My Events <a href="{{url('/create_event')}}" class="btn btn-xs btn-dark">Create New Event</a></h4>
                        <table class="table table-hover">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Venue</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Invite</th>
                            </tr>
                            @foreach($events as $i => $event)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->venue}}</td>
                                <td>{{date('d-m-Y', strtotime($event->start_date))}}</td>
                                <td>{{date('d-m-Y', strtotime($event->end_date))}}</td>
                                <td>
                                    <a href="invite/{{$event->id}}" class="btn btn-xs btn-primary">Invite People</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div><!-- END column -->
                </div><!-- .widget-body -->
            </div><!-- .widget -->
        </div>
    </div>

@endsection

@section('scripts')

@endsection


