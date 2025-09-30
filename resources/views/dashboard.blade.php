<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dashboard</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">Dashboard</h5>
                <p class="card-text">Selamat Datang di Halaman Dashboard</p>
                <a href="/mahasiswa" class="btn btn-primary">Data Mahasiswa</a>
            </div>
        </div>
    </div>

</x-app-layout>
