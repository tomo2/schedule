<div>
    <div class="text-centerv text-sm">
        日付を選択して下さい。本日から最大30日先まで選択可能です。
    </div>

    {{-- 日付選択 --}}
    <input id="calendar" class="block mt-1 mx-auto" 
    type="text" name="calendar" 
    value="{{ $currentDate }}"
    wire:change="getDate($event.target.value)"  />




    {{ $dayId }}月
    <button>>></button>

    <table class="text-center mx-auto my-20 calendar-width">
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

                    </td>
            @endforeach
    </table>    

        
            @foreach ($lastMonth as $key => $calendars)
            <td class="calendar-btn">
                    {{ $calendars }}
            </td>
            @endforeach

            @foreach ($currentMonth as $key => $calendars)
            <td class="calendar-btn">
                <a href="{{ $calendars }}">
                    {{ $calendars }}
                </a>
            </td>
            @endforeach

            @foreach ($nextMonth as $key => $calendars)
            <td class="calendar-btn">
                    {{ $calendars }}
            </td>
            @endforeach

</div>
