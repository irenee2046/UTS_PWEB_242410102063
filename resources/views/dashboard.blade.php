@extends('layout.app')

@section('content')
@php
    $username = session('username') ?? 'Pengguna';
@endphp

<div class="relative overflow-hidden rounded-3xl shadow-lg">
    <div
        class="absolute inset-0 bg-cover bg-center blur-md brightness-90 opacity-80"
        style="background-image: url('{{ asset('images/ukmkk-bg.jpg') }}');">
    </div>
    <div class="absolute inset-0 bg-linear-to-br from-yellow-200/70 via-yellow-300/60 to-orange-200/70"></div>
    <div class="relative z-10 text-center py-20 px-6">
        <h1 class="text-4xl font-semibold text-yellow-900 mb-4">
            Selamat Datang, {{ $username }}!
        </h1>

        <p class="text-lg text-gray-800 max-w-2xl mx-auto">
            Semoga harimu penuh semangat dan berkat di pelayanan UKM Kerohanian Kristen Universitas Jember
            Teruslah menjadi terang dan garam di setiap kegiatan hari ini 💛
        </p>
    </div>
</div>
@endsection
