@extends('layouts.apps')

@section('title', 'Kuis')

@section('body-class', 'bg-kuis')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">
        <img src="{{ asset('images/header-image.png') }}" alt="Rumah Adat Batak Toba">
    </div>
</div>

<div class="container mt-4">
    <h2 class="text-center">Kuis Aksara Batak Toba</h2>

    <!-- Timer -->
    <div id="timer" class="text-center mt-2 font-weight-bold text-danger">15:00</div>

    <form id="quizForm" action="{{ url('/kuis/selesai') }}" method="POST">
        @csrf
        @php
            $questions = [
                ["Berapa jumlah huruf aksara batak setelah dikembangkan pada tahun 1988?", ["19 huruf", "25 huruf", "29 huruf", "20 huruf"], 0],
                ["Siapa yang menyepakati pengembangan aksara batak?", ["Pemerintah pusat", "Komunitas batak", "Lembaga pendidikan", "Bahasa asing"], 1],
                ["Kombinasi seperti apa yang membentuk setiap induk aksara batak?", ["Huruf konsonan dengan vokal [a]", "Huruf vokal dengan [e]", "Konsonan ganda", "Vokal tunggal"], 0],
                ["Apa yang dimaksud dengan hamisaran dalam aksara batak?", ["Induk aksara", "Tanda baca", "Paninggil 'ng' yg melekat pada anak huruf", "Huruf kapital"], 2],
                ["Apa pengecualian pada induk aksara batak toba?", ["Aksara [a] dan [e]", "Aksara [i] dan [u]", "Aksara [o] dan [ng]", "Aksara [e] dan [ng]"], 1],
                ["Apa fungsi Pangolat dalam Aksara Batak?", ["Menghilangkan bunyi [a] pada induk aksara.", "Menambah bunyi [u]", "Menyisipkan [o]", "Menandai suku kata terakhir."], 0],
                ["Berikut ini yang termasuk jenis-jenis aksara Batak adalah...", ["Aksara Jawa, Aksara Sunda, Aksara Bali", "Aksara Batak Toba, Aksara Batak Karo, Aksara Batak Mandailing", "Aksara Latin, Aksara Jepang, Aksara Arab", "Aksara Bugis, Aksara Rejang, Aksara Lontara"], 1],
                ["Urutan angka dalam bahasa Batak yang benar adalah...", ["Sada, opat, lima, dua, sia", "Sada, dua, tolu, opat, lima", "Dua, opat, pitu, palu, onom", "Sada, pitu, onom, palu, dua"], 1],
                ["Angka dalam bahasa Batak ditulis menggunakan...", ["Huruf Latin", "Angka Romawi", "Aksara yang menyerupai aksara Arab", "Simbol khas aksara Batak"], 2],
                ["Manakah angka yang termasuk dalam angka Batak?", ["Lima, sia, dua", "Tiga, empat, lima", "Satu, dua, tiga", "Sebelas, dua belas, tiga belas"], 0],
            ];
        @endphp

        @foreach ($questions as $index => $question)
            <div class="mb-4">
                <p><strong>{{ $index + 1 }}. {{ $question[0] }}</strong></p>
                @foreach ($question[1] as $optionIndex => $option)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="answer[{{ $index }}]" value="{{ $optionIndex }}" id="q{{ $index }}o{{ $optionIndex }}">
                        <label class="form-check-label" for="q{{ $index }}o{{ $optionIndex }}">{{ $option }}</label>
                    </div>
                @endforeach
            </div>
        @endforeach

        <div class="text-center">
            <button type="submit" class="btn btn-primary" id="submitBtn">Selesai</button>
        </div>
    </form>
</div>

<script>
    let timer = 15 * 60;
    let timerDisplay = document.getElementById('timer');
    let quizForm = document.getElementById('quizForm');
    let isQuizCompleted = false;

    function updateTimer() {
        let minutes = Math.floor(timer / 60);
        let seconds = timer % 60;
        timerDisplay.textContent = `${minutes}:${seconds < 10 ? '0' : ''}${seconds}`;
        if (timer === 0) {
            isQuizCompleted = true;
            quizForm.submit();
        }
        timer--;
    }
    setInterval(updateTimer, 1000);

    document.getElementById('submitBtn').addEventListener('click', function (e) {
        let inputs = document.querySelectorAll('input[type="radio"]:checked');
        if (inputs.length < 10) {
            e.preventDefault();
            if (!confirm("Jawaban kamu belum selesai, apakah kamu yakin?")) {
                return;
            }
        }
        isQuizCompleted = true;
        quizForm.submit();
    });

    window.addEventListener("beforeunload", function (event) {
        if (!isQuizCompleted) {
            event.preventDefault();
            event.returnValue = "Kamu belum menyelesaikan kuis. Jika keluar, jawabanmu tidak akan tersimpan!";
        }
    });

    history.pushState(null, null, location.href);
    window.addEventListener('popstate', function (event) {
        history.pushState(null, null, location.href);
        alert("Kamu belum menyelesaikan kuis! Selesaikan terlebih dahulu sebelum meninggalkan halaman.");
    });
</script>

@endsection
