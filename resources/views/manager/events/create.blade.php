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
        
                <form method="POST" action="{{ route('events.store') }}">
                    @csrf
                    {{-- nameでflatpickrを利用 --}}
                    <div>
                        <x-label for="name" value="名前" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />

                    </div>

                        <div class="mt-4">
                            <x-label for="care" value="care" />
                            <select name="care" class="block mt-1 w-full" type="text" name="start_time" required >
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>

                        {{-- <div class="md:flex justify-between"> --}}
                        <div class="mt-4">
                            <x-label for="date" value="利用日" />
                            <x-input id="date" class="block mt-1 w-full" type="text" name="date" required />
                        </div>
                        
                        <div class="mt-4">
                            <x-label for="start_time" value="開始時間" />
                            <x-input id="start_time" class="block mt-1 w-full" type="text" name="start_time" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="end_time" value="終了時間" />
                            <x-input id="end_time" class="block mt-1 w-full" type="text" name="end_time" required />
                        </div>

                        

                        <div class="mt-4">
                            <x-label for="price" value="料金" />
                            <x-input" id="price" class="block mt-1 w-full" type="text" name="price" required />
                        </div>

                        {{-- </div> --}}

                    <x-button class="ml-4 mt-4">
                        新規登録
                    </x-button>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
