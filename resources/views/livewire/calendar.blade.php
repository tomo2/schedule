<div>
    <div class="text-centerv text-sm">
        日付を選択して下さい。
    </div>

    {{-- 日付選択 --}}
    {{-- <input id="calendar" class="block mt-1 mx-auto" 
    type="text" name="calendar" 
    value="{{ $currentDate }}"
    wire:change="getDate($event.target.value)"  /> --}}


<section class="text-center pt-8">
    <button wire:click="lastMonth" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
        <<
    </button>

    {{ $now }}

    <button wire:click="nextMonth" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
        >>
    </button>
</section>


{{-- {{ $events }} --}}



    <table class="text-center mx-auto my-20">
        <tr>
            <th class="calendar bg-slate-200">日</th>
            <th class="calendar bg-slate-200">月</th>
            <th class="calendar bg-slate-200">火</th>
            <th class="calendar bg-slate-200">水</th>
            <th class="calendar bg-slate-200">木</th>
            <th class="calendar bg-slate-200">金</th>
            <th class="calendar bg-slate-200">土</th>
        </tr>
        <tr>
            @foreach ($calendar as $key => $calendars)
                @if($key % 7 == 0)
                    </tr><tr>
                @endif

                    <td class="hover:bg-gray-200 text-gray-800 font-semibold py-8 px-14 border border-gray-400 rounded shadow">
                        <a class="text-red-400 text-xl" href="{{ route('events.detail', ['id' => $now. "-" . $calendars ]) }}"> 
                            {{ $calendars }}
                        </a>
                        {{-- イベントのある日付を取得 --}}


                    @foreach ($numberOfPeople as $numberOfPeoples)
                        @if ( $numberOfPeoples->date == $now . "-" . $calendars)
                            <div class="text-xs">
                                <br>{{ $numberOfPeoples->number }}人
                            </div>
                        @endif
                    @endforeach
                        
                    {{-- 日付ごとの合計金額を取得 --}}
                    @foreach ($eventsSum as $eventsSums)                    
                        @if ( $eventsSums->date == $now . "-" . $calendars)
                            <div class="text-xs">
                                {{ $eventsSums->sum_price }}円
                            </div>
                        @endif
                    @endforeach


                    </td>
                        
            @endforeach
                    </tr>
                </table>    
                
                {{ $numberOfPeople }}
                {{-- {{ $eventsSum }} --}}


</div>
