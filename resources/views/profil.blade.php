@extends('layout.app')

@section('content')
<div class="text-center space-y-10">
    <h1 class="text-4xl font-bold text-yellow-900 mb-6">Profil UKM Kerohanian Kristen</h1>


    <div class="flex flex-wrap justify-center gap-8 mt-6">
        @foreach (['ukmkk1.jpg', 'ukmkk2.jpg', 'ukmkk3.jpg'] as $img)
            <div class="relative group">

                <div class="absolute inset-0 bg-white/40 rounded-3xl blur-md group-hover:blur-lg transition"></div>


                <img src="{{ asset('images/'.$img) }}"
                     alt="Foto UKMKK"
                     class="relative w-[420px] h-[250px] object-cover rounded-3xl shadow-2xl border-4 border-yellow-300 transition-transform duration-300 group-hover:scale-105">
            </div>
        @endforeach
    </div>


    <div class="max-w-4xl mx-auto bg-yellow-100/70 backdrop-blur-md rounded-3xl p-10 shadow-lg mt-12">
        <h2 class="text-2xl font-semibold text-orange-700 mb-4">“Sehati, Sepikir, Seiman”</h2>



        <h2 class="text-2xl font-semibold text-orange-700 mt-8 mb-4">Visi</h2>
        <p class="text-lg text-gray-800">
            Menjadi komunitas mahasiswa Kristen yang bertumbuh dalam iman, pelayanan, dan kasih di lingkungan Universitas Jember.
        </p>


        <h2 class="text-2xl font-semibold text-orange-700 mt-8 mb-4"> Misi</h2>
        <ul class="list-disc list-inside text-left text-gray-800 leading-relaxed">
            <li>Memperkuat kehidupan rohani mahasiswa Kristen melalui ibadah dan persekutuan rutin.</li>
            <li>Mengembangkan potensi dan kepemimpinan mahasiswa dalam pelayanan kampus.</li>
            <li>Menjadi teladan kasih Kristus dalam kehidupan kampus dan masyarakat.</li>
        </ul>
    </div>
</div>
@endsection
