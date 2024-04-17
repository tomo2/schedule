<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            イベント新規登録
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-2x1 mx-auto">
                <x-validation-errors class="mb-4" />
    
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                    
                    <form method="POST" action="{{ route('events.update', ['event' => $event->id]) }}">
                        @csrf
                        @method('put')
                        {{-- nameでflatpickrを利用 --}}
                        <div class="mx-auto w-2/3">
                            <div class="mt-12">
                                <x-label for="name" value="名前" />
                                <x-input value="{{ $event->name }}" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="care" value="介護度" />
                                <x-input value="{{ $event->care }}" id="care" class=" block mt-1 w-1/3" type="text" name="care" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="date" value="利用日" />
                                <x-input value="{{ $event->date }}" id="date" class=" block mt-1 w-1/3" type="text" name="date" required />
                            </div>
                        </div>
 
                        <div class="flex justify-around">
                            <div class="mt-4">
                                <x-label for="start_time" value="開始時間" />
                                <x-input value="{{ $event->start_time }}" id="start_time" class="block mt-1 w-full" type="text" name="start_time" required />
                            </div>

                            <div class="mt-4">
                                <x-label for="end_time" value="終了時間" />
                                <x-input value="{{ $event->end_time }}" id="end_time" class="block mt-1 w-full" type="text" name="end_time" required />
                            </div>
                        </div>
                    
                    {{-- 料金の計算を行い表示する --}}

                {{-- buttonを指定することでformに影響を与えない --}}

                後ほどボタンを押せるようにする
                <div class="mt-6 mx-auto w-2/3">
                    <x-label for="time" value="利用時間" />
                </div>

                    <table class="mx-auto">
                            <tr class="text-sm">
                                <th></th>
                                <th class="pt-4">3-4時間</th>
                                <th class="pt-4">4-5時間</th>
                                <th class="pt-4">5-6時間</th>
                                <th class="pt-4">6-7時間</th>
                                <th class="pt-4">7-8時間</th>
                                <th class="pt-4">8-9時間</th>
                            </tr>
                            <tr>
                                <td class="px-4 text-xs">要介護1</td>
                                <td><x-button2 type="button" value="368">要介護1 3~4時間</x-button2></td>
                                <td><x-button2 type="button" value="386">要介護1 4~5時間</x-button2></td>
                                <td><x-button2 type="button" value="567">要介護1 5~6時間</x-button2></td>
                                <td><x-button2 type="button" value="581">要介護1 6~7時間</x-button2></td>
                                <td><x-button2 type="button" value="655">要介護1 7~8時間</x-button2></td>
                                <td><x-button2 type="button" value="666">要介護1 8~9時間</x-button2></td>
                            </tr>
                            <tr>
                                <td class="px-4 text-xs">要介護2</td>
                                <td><x-button2 type="button" value="421">要介護2 3~4時間</x-button2></td>
                                <td><x-button2 type="button" value="442">要介護2 4~5時間</x-button2></td>
                                <td><x-button2 type="button" value="670">要介護2 5~6時間</x-button2></td>
                                <td><x-button2 type="button" value="686">要介護2 6~7時間</x-button2></td>
                                <td><x-button2 type="button" value="773">要介護2 7~8時間</x-button2></td>
                                <td><x-button2 type="button" value="787">要介護2 8~9時間</x-button2></td>
                            </tr>
                            <tr>
                                <td class="px-4 text-xs">要介護3</td>
                                <td><x-button2 type="button" value="477">要介護3 3~4時間</x-button2></td>
                                <td><x-button2 type="button" value="500">要介護3 4~5時間</x-button2></td>
                                <td><x-button2 type="button" value="773">要介護3 5~6時間</x-button2></td>
                                <td><x-button2 type="button" value="792">要介護3 6~7時間</x-button2></td>
                                <td><x-button2 type="button" value="896">要介護3 7~8時間</x-button2></td>
                                <td><x-button2 type="button" value="911">要介護3 8~9時間</x-button2></td>
                            </tr>
                            <tr>
                                <td class="px-4 text-xs">要介護4</td>
                                <td><x-button2 type="button" value="530">要介護4 3~4時間</x-button2></td>
                                <td><x-button2 type="button" value="557">要介護4 4~5時間</x-button2></td>
                                <td><x-button2 type="button" value="876">要介護4 5~6時間</x-button2></td>
                                <td><x-button2 type="button" value="897">要介護4 6~7時間</x-button2></td>
                                <td><x-button2 type="button" value="1018">要介護4 7~8時間</x-button2></td>
                                <td><x-button2 type="button" value="1036">要介護4 8~9時間</x-button2></td>
                            </tr>
                            <tr>
                                <td class="px-4 text-xs">要介護5</td>
                                <td><x-button2 type="button" value="585">要介護5 3~4時間</x-button2></td>
                                <td><x-button2 type="button" value="614">要介護5 4~5時間</x-button2></td>
                                <td><x-button2 type="button" value="979">要介護5 5~6時間</x-button2></td>
                                <td><x-button2 type="button" value="1003">要介護5 6~7時間</x-button2></td>
                                <td><x-button2 id="button" type="button" value="1142" onclick="number()">要介護5 7~8時間</x-button2></td>
                                <td><x-button2 id="button" type="button" value="1162" onclick="number()">要介護5 8~9時間</x-button2></td>
                            </tr>
                    </table>


                    <div class="mx-auto w-2/3 mt-4">
                        <x-label for="price" value="料金" />
                        <x-input value="{{ $event->price }}" id="price" class="block mt-1 w-full" type="text" name="price" required />
                    </div>
                    
                    <script>
                        // function number(){
                            const nb = document.getElementById("button");
                            var price = document.getElementById("price");
                            
                            // price = nb;
                            console.log(price);

                            price.value = 100;
                        
                        </script>

                <div class="mt-8 mx-auto w-1/6">
                    <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                        <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                            < 変更する >
                        </span>
                    </button>
                </div>
            </form>
            <div>
            </div>
            
            
        </div>
    </div>
</div>
</div>


</x-app-layout>
