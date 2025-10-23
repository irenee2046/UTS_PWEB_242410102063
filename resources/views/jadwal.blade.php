@extends('layout.app')

@section('content')
<div class="bg-white/80 backdrop-blur-md p-8 rounded-3xl shadow-lg text-center border border-yellow-300">
    <h1 class="text-3xl font-semibold text-yellow-900 mb-4 flex items-center justify-center gap-2">
        📅 Jadwal Piket Bulanan
    </h1>
    <p class="text-gray-700 mb-6">Selamat datang, <span class="font-semibold text-orange-600">{{ $username }}</span>!</p>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-yellow-400 rounded-xl overflow-hidden">
            <thead class="bg-yellow-400 text-yellow-900 font-semibold">
                <tr>
                    <th class="px-6 py-3 border border-yellow-300">Tanggal</th>
                    <th class="px-6 py-3 border border-yellow-300">Hari</th>
                    <th class="px-6 py-3 border border-yellow-300">Divisi</th>
                </tr>
            </thead>
            <tbody class="bg-white/70">
                @foreach ($jadwal as $j)
                    <tr class="hover:bg-yellow-100 transition">
                        <td class="border border-yellow-300 px-6 py-2">{{ $j['tanggal'] }}</td>
                        <td class="border border-yellow-300 px-6 py-2">{{ $j['hari'] }}</td>
                        <td class="border border-yellow-300 px-6 py-2 text-orange-600 font-semibold">{{ $j['divisi'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
