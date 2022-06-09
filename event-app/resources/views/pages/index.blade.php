
@extends('pages.layout.app')

@section('content')

<!-- Register Section Begin -->
<section class="hero-section set-bg" data-setbg="public/img/hero.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-text">
                    <h2>Do you Planing an Event<br /> Host here.</h2>
                    <a href="/register" class="primary-btn">Register</a>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="public/img/hero-right.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Register Section End -->



<!-- Schedule Section Begin -->
<section class="schedule-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Our Events</h2>
                    <p>Do not miss anything topic about the event</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default card-view">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div class="dataTables_wrapper form-inline dt-bootstrap col-md-12" style="padding-bottom: 10px;">
                                <div class="col-sm-9">
                                    <form action="{{url('/searchdate')}}">
                                        <div class="form-group">
                                        <div class="col-sm-5">
                                            <label>
                                                Start:
                                                <input type="text" onfocus="(this.type='date')" name="start_date" class="form-control input-sm" placeholder="Start Date">
                                            </label>
                                        </div>
                                        <div class="col-sm-5">
                                            <label>
                                                End:
                                                <input type="text" onfocus="(this.type='date')" name="end_date" class="form-control input-sm" placeholder="End Date">
                                            </label>
                                        </div>
                                        <div class="col-sm-2">
                                            <button  class="btn btn-primary btn-xs" type="submit"><i class="fa fa-search"></i> Load</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <form action="{{url('/searchfilter')}}">
                                        <div class="input-group">
                                            <input class="form-control border-end-0 border rounded-pill" placeholder="Search" name="text" type="text"  id="example-search-input" required>
                                            <span class="input-group-append">
                                                <button class="btn btn-outline-secondary bg-white border-start-0 border rounded-pill ms-n3" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <table id="datable_1" class="table table-hover display  pb-30" >
                                <thead>
                                <tr>
                                    <th>$</th>
                                    <th>Event</th>
                                    <th>Venue</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($events as $i =>$event)
                                    <tr>
                                        <td>{{($events->perPage() * ($events->currentPage() - 1)) + $i+1}}</td>
                                        <td>{{$event->name}}</td>
                                        <td>{{$event->venue}}</td>
                                        <td>{{date('d-m-Y', strtotime($event->start_date))}}</td>
                                        <td>{{date('d-m-Y', strtotime($event->end_date))}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="clearfix">
                    {!! $events->withQueryString()->links('pagination::bootstrap-4') !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Schedule Section End -->

@endsection

@section('scripts')

@endsection

