<?php

namespace App\Http\Controllers;

use App\Mail\InvitationMail;
use App\Models\Event;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Mail;

class EventController extends Controller
{
    /**
     * Method for Create Event
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'venue' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        Event::create([
            'name' => $request->name,
            'venue' => $request->venue,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'user_id' => Auth::id(),
        ]);

        return response()->json(['success' => 'Event created successfully.']);
    }

    /**
     * Method for Create and View Invitation
     *
     *
     */
    public function show($event_id)
    {
        $invitations=Invitation::where('event_id',$event_id)->orderBy('created_at','desc')->get();
        return view('invitation',compact('invitations','event_id'));
    }

    /**
     * Method for Create Event
     *
     * @return response()
     */
    public function invite(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'event_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        Invitation::create([
            'email' => $request->email,
            'event_id' => $request->event_id,
        ]);

        //ToDO Configure Email Setting in .env and Remove Comment..........
       /* $event=Event::find($request->event_id);
        Mail::to($request->email)->send(new InvitationMail($event));
        if (Mail::failures()) {
            return response()->json(['success' => 'Invitation saved.Email not send']);
        }else{
            return response()->json(['success' => 'Invitation Sent successfully.']);
        }*/

        return response()->json(['success' => 'Invitation Sent successfully.']);
    }

    /**
     * Method for Create Event
     *
     * @return response()
     */
    public function deleteInvitation($id)
    {
        if(Invitation::destroy($id))
            return response()->json(['success' => 'Invitation Removed successfully.']);
        else
            return response()->json(['error' => 'Invitation Removed successfully.']);
    }
}
