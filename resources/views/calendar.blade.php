<x-calendar-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            売り上げ管理アプリ
        </h2> --}}
        <!-- Logo -->
        <div class="w-40 shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-application-mark class="block h-9 w-auto" />
            </a>
        </div>
        <div class="p-4 text-xl">ログインしてカレンダーで利用者管理してみよう</div>
    </x-slot>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('main-calendar')
            </div>
        </div>
    </div>
    


</x-calendar-layout>