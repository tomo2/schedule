<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            イベント詳細
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
        
                <form method="form" action="{{ route('events.edit', ['event' => $event->id ]) }}">
                    {{-- nameでflatpickrを利用 --}}
                    <div>
                        <x-label for="name" value="名前" />
                        {{ $event->name }}
                    </div>
                        <div class="mt-4">
                            <x-label for="care" value="care" />
                            {{ $event->care }}
                        </div>

                        <div class="md:flex justify-between">
                        <div class="mt-4">
                            <x-label for="date" value="利用日" />
                            {{ $event->date }}
                        </div>
                        
                        <div class="mt-4">
                            <x-label for="start_time" value="開始時間" />
                            {{ $event->start_time }}
                        </div>
                        <div class="mt-4">
                            <x-label for="end_time" value="終了時間" />
                            {{ $event->end_time}}
                        </div>

                    </div>

                    <x-button class="ml-4 mt-4">
                        編集する
                    </x-button>
                </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
