<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // イベントテーブルをイベント管理に渡す
        $events = DB::table('events')
        ->orderBy('date', 'asc')
        ->paginate(15);

        // 名前でまとめる

        $eventsName[] = DB::table('events')
        // ->select('id', 'name')
        // ->selectRaw('sum(name) as group' )
        // ->groupBy('name')
        ->get('name');

        return view('manager.events.index', 
        compact('events'));
    }


    public function create()
    {
        
        return view('manager.events.create');
    }


    public function store(StoreEventRequest $request)
    {

        Event::create([
            'name' => $request['name'],
            'care' => $request['care'],
            'date' => $request['date'],
            'start_time' => $request['start_time'],
            'end_time' => $request['end_time'],
            'price' => $request['price'],
        ]);

        session()->flash('status', '登録okです');

        return to_route('events.index');
    }


    public function show(Event $event)
    {
        $event = Event::findOrFail($event->id);
        // $date = $event->date;
        // $start_time = $event->start_time;
        // $end_time = $event->end_time;

        $user = Event::where('name', $event->name)->get();

        return view('manager.events.show', 
        compact('event', 'user'));
    }


    public function edit(Event $event)
    {
        $event = Event::findOrFail($event->id);
        
        return view('manager.events.edit', 
        compact('event'));
    }


    public function update(UpdateEventRequest $request, Event $event)
    {
        $event = Event::findOrFail($event->id);

        $event->name = $request['name'];
        // $event->care = $request['care'];
        $event->date = $request['date'];
        $event->price = $request['price'];
        // $event->start_time = $request['start_time'];
        // $event->end_time = $request['end_time'];
        $event->save();

        session()->flash('status', '更新しました');

        return to_route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
