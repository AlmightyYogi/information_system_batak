@extends('layouts.apps2')

@section('title', 'Sejarah Batak Toba Untuk Tamu')

@section('body-class', 'bg-sejarah2')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">
        <img src="{{ asset('images/header-image.png') }}" alt="Rumah Adat Batak Toba">
    </div>

    <h1 class="sejarah-title">Sejarah Batak Toba</h1>

    <div class="container sejarah-content">
        <p>
            Sejarah Batak Toba mencerminkan kekuatan dan kebijaksanaan nenek moyang kami. 
            Dari masa lalu yang kaya hingga perkembangan modern, Batak Toba telah memainkan 
            peran penting dalam membentuk identitas budaya Indonesia.
        </p>

        <h2>Asal Usul</h2>
        <p>
            Suku Batak Toba berasal dari daerah sekitar Danau Toba di Sumatra Utara, Indonesia. 
            Legenda dan cerita rakyat menyebutkan bahwa asal usul Batak Toba berasal dari 
            marga Siallagan yang pertama kali menetap di wilayah sekitar Danau Toba.
        </p>

        <h2>Struktur Sosial</h2>
        <p>
            Masyarakat Batak Toba memiliki struktur sosial yang unik dengan sistem marga (klan). 
            Setiap individu Batak Toba memiliki marga yang menjadi identitas keluarga besar mereka. 
            Sistem marga ini sangat kuat dan berperan penting dalam kehidupan sosial, adat, dan agama. 
            Beberapa marga terkenal antara lain, Samosir, Nainggolan, dan Lumbantobing.
        </p>

        <h2>Adat Istiadat</h2>
        <p>
            Budaya dan adat istiadat Batak Toba sangat kaya. Mereka memiliki berbagai upacara adat 
            seperti upacara kematian (Mangokal Holi), upacara pernikahan (Ulaon Unjuk), dan upacara 
            syukuran (Marsombuh Sihol). Adat istiadat ini melibatkan seluruh anggota marga dan masyarakat, 
            menunjukkan solidaritas dan kebersamaan.
        </p>

        <!-- Bagian yang diburamkan -->
        <div class="blurred-content">
            <h2>Bahasa & Aksara</h2>
            <p>
                Bahasa Batak Toba merupakan salah satu bahasa daerah di Indonesia yang memiliki keunikan tersendiri. 
                Aksara Batak atau dikenal sebagai "Surat Batak" digunakan dalam berbagai naskah kuno dan 
                masih diajarkan sebagai bagian dari upaya pelestarian budaya. Aksara ini tidak hanya digunakan 
                sebagai alat komunikasi, tetapi juga sebagai simbol identitas dan kebanggaan.
            </p>

            <h2>Kepercayaan & Agama</h2>
            <p>
                Masyarakat Batak Toba pada awalnya memeluk kepercayaan tradisional Parmalim, yang berfokus pada 
                pemujaan roh-roh leluhur dan dewa-dewi alam. Namun, pada abad ke-19, agama Kristen masuk ke wilayah 
                Batak Toba melalui misionaris seperti Ludwig Ingwer Nommensen. Kini, mayoritas masyarakat Batak Toba 
                beragama Kristen, tetapi beberapa upacara adat masih dipengaruhi oleh kepercayaan tradisional.
                Sejarah Modern Pada masa kolonial, wilayah Batak Toba menjadi bagian dari perjuangan kemerdekaan 
                Indonesia. Tokoh-tokoh Batak Toba seperti Sisingamangaraja XII berperan penting dalam perlawanan 
                terhadap penjajah Belanda. Hingga saat ini, masyarakat Batak Toba tetap mempertahankan warisan budaya 
                mereka sambil beradaptasi dengan perkembangan zaman.
            </p>

            <h2>Kesenian & Kebudayaan</h2>
            <p>
                Seni ukir, tenun, dan musik tradisional adalah bagian integral dari kebudayaan Batak Toba. 
                Gondang Sabangunan, misalnya, adalah musik tradisional yang dimainkan dengan alat musik seperti 
                taganing, gordang, dan serunai. Kain ulos adalah kain tenun khas Batak Toba yang sering digunakan 
                dalam upacara adat.
            </p>

            <h2>Pendidikan & Modernisasi</h2>
            <p>
                Masyarakat Batak Toba sangat menghargai pendidikan. Banyak tokoh Batak Toba yang berperan penting dalam 
                berbagai bidang seperti hukum, politik, dan pendidikan di Indonesia. Contohnya adalah TB Simatupang dan 
                Luhut Binsar Pandjaitan yang berkontribusi besar dalam pemerintahan Indonesia.
            </p>
        </div>

        <!-- Notifikasi harus login -->
        <div class="login-notice">
            <p>🔥 Harus Login Untuk Melihat Selengkapnya 🔥</p>
            <a href="/login" class="btn btn-primary">Login Sekarang</a>
        </div>
    </div>
</div>

@endsection
