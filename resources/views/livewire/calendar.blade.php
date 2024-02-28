<div>
    カレンダー
    <x-input id="calendar" class="block mt-1 w-full" type="text" name="calendar" required />

    {{ $currentDate }}

    <div class="flex">
        @for($day = 0; $day < $lastDay; $day++)
            {{ $currentMonth[$day] }}
        @endfor
    </div>
</div>
