@extends('layouts.apps')

@section('title', 'Materi')

@section('body-class', 'bg-materi')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">
        <img src="{{ asset('images/header-image.png') }}" alt="Rumah Adat Batak Toba">
    </div>

    <h1 class="materi-title text-center">{{ $materi['title'] }}</h1>

    <div class="container materi-content text-center">
        <h4>{{ $materi['subtitle'] }}</h4>
        <p>
            {{ $materi['content'] }}
        </p>

        <div class="aksara-images">
            <img src="{{ asset('images/' . $materi['image']) }}" alt="Materi Gambar" class="img-fluid mb-4">
        </div>

        @isset($materi['content2'])
            <p>{{ $materi['content2'] }}</p>
        @endisset
    </div>
</div>

<div class="container text-center mt-4">
    <div class="btn-group materi-navigation">
        @if($id > 1)
            <a href="{{ url('/materi/' . ($id - 1)) }}" class="btn btn-primary materi-btn prev-btn">
                &larr; Materi Sebelumnya
            </a>
        @endif

        @if($id < 5)
            <a href="{{ url('/materi/' . ($id + 1)) }}" class="btn btn-primary materi-btn next-btn">
                Materi Selanjutnya &rarr;
            </a>
        @endif
    </div>

    @if($id == 5)
        <div class="mt-4">
            <a href="{{ url('/kuis') }}" class="btn btn-success materi-btn quiz-btn">
                Mulai Kuis
            </a>
        </div>
    @endif
</div>

@endsection
