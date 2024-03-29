<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            イベント管理
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-8 mx-auto">
                        {{-- sessionメッセージ --}}
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                                </div>
                            @endif
                        <button onclick="location.href='{{ route('events.create') }}'" class="flex mb-4 ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">新規登録</button>
                        <div class="w-full mx-auto overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                            <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">名前</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">数字</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">利用日</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">開始時間</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">終了時間</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">料金(後ほど)</th>
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
                                    <td class="px-4 py-3">0</td>
                                </tr>                                    
                                @endforeach

                            </tbody>
                        </table>
                        {{ $events->links() }}
                        </div>
                        <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                        </div>
                    </div>
                    </section>
            </div>
        </div>
    </div>
</x-app-layout>
