<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function detail($id)
    {
        // foreachで予約利用者を表示用
        $events = Event::where('date', $id)->get();

        // 日付表示用
        $date = Event::where('date', $id)->first();

        return view('event-detail', compact('events','date'));
    }

    // public function reserve(Request $request)
    // {
    //     Event::findOrFail($request->id);

        
    // Reservation::create([
    //         'name' => $request['name'],
    //         'care' => $request['care'],
    //         'date' => $request['date'],
    //         'start_time' => $request['start_time'],
    //         'end_time' => $request['end_time'],
    //     ]);

    //     session()->flash('status', '登録okです');

    //     return to_route('dashboard');
    // }

}
