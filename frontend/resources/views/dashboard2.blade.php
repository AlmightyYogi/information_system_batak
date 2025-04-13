@extends('layouts.apps2')

@section('title', 'Beranda Untuk Tamu')

@section('body-class', 'bg-dashboard2')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">
        <img src="{{ asset('images/header-image.png') }}" alt="Rumah Adat Batak Toba">
    </div>

    <div class="dashboard-content">
        <div class="text-content">
            <h2>Horas!</h2>
            <p>
                Selamat datang di Sistem 
                Informasi Aksara Batak Toba. 
                Jelajahi dan lestarikan kekayaan 
                budaya Batak Toba melalui 
                sejarah, bahasa, dan seni. Mari 
                kita bersama-sama menjaga 
                warisan yang berharga ini 
                dan belajar lebih dalam tentang 
                Batak Toba.
            </p>
        </div>
        <div class="image-content">
            <img src="{{ asset('images/lake-toba.png') }}" alt="Danau Toba">
        </div>
    </div>

    <div class="dashboard-banner">
        <div class="banner-overlay">
            <p>
                <strong>Sejarah Batak Toba</strong> mencerminkan kekuatan dan kebijaksanaan nenek moyang kami. 
                Dari masa lalu yang kaya hingga perkembangan modern, Batak Toba telah memainkan peran penting dalam membentuk identitas budaya Indonesia.
            </p>
            <a href="#">Selengkapnya</a>
        </div>
    </div>

    <div class="separator">
        <div class="line"></div>
        <div class="circle"></div>
    </div>

    <div class="aksara-section">
        <div class="aksara-image">
            <img src="{{ asset('images/aksara-batak.png') }}" alt="Aksara Batak">
        </div>
        <div class="aksara-text">
            <h2>Aksara Batak Toba</h2>
            <p>
                Aksara Batak Toba adalah simbol identitas dan kebanggaan budaya.
                Yuk, pelajari, pahami, dan gunakan aksara ini untuk bersama-sama melestarikannya!
            </p>
        </div>
    </div>

</div>

@endsection

