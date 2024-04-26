<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            利用者情報
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-8 mx-auto">
                        {{-- sessionメッセージ --}}
                        @if (session('status'))
                            <div class="mb-4 font-medium text-xl text-red-600">
                                {{ session('status') }}
                                </div>
                            @endif
                        <button onclick="location.href='{{ route('events.create') }}'" class="flex mb-4 ml-auto text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">新規登録</button>
                        <div class="w-full mx-auto overflow-auto">
                        <table class="table-auto w-4/5 mx-auto my-4 whitespace-no-wrap">
                            <tr>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">名前</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300">介護度</th>
                                {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">名前</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300">介護度</th> --}}
                            </tr>
                                
                                {{-- 同じ名前のデータは一つだけ表示する --}}

                                @foreach ($eventsName->unique('name') as $key => $event)
                                
                                {{-- @if ($key % 2 === 0)
                                </tr><>
                                    @endif --}}
                                    
                                    <tr>
                                        <td class="border-2 border-gray-200 text-center text-blue-400 px-4 py-3">
                                            <a href="{{ route('events.show', [ 'event' => $event->id ])}}">
                                                {{ $event->id }}
                                                {{ $event->name }}
                                            </a>
                                        </td>
                                        
                                        <td class="border-2 border-gray-200 text-center px-4 py-3">
                                            {{ $event->care }}
                                        </td>
                                    </tr>
                                                                            
                                    @endforeach
                        </table>

                        
                        <div class="mt-7">
                            {{ $events->links() }}
                        </div>
                        </div>
                    </div>
                    </section>
            </div>
        </div>
    </div>
</x-app-layout>
