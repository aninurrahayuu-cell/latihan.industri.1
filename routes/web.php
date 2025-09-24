<?php

use App\Http\Controllers\PostsController;
use App\Models\Siswa;
use App\Http\Controllers\BiodatasController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Logging\JUnit\TestPrintedUnexpectedOutputSubscriber;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Selamat datang di halaman about';
});

Route::get('/profile', function () {
    return 'Selamat datang di halaman profile';
});

Route::get('/biodata/{nama}/{tgl}/{jns}/{tmpt}/{almt}/{agm}/{tlp}', 
    function ($nama, $tgl, $jns, $tmpt, $almt, $agm, $tlp){
    return " <h1>Biodata</h1><br>" .
    "Nama Lengkap : $nama <br>" .
    "Tanggal Lahir : $tgl <br>" .
    "Jenis Kelamin : $jns <br>" . 
    "Tempat Lahir : $tmpt <br>" . 
    "Alamat : $almt<br>" . 
    "Agama : $agm<br>" . 
    "Telepon : $tlp";
});

Route::get('/hitung/{blgn1}/{blgn2}', function ($blgn1, $blgn2) {
    $hasil = $blgn1 + $blgn2;
    return "Bilangan 1 = $blgn1<br>" .
    "Bilangan 2 = $blgn2 <br>" . 
    "Hasil = $hasil";
});

Route::get('/persegi/{sisi}', function ($sisi) {
    $hasil = $sisi * $sisi;
    return "Sisi = $sisi<br>" .
    "Luas Persegi = $hasil";
});

Route::get('/persegi_panjang/{panjang}/{lebar}', function ($panjang, $lebar) {
    $hasil = $panjang * $lebar;
    return "Panjang = $panjang<br>" .
    "Lebar = $lebar<br>" .
    "Luas Persegi = $hasil";
});

Route::get('/segitiga/{alas}/{tinggi}', function ($alas, $tinggi) {
    $hasil = $alas * $tinggi * 0.5;
    return "Alas = $alas<br>" .
    "Tinggi = $tinggi<br>" .
    "Luas Segitiga = $hasil";
});

Route::get('/lingkaran/{jari2}/', function ($jari2) {
    $hasil = 3.14 * $jari2 **2;
    return "Jari jari = $jari2<br>" .
    "Luas Lingkaran = $hasil";
});

Route::get('/warung/{nama}/{no}/{tgl}/{jns}/{menu}/{jumlah}', 
function ($nama, $no, $tgl, $jns, $menu, $jumlah) {

    if($jns == 'makanan') {
    if($menu == 'seblak') {
        $harga = 10000;
    } else if($menu == 'pentol') {
        $harga = 15000;
    } else if($menu == 'batagor') {
        $harga = 20000;
    } else {
        $harga = 0;
    }
    }else if($jns == 'minuman') {
    if($menu == 'kopi') {
        $harga = 5000;
    } else if($menu == 'jus') {
        $harga = 10000;
    } else if($menu == 'thai tea') {
        $harga = 15000;
    } else {
        $harga = 0;
    }  
    } else {
        echo 'Menu tidak ada';
    } 
    $total = $harga * $jumlah;
    if($total > 50000) {
     $diskon = 0.1 * $total;
     $totalharga = $total - $diskon;
     $ctk = "Diskon 10% : $diskon <br>";
    }else {
        $ctk = "Diskon Tidak Ada<br>";
        $totalharga = $total;
    }

    return "<center><h3>~ANGKRINGAN MURMER~</h3></center>" .
    "<hr>" . 
    "Nama: $nama <br>" .
    "No telepon : $no<br>" .
    "Tanggal Pembelian : $tgl <br>" .
    "Jenis : $jns <br>" . 
    "Menu : $menu <br>" . 
    "Jumlah : $jumlah" . 
    "<hr>" . 
    "Total : $total <br>" . 
    "$ctk <br>" . 
    "<hr>" . 
    "Total Bayar = $totalharga";
});

Route::get('halaman1', function () {

    $siswa = ["Rudy", "Ipat", "Salwa", "Bara", "Ani", "Riska"];
    
    return view('tampil1', compact('siswa'));
});

Route::get('halaman2', function () {

    $hobi = ["masak", "muncak", "mancing", "mewarnai", "membaca", "menulis", "mengaji", "menggambar",
     "mewawancara", "menolong"];
    return view('tampil2', compact('hobi'));
});

Route::get('halaman3', function () {

    $idola = ["rony", "rini", "rafatar", "rafi", "raisa", "rossa", "ratna", "rompi", "revana", "rumingkang"];
    return view('tampil3', compact('idola'));
});

Route::get('post', [PostsController::class, 'tampil']);

Route::get('biodata', [BiodatasController::class, 'tampilin']);

Route::get('/product', [ProductController::class, 'index'])->name('product');

//menampilkan salah satu data
// Route::get('post', function() {

//     return $post = Post::find(1);
// });

//mengubah data
// Route::get('post', function(){
//     $post = Post::find(1);
//     $post->content = "Belajar lebih giat lagi";
//     $post->save();
//     return $post;
// });

// menampilkan semua data
// Route::get('post', function(){
//     return $post = Post::all();
// });

// menghapus data
// Route::get('post', function(){
//     $post = Post::find(1);
//     $post->delete();
//     return $post;
// });

// menampilkan data terentu 
// Route::get('post', function(){
//     return $post = Post::where('id','like', '%%')->get();
// });

//menambahkan data
// Route::get('post', function(){
//     $post = new Post;
//     $post->tittle = "menjadi teman yang baik";
//     $post->content = "menjadi teman yang baik adalah hal positif";
//     $post->save();
//     return $post;
// });

// Route::get('biodata', function () {
//   // return $siswa = Siswa::all();
//   $biodata = Biodata::all();
//     return view('halaman_biodata', compact('biodata'));
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
