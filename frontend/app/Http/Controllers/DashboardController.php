<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function indexCopy()
    {
        return view('dashboard2');
    }

    public function index2()
    {
        return view('sejarah');
    }

    public function index2Copy()
    {
        return view('sejarah2');
    }

    public function index3()
    {
        return view('aksara');
    }

    public function index3Copy()
    {
        return view('aksara2');
    }

    public function index4()
    {
        return view('kamus');
    }

    public function show($id = 1)
    {
        $materiList = [
            1 => [
                'title' => 'Aksara Batak Toba',
                'subtitle' => 'Pengembangan Tulisan Batak',
                'content' => 'Aksara Batak awalnya diciptakan oleh Siraja Batak untuk menulis bahasa Batak, tanpa 
                mempertimbangkan bahasa lain. Seiring waktu, setelah interaksi dengan bangsa asing dan perluasan wilayah, 
                kesadaran akan keberagaman bahasa meningkat. Kemerdekaan dan pendidikan semakin memperluas wawasan masyarakat
                Batak tentang bahasa lain. Aksara Batak hanya dapat menuliskan bahasa Batak dan Indonesia, 
                tetapi tidak bahasa daerah lain atau asing. Untuk menyesuaikan perkembangan zaman, dalam seminar 17 Juli 1988,
                aksara Batak dikembangkan dari 19 menjadi 29 huruf agar dapat menuliskan bahasa Indonesia. 
                Pengembangan ini disepakati oleh berbagai komunitas Batak',
                'image' => 'materi_1.png',
            ],
            2 => [
                'title' => 'Aksara Batak Toba',
                'subtitle' => 'Ina ni Surat',
                'content' => 'Aksara Batak Toba terdiri dari dua bagian utama, yaitu Induk Aksara dan Anak Aksara. Induk Aksara 
                berjumlah 19, di mana setiap aksara mewakili satu suku kata yang merupakan kombinasi antara satu huruf konsonan 
                dengan vokal [a]. Namun, terdapat pengecualian pada aksara [i] dan [u], yang hanya berupa huruf vokal tanpa konsonan. 
                Berikut adalah ke-19 Induk Aksara Batak Toba yang disusun berdasarkan urutan abjad Batak.',
                'image' => 'materi_2.png',
                'content2' => 'Penjelasan :
                Untuk menuliskan semua kata-kata asli bahasa Batak. Sebenarnya hanyalah dipergunakan aksara-aksara yang telah 
                diperkenalkan itu. Tetapi karena pengaruh bahasa asing maka terpaksalah dibuat aksara-aksara yang lain untuk 
                melengkapi aksara yang sudah ada itu, yaitu : wa, ka , ya, nya dan ca.
                Karena menulis garis yang agak melengkung jauh lebih mudah dan merasa senang dari pada membuat garis lurus, 
                maka bentuk aksara-aksara Batak “Surat Barak” itu menjadi melengkung.
                Cara menulis aksara Batak sama saja dengan menulis huruf latin, yaitu dari kiri ke kanan.
                Surat Batak tidak mempunyai tanda baca seperti koma, titik koma dan lain sebagainya. Yang ada hanya tanda untuk
                menyatakan sebuah kalimat berakhir dengan bentuk seperti [ ]
                Pada surat Batak tak ada huruf besar atau kecil, sebab aksara Batak itu bentuknya sama. Anak huruf, 
                Hatadingan (-) “e”; dan hamisaran/paninggil (..-) “ng” berada pada induk huruf dan hamisaran/paninggil “ng” 
                dapat melekat dengan anak huruf seperti haluaan (o), singkora (x)
                Hamisaran; Paninggil “ng” selalu melekat pada anak huruf, seperti haluaan (o), singkora(x).',
            ],
            3 => [
                'title' => 'Aksara Batak Toba',
                'subtitle' => 'Anak ni Surat',
                'content' => 'Anak ni surat dalam aksara Batak adalah komponen fonetis yang disisipkan dalam ina ni surat 
                (tanda diakritik) yang berfungsi untuk mengubah pengucapan/lafal dari ina ni surat. Tanda diakritik tersebut 
                dapat berupa tanda vokalisasi, nasalisasi, atau frikatif. Anak ni surat ini terdiri dari:
                1. Bunyi [e] (hatadingan)
                2. Bunyi [ŋ] (haminsaran)
                3. Bunyi [u] (haborotan)
                4. Bunyi [i] (hauluan)
                5. Bunyi [o] (sihora)
                6. Pangolat (tanda untuk menghilangkan bunyi [a] pada ina ni surat)',
                'image' => 'materi_3.png',
            ],
            4 => [
                'title' => 'Aksara Batak Toba',
                'subtitle' => 'Jenis- Jenis Aksara',
                'content' => '1.Aksara Batak Toba
                2. Aksara Batak Karo
                3. Aksara Batak Mandailing
                4. Aksara Batak Simalungun
                5. Aksara Batak Pakpak',
                'image' => 'materi_4.png',
            ],
            5 => [
                'title' => 'Aksara Batak Toba',
                'subtitle' => 'Angka Aksara Batak Toba',
                'content' => 'Meskipun aksara Batak memiliki keunikan tersendiri, angka dalam bahasa Batak tidak memiliki 
                bentuk khas. Sebagai gantinya, angka-angka ini ditulis menggunakan aksara yang menyerupai aksara Arab, 
                tetapi dengan pelafalan yang berbeda. Dalam bahasa Batak, angka disebut sebagai: sada (1), dua (2), tolu (3), 
                opat (4), lima (5), onom (6), pitu (7), palu (8), sia (9), dan sampulu (10).',
                'image' => 'materi_5.png',
            ],
        ];

        if (!isset($materiList[$id])) {
            return redirect('/materi/1');
        }

        return view('materi', ['materi' => $materiList[$id], 'id' => $id]);
    }

    public function showQuiz()
    {
        return view('kuis');
    }

    public function submitQuiz(Request $request)
    {
        $correctAnswers = [0, 1, 0, 2, 1, 0, 1, 1, 2, 0];
        $userAnswers = $request->input('answer', []);
        $score = 0;

        foreach ($correctAnswers as $index => $correct) {
            if (isset($userAnswers[$index]) && $userAnswers[$index] == $correct) {
                $score++;
            }
        }

        return redirect()->route('kuis.review')->with('score', $score);
    }

    public function reviewQuiz()
    {
        return view('review');
    }
}
