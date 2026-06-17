<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nieuwe game') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-100 flex justify-center text-center">
        <div class="rounded-2xl p-5 border-2 border-yellow-400 gap-5 items-center flex flex-col bg-gray-400">
            <h2 class="text-2xl">Nieuwe game maken</h2>
            <form action="{{ url('game') }}" method="POST">
                @csrf
                <div class="bg-yellow-400 rounded-lg">
                    <button type="submit" class="p-3 text-gray-900 font-bold">
                        Game starten
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
