<div>
    <div class="text-centerv text-sm">
        日付を選択して下さい。本日から最大30日先まで選択可能です。
    </div>

    {{-- 日付選択 --}}
    <input id="calendar" class="block mt-1 mx-auto" 
    type="text" name="calendar" 
    value="{{ $currentDate }}"
    wire:change="getDate($event.target.value)"  />

    {{ $currentDate }}

    {{-- カレンダー --}}
    {{-- <div class="flex border border-gray-400">
        @for($day = 0; $day < 42; $day++)
            @if($day % 7 == 0)
                <br>
            @endif
                {{ $calendar[$day] }}
        @endfor
    </div> --}}


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
                    <td class="calendar-btn">
                        <a href="#">
                            {{ $calendars }}
                        </a>
                    </td>
            @endforeach
    </table>
    

</div>
