<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <span class="text-2xl">
                {{ $event->name }}
            </span>の登録情報
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-2x1 mx-auto my-12">
                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
        
                    {{-- ユーザーの登録情報を表示 --}}
                    <table class="table-auto w-4/5 mx-auto whitespace-no-wrap">
                        <thead>
                            <tr>
                                {{-- <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">名前</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-300">介護度</th> --}}
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">利用日</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">開始時間</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">終了時間</th>
                                <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">一回当たりの料金</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $users)
                                <form method="form" action="{{ route('events.edit', ['event' => $users->id ]) }}">
                                    <tr>
                                        {{-- <td class="text-center text-blue-400 px-4 py-3">{{ $event->name }}</td>
                                        <td class="text-center px-4 py-3">{{$users->care }}</td> --}}
                                        <td class="text-center px-4 py-3">{{ $users->date }}</td>
                                        <td class="text-center px-4 py-3">{{ $users->start_time }}</td>
                                        <td class="text-center px-4 py-3">{{ $users->end_time }}</td>
                                        <td class="text-center px-4 py-3">{{ $users->price }}円</td>
                                        <td class="text-center px-4 py-3"><x-button class="">編集する</x-button></td>
                                    </tr>                                                                
                                </form>
                                
                                <form method="post" action="{{ route('events.destroy', ['event' => $users->id ]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <tr>
                                        <td class="text-center px-4 py-3"><x-button class="">削除する</x-button></td>
                                    </tr>                                                                
                                </form>
                                @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
