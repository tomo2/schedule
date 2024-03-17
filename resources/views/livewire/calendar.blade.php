<div>
    <div class="text-centerv text-sm">
        日付を選択して下さい。本日から最大30日先まで選択可能です。
    </div>

    {{-- 日付選択 --}}
    <input id="calendar" class="block mt-1 mx-auto" 
    type="text" name="calendar" 
    value="{{ $currentDate }}"
    wire:change="getDate($event.target.value)"  />


<section class>
    <button wire:click="lastMonth" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
        <<
    </button>

    3月

    <button wire:click="nextMonth" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
        >>
    </button>
</section>
    
<a href="#">fdaf</a>

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
                    <td class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                        <a href="{{ route('events.detail', ['id' => $key ]) }}">
                            {{ $calendars }}
                        </a>
                    </td>
                    
            @endforeach
        </tr>

    </table>    

        


</div>
