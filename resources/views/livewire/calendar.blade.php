<div>
    {{-- <div class="text-centerv text-sm">
        日付を選択して下さい。
    </div> --}}

    {{-- 年月、切り替えボタン --}}
    <section class="text-center pt-16">
        <button wire:click="lastMonth" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            <<
        </button>
        <span class="text-xl px-8">
            {{ $now }}
        </span>
        <button wire:click="nextMonth" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            >>
        </button>
    </section>
{{-- 
    @foreach ($eventsSum as $eventsSums)
    {{ $eventsSums->sum_price }}
    @endforeach --}}

    {{-- カレンダー --}}
    <table class="table-fixed w-11/12 text-center mx-auto my-10">
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
                        {{-- px抜き --}}
                <td class="hover:bg-gray-200 text-gray-800 font-semibold py-8 border border-gray-400 rounded shadow">
                    <a href="{{ route('events.detail', ['id' => $now. "-" . $calendars ]) }}"> 
                        <span class="text-blue-500 text-xl">
                            {{ $calendars }}
                        </span>
                        
                        {{-- イベントのある日付を取得 --}}
                        @foreach ($numberOfPeople as $numberOfPeoples)
                        @if ( $numberOfPeoples->date == $now . "-" . $calendars)
                        <span class="text-xs">
                            <br>予約人数：<span class="bg-red-200">{{ $numberOfPeoples->number }}人</span><br>
                        </span>

                        @endif
                        @endforeach
                        
                        {{-- 日付ごとの合計金額を取得 --}}
                        @foreach ($eventsSum as $eventsSums)                    
                        @if ( $eventsSums->date == $now . "-" . $calendars)
                        <span class="text-xs">
                            料金：<span class="bg-green-200">{{ $eventsSums->sum_price }}円</span>
                        </span>
                        @endif
                        @endforeach
                    </a>
                </td>
            @endforeach
                </tr>
        </table>

</div>
