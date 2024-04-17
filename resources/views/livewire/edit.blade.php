



<table class="mx-auto">
    <tr class="text-sm">
        <th></th>
        <th class="pt-4 ">3-4時間</th>
        <th class="pt-4">4-5時間</th>
        <th class="pt-4">5-6時間</th>
        <th class="pt-4">6-7時間</th>
        <th class="pt-4">7-8時間</th>
        <th class="pt-4">8-9時間</th>
    </tr>
    <tr>
        <td class="px-4 text-xs">要介護1</td>
        <td><x-button2 type="button" wire:click="number13">要介護1 3~4時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number14">要介護1 4~5時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number15">要介護1 5~6時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number16">要介護1 6~7時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number17">要介護1 7~8時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number18">要介護1 8~9時間</x-button2></td>
    </tr>
    <tr>
        <td class="px-4 text-xs">要介護2</td>
        <td><x-button2 type="button" wire:click="number23">要介護2 3~4時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number24">要介護2 4~5時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number25">要介護2 5~6時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number26">要介護2 6~7時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number27">要介護2 7~8時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number28">要介護2 8~9時間</x-button2></td>
    </tr>
    <tr>
        <td class="px-4 text-xs">要介護3</td>
        <td><x-button2 type="button" wire:click="number33">要介護3 3~4時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number34">要介護3 4~5時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number35">要介護3 5~6時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number36">要介護3 6~7時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number37">要介護3 7~8時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number38">要介護3 8~9時間</x-button2></td>
    </tr>
    <tr>
        <td class="px-4 text-xs">要介護4</td>
        <td><x-button2 type="button" wire:click="number43">要介護4 3~4時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number44">要介護4 4~5時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number45">要介護4 5~6時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number46">要介護4 6~7時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number47">要介護4 7~8時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number48">要介護4 8~9時間</x-button2></td>
    </tr>
    <tr>
        <td class="px-4 text-xs">要介護5</td>
        <td><x-button2 type="button" wire:click="number53">要介護5 3~4時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number54">要介護5 4~5時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number55">要介護5 5~6時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number56">要介護5 6~7時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number57">要介護5 7~8時間</x-button2></td>
        <td><x-button2 type="button" wire:click="number58">要介護5 8~9時間</x-button2></td>
    </tr>
</table>

<div class="mx-auto w-1/3 mt-4">
    <x-label for="price" value="料金" />
    <x-input value="{{ floor($price) }}" id="price" class="block mt-1 w-full" type="text" name="price" required />
</div>
