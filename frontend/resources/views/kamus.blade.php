@extends('layouts.apps')

@section('title', 'Kamus')

@section('body-class', 'bg-kamus')

@section('content')

<div class="dashboard">
    <div class="dashboard-header">
        <img src="{{ asset('images/header-image.png') }}" alt="Rumah Adat Batak Toba">
    </div>

    <h1 class="sejarah-title">Kamus Aksara Batak</h1>

    <p class="kamus-description">
        Aksara Batak adalah sistem tulisan tradisional yang digunakan oleh masyarakat Batak di Sumatera Utara. 
        Meskipun kini lebih jarang digunakan dalam kehidupan sehari-hari, aksara ini tetap menjadi bagian penting dari 
        budaya dan sejarah Batak. Kamus ini memungkinkan Anda untuk mengonversi teks Latin menjadi aksara Batak secara otomatis.
    </p>

    <p class="kamus-example">
        Contoh: <strong>"ha na ba ta"</strong> akan dikonversi menjadi aksara Batak yang sesuai.
    </p>

    <div class="kamus-container">
        <input type="text" id="searchInput" placeholder="Ketik kata..." autocomplete="off">
        
        <div id="resultContainer"></div>
    </div>
</div>

<script>
    const aksaraMapping = {
        'a': 'a.png',
        'ha': 'ha.png',
        'na': 'na.png',
        'ra': 'ra.png',
        'ta': 'ta.png',
        'ba': 'ba.png',
        'wa': 'wa.png',
        'i': 'i.png',
        'ma': 'ma.png',
        'nga': 'nga.png',
        'la': 'la.png',
        'pa': 'pa.png',
        'sa': 'sa.png',
        'da': 'da.png',
        'ga': 'ga.png',
        'ja': 'ja.png',
        'u': 'u.png',
        'ya': 'ya.png',
        'nya': 'nya.png'
    };

    const translationMapping = {
        'aha': 'apa'
    };

    document.getElementById('searchInput').addEventListener('input', function() {
        const input = this.value.trim().toLowerCase();
        const resultContainer = document.getElementById('resultContainer');
        resultContainer.innerHTML = '';

        if (input.length > 0) {
            const words = input.split(' ');
            words.forEach(word => {
                let wordDiv = document.createElement('div');
                wordDiv.classList.add('word-result');

                let wordText = document.createElement('p');
                wordText.textContent = word;
                wordDiv.appendChild(wordText);

                let aksaraDiv = document.createElement('div');
                aksaraDiv.classList.add('aksara-result');

                let matchedAksara = '';
                let index = 0;

                while (index < word.length) {
                    let matched = false;
                    for (let key in aksaraMapping) {
                        if (word.startsWith(key, index)) {
                            let img = document.createElement('img');
                            img.src = `{{ asset('images/aksara') }}/${aksaraMapping[key]}`;
                            img.alt = key;
                            aksaraDiv.appendChild(img);
                            matchedAksara += key + ' ';
                            index += key.length;
                            matched = true;
                            break;
                        }
                    }
                    if (!matched) {
                        index++;
                    }
                }

                wordDiv.appendChild(aksaraDiv);

                if (translationMapping[word]) {
                    let translationText = document.createElement('p');
                    translationText.classList.add('translation-text');
                    translationText.textContent = translationMapping[word];
                    wordDiv.appendChild(translationText);
                }

                resultContainer.appendChild(wordDiv);
            });
        }
    });
</script>

<style>
    .kamus-container {
        text-align: center;
        margin: 20px auto;
        max-width: 500px;
    }

    #searchInput {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
        text-align: center;
    }

    #resultContainer {
        margin-top: 20px;
        text-align: left;
    }

    .word-result {
        margin-bottom: 15px;
    }

    .aksara-result img {
        width: 40px;
        height: 40px;
        margin-right: 5px;
    }

    .kamus-description {
        text-align: center;
        font-size: 16px;
        color: #555;
        margin: 10px auto;
        max-width: 600px;
        line-height: 1.5;
    }

    .kamus-example {
        text-align: center;
        font-size: 14px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .translation-text {
        font-size: 14px;
        color: #666;
        margin-top: 5px;
    }
</style>

@endsection