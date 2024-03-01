<div>
    カレンダー
    <input id="calendar" class="block mt-1 w-full" 
    type="text" name="calendar" 
    value="{{ $currentDate }}"
    wire:change="getDate($event.target.value)"  />

    {{ $currentDate }}

    <div class="flex">
        @for($day = 0; $day < $lastDay; $day++)
            {{ $currentMonth[$day] }}
        @endfor
    </div>
</div>
