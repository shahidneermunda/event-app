<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    /**
     * Show the application Index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function eventcount()
    {
        $userevents=Event::groupBy('user_id')
            ->join('users','users.id','=','events.user_id')
            ->selectRaw('users.name as firstname,users.last_name as lastname,count(*) as noofevents')
            ->get();
        $avarageEvents=$userevents->avg('noofevents');

        return view('pages.eventcount',compact('userevents','avarageEvents'));
    }

    /**
     * Show the application Index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events=Event::orderBy('start_date','desc')->paginate(5);
        return view('pages.index',compact('events'));
    }

    /**
     * Function for filter.
     *
     */
    public function searchfilter(Request $request)
    {
        $text=$request->text;
        $events = \Illuminate\Support\Facades\DB::table('events')
            ->where('name', 'like', '%'.$text.'%')
            ->orWhere('venue', 'like', '%'.$text.'%')
            ->orWhere('start_date', 'like', '%'.$text.'%')
            ->orWhere('end_date', 'like', '%'.$text.'%')
            ->paginate(5);
        return view('pages.index',compact('events'));
    }

    /**
     * Function for Date Search.
     *
     */
    public function searchdate(Request $request)
    {
        $startDate=$request->start_date;
        $endDate=$request->end_date;

        $events = \Illuminate\Support\Facades\DB::table('events')
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate)
            ->paginate(5);
        return view('pages.index',compact('events'));
    }


}
