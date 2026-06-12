<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col gap-6">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class=" bg-yellow-400 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="game/games">
                    <button class="p-6 text-gray-900 font-bold">
                        Games inzien
                    </button>
                </a>
            </div>
        </div>
        <div class=" w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-yellow-400 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="game/maken">
                    <button class="p-6 text-gray-900 font-bold">
                        Game maken
                    </button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
