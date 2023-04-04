@extends('layouts.sublayout.blog')
@section('page_title', 'Tentang BeliDigi')
@section('title','Tentang BeliDigi')
@section('blog_writer','The Founder')
@section('created_at','25 Mei 2022')
@section('time_commented','10')
@section('time_viewed','100')
@section('blog_main_image', @asset('images/blog/tentang.jpg'))
@section('content_blog')
    <h2 class=" font-bold text-dark text-[26px] sm:text-3xl md:text-4xl leading-snug sm:leading-snug md:leading-snug mb-6 wow fadeInUp " data-wow-delay=".1s " >
        Mencari Sebuah Cara Untuk Memudahkan Setiap Urusan
    </h2>
    <p class=" text-base text-body-color leading-relaxed mb-8 wow fadeInUp " data-wow-delay=".1s" >
        Setiap orang pasti memiliki berbagai urusan yang kadang banyak sekali dan ditunda-tunda hingga menumpuk. 
        Jika semua urusan iu dikerjakan secara bersamaan, terkadang kita akan lebih cepat lelah. 
        Saya pribadi juga selalu memiliki urusan yang banyak. Dikerjakan sekaligus,lelah. Dikerjakan satu per satu, tak kunjung selesai.
        Contoh urusan yang paling menyebalkan jika dikerjakan satu-satu adalah transfer ke berbagai rekening.
        Kelihatannya mudah tapi, ribet juga kalau harus masukan nomor rekening ke ATM satu persatu.
    </p>
    <p class=" text-base text-body-color leading-relaxed mb-10 wow fadeInUp " data-wow-delay=".1s" >
        Telintas dalam benak saya untuk membuat sebuah inovasi dimana semua orang bisa melakukan berbagai hal dalam sekali jalan.
        Tak hanya transfer ke berbagai rekening, bisa juga beli pulsa, kuota, langganan streaming, bayar virtual account dan yang lainnya.
        Walaupun tak perlu daftar di website ini, kalian bisa melakukan transaksi tersebut dan kalian tidak perlu khawatir masalah data yang ada di website ini.
        Setelah transaksi kalian berhasil, data kalian akan dihapus dari server.
    </p>
    <h3 class=" font-bold mb-8 text-dark text-2xl sm:text-[26px] wow fadeInUp " data-wow-delay=".1s" >
        Cara Kerja BeliDigi
    </h3>
    <p class=" text-base text-body-color leading-relaxed mb-10 wow fadeInUp " data-wow-delay=".1s" >
        Cara kerja BeliDigi sangatlah simple. Saya akan jelaskan secara sederhana saja. 
        Pertama, kalian hanya perlu mengisi data yang diperlukan melalui formulir yang ada. Contohnya, Jika kalian ingin transfer ke bank lain menggunakan platfrom BeliDigi, kalian harus mengisi kolom 'Bank Rekening Tujuan', 'Rekening Tujuan', 'Pemilik Rekening' dan 'Jumlahnya'. 
        Setelah itu kamu akan mendapatkan jumlah pembayaran yang harus dilakukan beserta 2-digit kode unik. Pilih metode pembayaran. Bayar, lalu klik 'saya sudah bayar'. Beres. Transaksi-mu akan diproses 1-10 menit atau maksimal 24 jam (jika terdapat kendala pada sistem). 
        Jika kalian ingin membaca detailnya, kalian bisa cek di link "Cara Kerja" yang ada dibagian paling bawah website.
    </p>
    <h3 class=" font-bold mb-8 text-dark text-2xl sm:text-[26px] wow fadeInUp " data-wow-delay=".1s" >
        Apakah Aman Transaksi Disini?
    </h3>
    <p class=" text-base text-body-color leading-relaxed mb-8 wow fadeInUp " data-wow-delay=".1s" >
        Aman tentunya. Pertama, data kalian akan dihapus setelah 10 menit jika transaksi kalian sukses. Kedua, jika transaksi kalian gagal padahal kalian sudah melakukan pembayaran, kalian bisa merequest refund asalkan kalian masih memiliki bukti transaksinya. 
        Ketiga, jika kalian mengalami kendala bertransaksi, kalian bisa hubungi support BeliDigi (saat ini, Founder sendiri yang menjadi support) pada link dibawah ini.
    </p>
@endsection