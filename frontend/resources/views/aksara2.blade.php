@extends('layouts.apps2')

@section('title', 'Aksara Batak Toba Untuk Tamu')

@section('body-class', 'bg-aksara2')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">
        <img src="{{ asset('images/header-image.png') }}" alt="Rumah Adat Batak Toba">
    </div>

    <h1 class="aksara-title text-center">Aksara Batak Toba</h1>

    <div class="container aksara-content text-center">
        <p>
            Aksara Batak Toba merupakan salah satu bentuk aksara Batak yang mencerminkan keragaman seni 
            dan budaya Indonesia. Dari segi asal-usulnya, aksara Batak berasal dari rumpun tulisan Brahmi 
            (India), yang termasuk dalam kelompok tulisan India Selatan. Aksara Batak tergolong dalam jenis 
            abugida, yaitu sistem tulisan fonetis di mana setiap bunyi dalam bahasa dapat diwakili dengan tepat. 
            Terdapat dua kategori huruf dalam aksara Batak, yaitu Ina Ni Surat (huruf utama) dan Anak Ni Surat 
            (huruf turunan).
        </p>

        <!-- Bagian yang diburamkan -->
        <div class="blurred-content">
            <div class="aksara-images">
                <img src="{{ asset('images/foto-aksara.png') }}" alt="Ina Ni Surat" class="img-fluid mb-4">
                <img src="{{ asset('images/foto-aksara2.png') }}" alt="Abjad Aksara Batak" class="img-fluid mb-4">
            </div>

            <p class="mt-3" style="text-align: center">
                <strong>Selain mengetahui sejarah Aksara Batak, kamu juga bisa belajar lebih dalam melalui dua pilihan berikut:</strong>
            </p>

            <a href="/materi" class="btn btn-success btn-lg mt-3">
                <i class="bi bi-book"></i> Mulai Belajar
            </a>
        </div>

        <!-- Notifikasi harus login -->
        <div class="login-notice">
            <p>🔥 Harus Login Untuk Melihat Selengkapnya 🔥</p>
            <a href="/login" class="btn btn-primary">Login Sekarang</a>
        </div>
    </div>
</div>

@endsection
