<x-app-layout>
    @include('layouts.navigation')
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Anda masuk!") }} sebagai {{ $user->name }} dengan role {{ $user->role_id }} keterangan role {{ $jenis_id }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
