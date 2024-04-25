<x-app-layout>
    <x-slot name="header">
        @if ($date)
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $date->date }}の予定
            </h2>
        @else
            予定なし
        @endif
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

                            <section class="text-gray-600 body-font">
                                <div class="container px-5 py-8 mx-auto">
            
                                    <button onclick="location.href='{{ route('events.create') }}'" class="flex mb-4 ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">新規登録</button>
                                    <div class="w-3/4 mx-auto overflow-auto">
                                    <table class="table-auto w-full text-left whitespace-no-wrap">
                                        <thead>
                                        <tr>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">名前</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">数字</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">利用日</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">開始時間</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">終了時間</th>
                                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">料金</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($events as $event)
                                            <tr>
                                                <td class="text-blue-400 px-4 py-3"><a href="{{ route('events.show', [ 'event' => $event->id ])}}">{{ $event->name }}</td></a>
                                                <td class="px-4 py-3">{{ $event->care }}</td>
                                                <td class="px-4 py-3">{{ $event->date }}</td>
                                                <td class="px-4 py-3">{{ $event->start_time }}</td>
                                                <td class="px-4 py-3">{{ $event->end_time }}</td>
                                                <td class="px-4 py-3">{{ $event->price }}</td>
                                            </tr>                                    
                                            @endforeach
            
                                        </tbody>
                                    </table>

            </div>
            </div>
        </div>
    </div>
</x-app-layout>

