
@extends('pages.layout.app')

@section('content')
    <!-- Average Events Begins -->
    <section class="contact-from-section">
        <div class="container">
            <div class="card red py-2" id="intro">
                <!-- Content -->
                <div class="card-body text-black-50 text-center">
                    <h2 class="mb-4 font-weight-bold">
                        AVERAGE EVENTS BY USERS: <span class="text-danger">{{round($avarageEvents,2)}}</span>
                    </h2>
                </div>
                <!-- Content -->
            </div>
        </div>
    </section>
    <!-- Average Events End -->

    <!-- Average By User List Begins -->
    <section class="contact-from-section">
        <div class="container">
            <div class="card red py-2" id="intro">
                <!-- Content -->
                <div class="card-body text-black-50">
                    <div class="table-responsive">
                        <table id="datable_1" class="table table-hover display" >
                            <thead>
                            <tr>
                                <th>$</th>
                                <th>User</th>
                                <th>Events</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($userevents as $i => $userevent)
                            <tr>
                                <td>{{$i+1}}</td>
                                <td>{{$userevent->firstname}} {{$userevent->lastname}}</td>
                                <td>{{$userevent->noofevents}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Content -->
            </div>
        </div>
    </section>
    <!-- Average By User List End -->
@endsection

@section('scripts')

@endsection
