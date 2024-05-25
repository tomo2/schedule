
                
                <div class="p-12 text-3xl">ユーザー登録画面で利用者登録しよう</div>

                    {{-- nameでflatpickrを利用 --}}
                    <div class="mx-auto w-2/3">
                <div class="mt-12">
                    <x-label for="name" value="名前" />
                    <x-input value="山田 太郎" id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
                </div>

                    <div class="mt-4">
                        <x-label for="care" value="介護度" />
                        <select name="care" class="block mt-1 w-1/3" type="text" name="start_time" required >
                            <option value="3">3</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <x-label for="date" value="利用日" />
                        <x-input value="2024-03-12" id="date" class="block mt-1 w-1/3" type="text" name="date" required />
                    </div>
                    
                    <div class="flex justify-around">
                        <div class="mt-4">
                            <x-label for="start_time" value="開始時間" />
                            <x-input value="10:00" id="start_time" class="block mt-1 w-full" type="text" name="start_time" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="end_time" value="終了時間" />
                            <x-input value="13:00" id="end_time" class="block mt-1 w-full" type="text" name="end_time" required />
                        </div>
                    </div>
                    
                    {{-- 料金の計算を行い表示する --}}
                    
                </div>
                

                
                {{-- buttonを指定することでformに影響を与えない --}}
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
                        <td><x-button2 type="button">要介護1 3~4時間</x-button2></td>
                        <td><x-button2 type="button">要介護1 4~5時間</x-button2></td>
                        <td><x-button2 type="button">要介護1 5~6時間</x-button2></td>
                        <td><x-button2 type="button">要介護1 6~7時間</x-button2></td>
                        <td><x-button2 type="button">要介護1 7~8時間</x-button2></td>
                        <td><x-button2 type="button">要介護1 8~9時間</x-button2></td>
                    </tr>
                    <tr>
                        <td class="px-4 text-xs">要介護2</td>
                        <td><x-button2 type="button">要介護2 3~4時間</x-button2></td>
                        <td><x-button2 type="button">要介護2 4~5時間</x-button2></td>
                        <td><x-button2 type="button">要介護2 5~6時間</x-button2></td>
                        <td><x-button2 type="button">要介護2 6~7時間</x-button2></td>
                        <td><x-button2 type="button">要介護2 7~8時間</x-button2></td>
                        <td><x-button2 type="button">要介護2 8~9時間</x-button2></td>
                    </tr>
                    <tr>
                        <td class="px-4 text-xs">要介護3</td>
                        <td><button type="button" class="text-white border border-gray-800 bg-gray-900 ring-4 outline-none ring-gray-300 text-xs rounded-lg px-3 py-2 text-center me-1 mb-2">要介護3 3~4時間</button></td>
                        <td><x-button2 type="button">要介護3 4~5時間</x-button2></td>
                        <td><x-button2 type="button">要介護3 5~6時間</x-button2></td>
                        <td><x-button2 type="button">要介護3 6~7時間</x-button2></td>
                        <td><x-button2 type="button">要介護3 7~8時間</x-button2></td>
                        <td><x-button2 type="button">要介護3 8~9時間</x-button2></td>
                    </tr>
                    <tr>
                        <td class="px-4 text-xs">要介護4</td>
                        <td><x-button2 type="button">要介護4 3~4時間</x-button2></td>
                        <td><x-button2 type="button">要介護4 4~5時間</x-button2></td>
                        <td><x-button2 type="button">要介護4 5~6時間</x-button2></td>
                        <td><x-button2 type="button">要介護4 6~7時間</x-button2></td>
                        <td><x-button2 type="button">要介護4 7~8時間</x-button2></td>
                        <td><x-button2 type="button">要介護4 8~9時間</x-button2></td>
                    </tr>
                    <tr>
                        <td class="px-4 text-xs">要介護5</td>
                        <td><x-button2 type="button">要介護5 3~4時間</x-button2></td>
                        <td><x-button2 type="button">要介護5 4~5時間</x-button2></td>
                        <td><x-button2 type="button">要介護5 5~6時間</x-button2></td>
                        <td><x-button2 type="button">要介護5 6~7時間</x-button2></td>
                        <td><x-button2 type="button">要介護5 7~8時間</x-button2></td>
                        <td><x-button2 type="button">要介護5 8~9時間</x-button2></td>
                    </tr>
            </table>

            <div class="mx-auto w-1/3 mt-4">
                <x-label for="price" value="料金" />
                <x-input value="5113" id="price" class="mt-1 w-4/5" type="text" name="price" required />円
            </div>

            <div class="mt-8 mx-auto w-1/6">
                <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        < 新規登録 >
                    </span>
                </button>