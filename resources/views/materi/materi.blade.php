<x-app-layout>
    @include('layouts.navigation')
    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    @if(Auth::check())
                        @php
                            $user = Auth::user();
                        @endphp

                        @if($user->role_id == 1)
                            Info Login : {{ __("Anda masuk") }} sebagai {{ $user->name }} dengan role {{ $user->role_id }} keterangan role {{ $jenis_id }} <br>
                            Nama Halaman : {{ request()->route()->getName() }} <br>
                        @elseif($user->role_id == 2)
                            Info Login : {{ __("Anda masuk") }} sebagai {{ $user->name }} dengan role {{ $user->role_id }} keterangan role {{ $jenis_id }} <br>
                            Nama Halaman : {{ request()->route()->getName() }} <br>
                        @elseif($user->role_id == 3)
                            Info Login : {{ __("Anda masuk") }} sebagai {{ $user->name }} dengan role {{ $user->role_id }} keterangan role {{ $jenis_id }} <br>
                            Nama Halaman : {{ request()->route()->getName() }} <br>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
