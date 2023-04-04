@extends('layouts.main')
@section('content')
<div class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-primary" >
    <div class="container">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full px-4">
            <div class=" hero-content text-center max-w-[780px] mx-auto wow fadeInUp " data-wow-delay=".2s" >
                <h1 class=" text-white font-bold text-3xl sm:text-4xl md:text-[45px] leading-snug sm:leading-snug md:leading-snug mb-8 " > Transaksi Mudah Dan Aman Tanpa Perlu Ribet </h1>
                <p class=" text-base sm:text-lg sm:leading-relaxed md:text-xl md:leading-relaxed mx-auto mb-10 text-[#e4e4e4] max-w-[600px] " >
                    Berbagai Macam Transaksi Mulai Dari Transfer, Isi Kuota Dan Yang Lainnya Dalam Satu Platform Digital Karya Anak Bangsa.
                </p>
                <ul class="flex flex-wrap items-center justify-center mb-10">
                <li>
                    <a href="#transaksi" class=" py-4 px-6 sm:px-10 inline-flex items-center justify-center text-center text-dark text-base bg-white hover:text-primary hover:shadow-lg font-medium rounded-lg transition duration-300 ease-in-out " > Transaksi Sekarang </a>
                </li>
                <li>
                    <a href="{{ Auth::check() ? route('riwayat-transaksi') : route('cari-transaksi') }}" class=" text-base font-medium text-white py-4 px-6 sm:px-10 flex items-center hover:opacity-70 transition duration-300 ease-in-out " > Cek Transaksi-Mu
                    <span class="pl-2">
                        <svg width="20" height="8" viewBox="0 0 20 8" class="fill-current" >
                        <path d="M19.2188 2.90632L17.0625 0.343819C16.875 0.125069 16.5312 0.0938193 16.2812 0.281319C16.0625 0.468819 16.0312 0.812569 16.2188 1.06257L18.25 3.46882H0.9375C0.625 3.46882 0.375 3.71882 0.375 4.03132C0.375 4.34382 0.625 4.59382 0.9375 4.59382H18.25L16.2188 7.00007C16.0312 7.21882 16.0625 7.56257 16.2812 7.78132C16.375 7.87507 16.5 7.90632 16.625 7.90632C16.7812 7.90632 16.9375 7.84382 17.0312 7.71882L19.1875 5.15632C19.75 4.46882 19.75 3.53132 19.2188 2.90632Z" />
                        </svg>
                    </span>
                    </a>
                </li>
                </ul>
            </div>
            </div>

            <div class="w-full px-4">
            <div class="mx-auto max-w-[845px] relative z-10 wow fadeInUp" data-wow-delay=".25s" >
                <div class="mt-16">
                  <img src="{{ asset('images/hero/belidigi-snapshot.png') }}" alt="hero" class="max-w-full mx-auto rounded-t-xl rounded-tr-xl" />
                </div>
                <div class="absolute z-[-1] bottom-0 -left-9">
                  <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg" >
                      <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white" />
                      <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white" />
                      <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                      <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white" />
                      <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white" />
                      <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white" />
                      <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white" />
                      <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white" />
                      <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white" />
                      <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white" />
                      <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white" />
                      <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white" />
                      <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white" />
                      <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white" />
                      <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white" />
                      <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white" />
                      <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white" />
                      <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white" />
                      <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white" />
                      <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white" />
                      <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white" />
                      <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white" />
                      <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white" />
                      <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white" />
                      <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white" />
                      <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white" />
                      <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white" />
                      <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white" />
                      <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white" />
                      <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white" />
                      <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white" />
                      <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white" />
                      <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white" />
                      <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white" />
                      <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white" />
                      <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white" />
                      <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white" />
                      <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white" />
                      <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white" />
                      <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white" />
                      <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white" />
                      <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white" />
                      <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white" />
                      <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white" />
                      <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white" />
                      <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white" />
                      <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white" />
                      <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white" />
                      <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white" />
                      <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white" />
                      <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white" />
                      <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white" />
                      <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white" />
                      <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white" />
                      <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white" />
                      <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white" />
                      <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white" />
                      <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white" />
                      <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white" />
                      <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white" />
                      <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white" />
                      <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white" />
                      <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white" />
                      <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white" />
                      <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white" />
                      <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white" />
                      <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white" />
                      <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white" />
                      <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white" />
                      <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white" />
                      <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white" />
                      <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white" />
                      <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white" />
                      <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white" />
                      <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white" />
                      <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white" />
                      <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white" />
                      <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white" />
                      <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white" />
                      <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white" />
                  </svg>
                </div>
                <div class="absolute z-[-1] -top-6 -right-6">
                  <svg width="134" height="106" viewBox="0 0 134 106" fill="none" xmlns="http://www.w3.org/2000/svg" >
                      <circle cx="1.66667" cy="104" r="1.66667" transform="rotate(-90 1.66667 104)" fill="white" />
                      <circle cx="16.3333" cy="104" r="1.66667" transform="rotate(-90 16.3333 104)" fill="white" />
                      <circle cx="31" cy="104" r="1.66667" transform="rotate(-90 31 104)" fill="white" />
                      <circle cx="45.6667" cy="104" r="1.66667" transform="rotate(-90 45.6667 104)" fill="white" />
                      <circle cx="60.3333" cy="104" r="1.66667" transform="rotate(-90 60.3333 104)" fill="white" />
                      <circle cx="88.6667" cy="104" r="1.66667" transform="rotate(-90 88.6667 104)" fill="white" />
                      <circle cx="117.667" cy="104" r="1.66667" transform="rotate(-90 117.667 104)" fill="white" />
                      <circle cx="74.6667" cy="104" r="1.66667" transform="rotate(-90 74.6667 104)" fill="white" />
                      <circle cx="103" cy="104" r="1.66667" transform="rotate(-90 103 104)" fill="white" />
                      <circle cx="132" cy="104" r="1.66667" transform="rotate(-90 132 104)" fill="white" />
                      <circle cx="1.66667" cy="89.3333" r="1.66667" transform="rotate(-90 1.66667 89.3333)" fill="white" />
                      <circle cx="16.3333" cy="89.3333" r="1.66667" transform="rotate(-90 16.3333 89.3333)" fill="white" />
                      <circle cx="31" cy="89.3333" r="1.66667" transform="rotate(-90 31 89.3333)" fill="white" />
                      <circle cx="45.6667" cy="89.3333" r="1.66667" transform="rotate(-90 45.6667 89.3333)" fill="white" />
                      <circle cx="60.3333" cy="89.3338" r="1.66667" transform="rotate(-90 60.3333 89.3338)" fill="white" />
                      <circle cx="88.6667" cy="89.3338" r="1.66667" transform="rotate(-90 88.6667 89.3338)" fill="white" />
                      <circle cx="117.667" cy="89.3338" r="1.66667" transform="rotate(-90 117.667 89.3338)" fill="white" />
                      <circle cx="74.6667" cy="89.3338" r="1.66667" transform="rotate(-90 74.6667 89.3338)" fill="white" />
                      <circle cx="103" cy="89.3338" r="1.66667" transform="rotate(-90 103 89.3338)" fill="white" />
                      <circle cx="132" cy="89.3338" r="1.66667" transform="rotate(-90 132 89.3338)" fill="white" />
                      <circle cx="1.66667" cy="74.6673" r="1.66667" transform="rotate(-90 1.66667 74.6673)" fill="white" />
                      <circle cx="1.66667" cy="31.0003" r="1.66667" transform="rotate(-90 1.66667 31.0003)" fill="white" />
                      <circle cx="16.3333" cy="74.6668" r="1.66667" transform="rotate(-90 16.3333 74.6668)" fill="white" />
                      <circle cx="16.3333" cy="31.0003" r="1.66667" transform="rotate(-90 16.3333 31.0003)" fill="white" />
                      <circle cx="31" cy="74.6668" r="1.66667" transform="rotate(-90 31 74.6668)" fill="white" />
                      <circle cx="31" cy="31.0003" r="1.66667" transform="rotate(-90 31 31.0003)" fill="white" />
                      <circle cx="45.6667" cy="74.6668" r="1.66667" transform="rotate(-90 45.6667 74.6668)" fill="white" />
                      <circle cx="45.6667" cy="31.0003" r="1.66667" transform="rotate(-90 45.6667 31.0003)" fill="white" />
                      <circle cx="60.3333" cy="74.6668" r="1.66667" transform="rotate(-90 60.3333 74.6668)" fill="white" />
                      <circle cx="60.3333" cy="31.0001" r="1.66667" transform="rotate(-90 60.3333 31.0001)" fill="white" />
                      <circle cx="88.6667" cy="74.6668" r="1.66667" transform="rotate(-90 88.6667 74.6668)" fill="white" />
                      <circle cx="88.6667" cy="31.0001" r="1.66667" transform="rotate(-90 88.6667 31.0001)" fill="white" />
                      <circle cx="117.667" cy="74.6668" r="1.66667" transform="rotate(-90 117.667 74.6668)" fill="white" />
                      <circle cx="117.667" cy="31.0001" r="1.66667" transform="rotate(-90 117.667 31.0001)" fill="white" />
                      <circle cx="74.6667" cy="74.6668" r="1.66667" transform="rotate(-90 74.6667 74.6668)" fill="white" />
                      <circle cx="74.6667" cy="31.0001" r="1.66667" transform="rotate(-90 74.6667 31.0001)" fill="white" />
                      <circle cx="103" cy="74.6668" r="1.66667" transform="rotate(-90 103 74.6668)" fill="white" />
                      <circle cx="103" cy="31.0001" r="1.66667" transform="rotate(-90 103 31.0001)" fill="white" />
                      <circle cx="132" cy="74.6668" r="1.66667" transform="rotate(-90 132 74.6668)" fill="white" />
                      <circle cx="132" cy="31.0001" r="1.66667" transform="rotate(-90 132 31.0001)" fill="white" />
                      <circle cx="1.66667" cy="60.0003" r="1.66667" transform="rotate(-90 1.66667 60.0003)" fill="white" />
                      <circle cx="1.66667" cy="16.3336" r="1.66667" transform="rotate(-90 1.66667 16.3336)" fill="white" />
                      <circle cx="16.3333" cy="60.0003" r="1.66667" transform="rotate(-90 16.3333 60.0003)" fill="white" />
                      <circle cx="16.3333" cy="16.3336" r="1.66667" transform="rotate(-90 16.3333 16.3336)" fill="white" />
                      <circle cx="31" cy="60.0003" r="1.66667" transform="rotate(-90 31 60.0003)" fill="white" />
                      <circle cx="31" cy="16.3336" r="1.66667" transform="rotate(-90 31 16.3336)" fill="white" />
                      <circle cx="45.6667" cy="60.0003" r="1.66667" transform="rotate(-90 45.6667 60.0003)" fill="white" />
                      <circle cx="45.6667" cy="16.3336" r="1.66667" transform="rotate(-90 45.6667 16.3336)" fill="white" />
                      <circle cx="60.3333" cy="60.0003" r="1.66667" transform="rotate(-90 60.3333 60.0003)" fill="white" />
                      <circle cx="60.3333" cy="16.3336" r="1.66667" transform="rotate(-90 60.3333 16.3336)" fill="white" />
                      <circle cx="88.6667" cy="60.0003" r="1.66667" transform="rotate(-90 88.6667 60.0003)" fill="white" />
                      <circle cx="88.6667" cy="16.3336" r="1.66667" transform="rotate(-90 88.6667 16.3336)" fill="white" />
                      <circle cx="117.667" cy="60.0003" r="1.66667" transform="rotate(-90 117.667 60.0003)" fill="white" />
                      <circle cx="117.667" cy="16.3336" r="1.66667" transform="rotate(-90 117.667 16.3336)" fill="white" />
                      <circle cx="74.6667" cy="60.0003" r="1.66667" transform="rotate(-90 74.6667 60.0003)" fill="white" />
                      <circle cx="74.6667" cy="16.3336" r="1.66667" transform="rotate(-90 74.6667 16.3336)" fill="white" />
                      <circle cx="103" cy="60.0003" r="1.66667" transform="rotate(-90 103 60.0003)" fill="white" />
                      <circle cx="103" cy="16.3336" r="1.66667" transform="rotate(-90 103 16.3336)" fill="white" />
                      <circle cx="132" cy="60.0003" r="1.66667" transform="rotate(-90 132 60.0003)" fill="white" />
                      <circle cx="132" cy="16.3336" r="1.66667" transform="rotate(-90 132 16.3336)" fill="white" />
                      <circle cx="1.66667" cy="45.3336" r="1.66667" transform="rotate(-90 1.66667 45.3336)" fill="white" />
                      <circle cx="1.66667" cy="1.66683" r="1.66667" transform="rotate(-90 1.66667 1.66683)" fill="white" />
                      <circle cx="16.3333" cy="45.3336" r="1.66667" transform="rotate(-90 16.3333 45.3336)" fill="white" />
                      <circle cx="16.3333" cy="1.66683" r="1.66667" transform="rotate(-90 16.3333 1.66683)" fill="white" />
                      <circle cx="31" cy="45.3336" r="1.66667" transform="rotate(-90 31 45.3336)" fill="white" />
                      <circle cx="31" cy="1.66683" r="1.66667" transform="rotate(-90 31 1.66683)" fill="white" />
                      <circle cx="45.6667" cy="45.3336" r="1.66667" transform="rotate(-90 45.6667 45.3336)" fill="white" />
                      <circle cx="45.6667" cy="1.66683" r="1.66667" transform="rotate(-90 45.6667 1.66683)" fill="white" />
                      <circle cx="60.3333" cy="45.3338" r="1.66667" transform="rotate(-90 60.3333 45.3338)" fill="white" />
                      <circle cx="60.3333" cy="1.66707" r="1.66667" transform="rotate(-90 60.3333 1.66707)" fill="white" />
                      <circle cx="88.6667" cy="45.3338" r="1.66667" transform="rotate(-90 88.6667 45.3338)" fill="white" />
                      <circle cx="88.6667" cy="1.66707" r="1.66667" transform="rotate(-90 88.6667 1.66707)" fill="white" />
                      <circle cx="117.667" cy="45.3338" r="1.66667" transform="rotate(-90 117.667 45.3338)" fill="white" />
                      <circle cx="117.667" cy="1.66707" r="1.66667" transform="rotate(-90 117.667 1.66707)" fill="white" />
                      <circle cx="74.6667" cy="45.3338" r="1.66667" transform="rotate(-90 74.6667 45.3338)" fill="white" />
                      <circle cx="74.6667" cy="1.66707" r="1.66667" transform="rotate(-90 74.6667 1.66707)" fill="white" />
                      <circle cx="103" cy="45.3338" r="1.66667" transform="rotate(-90 103 45.3338)" fill="white" />
                      <circle cx="103" cy="1.66707" r="1.66667" transform="rotate(-90 103 1.66707)" fill="white" />
                      <circle cx="132" cy="45.3338" r="1.66667" transform="rotate(-90 132 45.3338)" fill="white" />
                      <circle cx="132" cy="1.66707" r="1.66667" transform="rotate(-90 132 1.66707)" fill="white" />
                  </svg>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<section id="about" class="pt-20 lg:pt-[120px] pb-20 lg:pb-[120px] bg-[#f3f4fe]" >
      <div class="container">
        <div class="bg-white wow fadeInUp" data-wow-delay=".2s">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
              <div class=" lg:flex items-center justify-between border overflow-hidden " >
                <div class=" lg:max-w-[565px] xl:max-w-[640px] w-full py-12 px-7 sm:px-12 md:p-16 lg:py-9 lg:px-16 xl:p-[70px] " >
                  <span class=" text-sm font-medium text-white py-2 px-5 bg-primary sm:inline-block sm:mb-5 sm:mx-0 block w-fit mx-auto my-0 mb-10" > Sekilas </span>
                  <h2 class=" font-bold text-3xl sm:text-4xl 2xl:text-[40px] sm:leading-snug text-dark mb-6 text-center sm:text-left" > Berawal Dari Pengalaman Pribadi Sang Pendiri </h2>
                  <p class="text-base text-body-color mb-9 leading-relaxed text-center sm:text-left">
                    Dewasa ini, kita sangat sering bertransaksi secara online maupun offline. Mulai dari isi pulsa, belanja online, dan yang lainnya. 
                    Sayangnya, transaksi yang banyak menyulitkan kita dalam pembayarannya. Apa tidak ada yang bisa menyatukan mereka semuanya.
                  </p>
                  <p class="text-base text-body-color mb-9 leading-relaxed text-center sm:text-left">
                    BeliDigi Jawabannya! BeliDigi dapat menyatukan semua transaksi yang kita punya dalam sekali bayar. Selain itu, kita bisa menggunakan metode pembayaran yang lainnya seperti menggunakan kripto (stablecoin).
                    Kelebihan BeliDigi juga adalah biaya transaksi yang sangat murah seharga  
                  </p>
                  <a href="{{ route('tentang') }}" class="sm:inline-flex items-center justify-center py-4 px-6 rounded text-white bg-primary text-base font-medium hover:bg-opacity-90 hover:shadow-lg transition duration-300 ease-in-out block mx-auto my-0 w-fit" > Pelajari Lebih Lanjut </a>
                </div>
                <div class="text-center">
                  <div class="relative inline-block z-10">
                    <img src="{{ asset('images/about/about-image.svg') }}" alt="image" class="mx-auto lg:ml-auto" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
<section id="transaksi" class="pt-20 lg:pt-[120px] pb-8 lg:pb-[70px]">
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="mb-12 lg:mb-20 max-w-[620px]">
            <span class="font-semibold text-lg text-primary mb-2 block">
              Layanan Kami
            </span>
            <h2 class=" font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4 " > Kemudahan Bertransaksi </h2>
            <p class=" text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color " >
              Kami menyediakan berbagai layanan untuk anda. Untuk memulai transaksi, pilihlah salah satu menu dibawah ini.
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".1s">
            <div class=" w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10 " >
              <span class=" w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300 " ></span>
              <svg width="45" height="45" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><path fill="#96a1c3" d="M18 33.82v13.36A3 3 0 0 1 20 50v2a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1v-2a3 3 0 0 1 2-2.82V33.82A3 3 0 0 1 8 31v-2a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a3 3 0 0 1-2 2.82Z"/><path fill="#ccd3eb" d="M18 33.82v13.36A3 3 0 0 1 20 50v2a1 1 0 0 1-1 1h-7a.22.22 0 0 1 0-.08v-2.16a3.26 3.26 0 0 1 2-3V33.29a3.26 3.26 0 0 1-2-3.05v-2.16a.22.22 0 0 1 0-.08h7a1 1 0 0 1 1 1v2a3 3 0 0 1-2 2.82Z"/><path fill="#96a1c3" d="M36 33.82v13.36A3 3 0 0 1 38 50v2a1 1 0 0 1-1 1H27a1 1 0 0 1-1-1v-2a3 3 0 0 1 2-2.82V33.82A3 3 0 0 1 26 31v-2a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a3 3 0 0 1-2 2.82Z"/><path fill="#ccd3eb" d="M36 33.82v13.36A3 3 0 0 1 38 50v2a1 1 0 0 1-1 1h-7a.22.22 0 0 1 0-.08v-2.16a3.26 3.26 0 0 1 2-3V33.29a3.26 3.26 0 0 1-2-3.05v-2.16a.22.22 0 0 1 0-.08h7a1 1 0 0 1 1 1v2a3 3 0 0 1-2 2.82Z"/><path fill="#96a1c3" d="M54 33.82v13.36A3 3 0 0 1 56 50v2a1 1 0 0 1-1 1H45a1 1 0 0 1-1-1v-2a3 3 0 0 1 2-2.82V33.82A3 3 0 0 1 44 31v-2a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a3 3 0 0 1-2 2.82Z"/><path fill="#ccd3eb" d="M54 33.82v13.36A3 3 0 0 1 56 50v2a1 1 0 0 1-1 1h-7a.22.22 0 0 1 0-.08v-2.16a3.26 3.26 0 0 1 2-3V33.29a3.26 3.26 0 0 1-2-3.05v-2.16a.22.22 0 0 1 0-.08h7a1 1 0 0 1 1 1v2a3 3 0 0 1-2 2.82zM57 22a1 1 0 0 1-1 1H8a1 1 0 0 1-.94-.66 1 1 0 0 1 .31-1.11l.27-.23 9.55-7.81 10.63-8.7a6.29 6.29 0 0 1 1.44-.89 5.57 5.57 0 0 1 1.06-.38 6.52 6.52 0 0 1 3.36 0 4.46 4.46 0 0 1 .73.24l.33.14a6.5 6.5 0 0 1 1.14.66l.3.23 9 7.37 3.08 2.52.74.62 3.09 2.53 3 2.45 1.23 1 .27.23A1 1 0 0 1 57 22z"/><path fill="#f5f7ff" d="M55.13 20H17a1 1 0 0 1-.94-.66 1 1 0 0 1 .31-1.11l.27-.23 9.55-7.81 8.22-6.73.33.14a6.5 6.5 0 0 1 1.14.66l.3.23 9 7.37 3.08 2.52.74.62 3.09 2.53Z"/><rect width="56" height="9" x="4" y="21" fill="#ccd3eb" rx="3" ry="3"/><path fill="#f5f7ff" d="M32.38 12h-1a.5.5 0 1 1 0-1H34a1 1 0 0 0 0-2h-1V8a1 1 0 0 0-2 0v1a2.49 2.49 0 0 0 .38 5h1a.5.5 0 0 1 0 1H30a1 1 0 0 0 0 2h1v1a1 1 0 0 0 2 0v-1.09a2.49 2.49 0 0 0-.62-4.91Z"/><path fill="#96a1c3" d="M56 51H8a5 5 0 0 0-5 5v4a1 1 0 0 0 1 1h56a1 1 0 0 0 1-1v-4a5 5 0 0 0-5-5Z"/><path fill="#033c59" d="M49.18 16.42a1 1 0 0 1-.77.37.94.94 0 0 1-.63-.23l-.78-.64a1 1 0 0 1 1.26-1.54L49 15a1 1 0 0 1 .18 1.42Z"/><path fill="#0074ff" d="M31.38 11H34a1 1 0 0 0 0-2h-1V8a1 1 0 0 0-2 0v1a2.49 2.49 0 0 0 .38 5h1a.5.5 0 0 1 0 1H30a1 1 0 0 0 0 2h1v1a1 1 0 0 0 2 0v-1.09a2.49 2.49 0 0 0-.62-4.91h-1a.5.5 0 1 1 0-1Z"/><path fill="#033c59" d="M56 51v-1a3 3 0 0 0-2-2.82V33.82A3 3 0 0 0 56 31v-1h1a3 3 0 0 0 3-3v-3a3 3 0 0 0-3-3h-.64l-4.23-3.45a1 1 0 1 0-1.26 1.54L53.2 21H10.8L29.08 6a4.77 4.77 0 0 1 5.17-.45 4.9 4.9 0 0 1 .67.45l9 7.36a1 1 0 0 0 1.26-1.54l-9-7.36a3.55 3.55 0 0 0-.31-.23 5.61 5.61 0 0 0-1.13-.67 6.58 6.58 0 0 0-6.92.9l-10.63 8.73L7.64 21H7a3 3 0 0 0-3 3v3a3 3 0 0 0 3 3h1v1a3 3 0 0 0 2 2.82v13.36A3 3 0 0 0 8 50v1a5 5 0 0 0-5 5v4a1 1 0 0 0 1 1h56a1 1 0 0 0 1-1v-4a5 5 0 0 0-5-5Zm-2-20a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1v-1h8ZM36 47.18V33.82A3 3 0 0 0 38 31v-1h6v1a3 3 0 0 0 2 2.82v13.36A3 3 0 0 0 44 50v1h-6v-1a3 3 0 0 0-2-2.82Zm-18 0V33.82A3 3 0 0 0 20 31v-1h6v1a3 3 0 0 0 2 2.82v13.36A3 3 0 0 0 26 50v1h-6v-1a3 3 0 0 0-2-2.82ZM11 32a1 1 0 0 1-1-1v-1h8v1a1 1 0 0 1-1 1Zm5 2v13h-4V34Zm12 16a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v1h-8Zm2-3V34h4v13Zm5-15h-6a1 1 0 0 1-1-1v-1h8v1a1 1 0 0 1-1 1Zm11 18a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v1h-8Zm2-3V34h4v13ZM7 28a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h50a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1Zm3 22a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v1h-8Zm49 9H5v-3a3 3 0 0 1 3-3h48a3 3 0 0 1 3 3Z"/></svg> 
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Transfer Bank
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Mendukung transfer antar bank nasional maupun internasional dengan biaya admin semurah permen. (S&K Berlaku)
            </p>
            <a href="javascript:void(0)" class="font-medium text-base text-body-color hover:text-primary"> Transfer Sekarang </a>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".15s" >
            <div class=" w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10 " >
              <span class=" w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300 " ></span>
              <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g data-name="Layer 2"><circle cx="256" cy="256" r="205.12" fill="#2baae2"/><path fill="#f79421" d="m89.56 179.92 297.95.363-.138 112.35-297.95-.364z"/><path fill="#010101" d="m394 299.25-311.2-.36.14-125.63 311.24.36ZM96.1 285.63l284.67.32.11-99.06-284.67-.33Z"/><path fill="#010101" d="m223.74 243.73-3-5.79v5.79h-5.06V227.6h7.52a7.33 7.33 0 0 1 3.35.7 4.79 4.79 0 0 1 2.08 1.89 5.22 5.22 0 0 1 .69 2.7 4.78 4.78 0 0 1-.9 2.87 4.88 4.88 0 0 1-2.59 1.8l3.5 6.18zm-3-9.16h2a1.58 1.58 0 0 0 1.09-.33 1.57 1.57 0 0 0 0-2 1.5 1.5 0 0 0-1.08-.36h-2zm16.61-3.32a4.31 4.31 0 0 1 2.16-.51 4.83 4.83 0 0 1 2.71.79 5.26 5.26 0 0 1 1.9 2.28 9.26 9.26 0 0 1 0 7 5.27 5.27 0 0 1-1.91 2.28 4.88 4.88 0 0 1-2.71.78 4.3 4.3 0 0 1-2.15-.51A3.53 3.53 0 0 1 236 242v7.91h-5.06v-19H236v1.76a3.51 3.51 0 0 1 1.35-1.42zm1.81 4.48a1.87 1.87 0 0 0-2.69 0 2.26 2.26 0 0 0-.53 1.59 2.29 2.29 0 0 0 .53 1.6 1.72 1.72 0 0 0 1.34.57 1.77 1.77 0 0 0 1.35-.57 2.31 2.31 0 0 0 .52-1.6 2.26 2.26 0 0 0-.52-1.59zm12.67 4-2.36 6.77h-3.19l1.08-6.76zm12.31-5.82v4.17h-10.63v-4.18z"/><path fill="#010101" d="M238.49 272.63a36.38 36.38 0 0 1 0-72.75 36.38 36.38 0 0 1 0 72.75Zm0-62.12a25.75 25.75 0 0 0 0 51.5 25.75 25.75 0 0 0 0-51.5ZM322.838 222.324l30.67.038-.086 70.22-30.67-.038zM100.15 194.41v-3.7h6v13H102v-9.3zm8.85-2.21a5.46 5.46 0 0 1 8 0 7.85 7.85 0 0 1 1.31 4.83 8 8 0 0 1-1.31 4.87 5.45 5.45 0 0 1-8 0 9.65 9.65 0 0 1 0-9.69zm5.18 2.7a1.11 1.11 0 0 0-1.15-.72 1.14 1.14 0 0 0-1.18.72 6.17 6.17 0 0 0-.28 2.14 6 6 0 0 0 .28 2.17 1.3 1.3 0 0 0 2.33 0 6.42 6.42 0 0 0 .29-2.16 6.15 6.15 0 0 0-.34-2.15zm6.55-2.69a5.48 5.48 0 0 1 8 0 9.56 9.56 0 0 1 0 9.68 5.45 5.45 0 0 1-8.05 0 9.65 9.65 0 0 1 0-9.69zm5.18 2.71a1.12 1.12 0 0 0-1.15-.73 1.14 1.14 0 0 0-1.18.72 6.19 6.19 0 0 0-.28 2.15 6 6 0 0 0 .28 2.16 1.3 1.3 0 0 0 2.33 0 6.42 6.42 0 0 0 .29-2.16 6.09 6.09 0 0 0-.29-2.14zm6.6-2.69a5.46 5.46 0 0 1 8.05 0 7.85 7.85 0 0 1 1.31 4.83 8 8 0 0 1-1.32 4.85 5.47 5.47 0 0 1-8.05 0 9.65 9.65 0 0 1 0-9.69zm5.18 2.7a1.11 1.11 0 0 0-1.15-.72 1.14 1.14 0 0 0-1.18.72 6.13 6.13 0 0 0-.28 2.14 6 6 0 0 0 .28 2.16 1.15 1.15 0 0 0 1.17.73 1.13 1.13 0 0 0 1.16-.72 6.45 6.45 0 0 0 .29-2.17 6.13 6.13 0 0 0-.29-2.14zm6.6-2.69a5.46 5.46 0 0 1 8.05 0 7.85 7.85 0 0 1 1.31 4.83 8 8 0 0 1-1.32 4.85 5.45 5.45 0 0 1-8.05 0 9.65 9.65 0 0 1 0-9.69zm5.18 2.7a1.11 1.11 0 0 0-1.15-.72 1.14 1.14 0 0 0-1.18.72 6.17 6.17 0 0 0-.28 2.14 6 6 0 0 0 .28 2.17 1.3 1.3 0 0 0 2.33 0 6.42 6.42 0 0 0 .29-2.16 6.15 6.15 0 0 0-.29-2.15zm6.6-2.68a5.47 5.47 0 0 1 8.05 0 9.56 9.56 0 0 1 0 9.68 5.45 5.45 0 0 1-8.05 0 9.63 9.63 0 0 1 0-9.68zm5.18 2.7a1.3 1.3 0 0 0-2.33 0 6.19 6.19 0 0 0-.28 2.15 6 6 0 0 0 .28 2.16 1.3 1.3 0 0 0 2.33 0 6.42 6.42 0 0 0 .29-2.16 6.09 6.09 0 0 0-.29-2.11z"/><path fill="#010101" d="m352.931 244.511 34.51.042-.037 30.67-34.51-.042z"/><path d="M340.82 214.65c.06.2.13.4.19.6v.08a.15.15 0 0 1-.11 0 2.08 2.08 0 0 1-.75-.36h-.05v.47c0 .17 0 .2-.18.12l-.65-.4a1.1 1.1 0 0 1-.16-.15c0 .18 0 .35-.05.53s-.05.15-.18.09a1.59 1.59 0 0 1-.7-.61 1.57 1.57 0 0 1-.87.67l-.07-.67a2.87 2.87 0 0 1-1 .61v-.66a2.34 2.34 0 0 1-1 .4l.25-.76a2.08 2.08 0 0 1-1.11.4l.45-1.22c-.28-.12-.54-.23-.8-.36a9 9 0 0 1-1.49-.88c-.06 0-.11-.09-.2 0s-.14-.05-.2-.1-.29-.21-.43-.33-.23-.23-.34-.35a.2.2 0 0 1 0-.11 1.43 1.43 0 0 0 0-.16l-.19.22a.13.13 0 0 1-.22 0 2.88 2.88 0 0 1-.22-.27 12.05 12.05 0 0 0-1.4-1.7 1.21 1.21 0 0 0-.24-.21c-.09-.06-.1-.12 0-.22a4.77 4.77 0 0 1 1.23.28c-.12-.33-.23-.67-.36-1 0-.11 0-.17.07-.22a5.61 5.61 0 0 1 1.61 1.94c.3-.2.51 0 .73.18a2.49 2.49 0 0 1 .31.27 4.66 4.66 0 0 0 .69-1.07c.21-.37.39-.75.61-1.17h-.36a.23.23 0 0 1 0-.16c.11-.14.23-.26.35-.39-.15-.11-.15-.11 0-.23l.29-.29c-.18 0-.17-.08-.18-.14-.29.09-.58.2-.88.27a1.29 1.29 0 0 1-.75-.07.12.12 0 0 1-.06-.1s0-.05.08-.07a2.5 2.5 0 0 0 .25-.09 2.05 2.05 0 0 1-1.47-.23l.09-.16a2.45 2.45 0 0 1-.94-.35s-.05-.09-.07-.13l.12-.06a1.46 1.46 0 0 1 .21 0 3.21 3.21 0 0 1-.44-.15c-.26-.12-.51-.26-.76-.4-.07 0-.15-.11 0-.2h.37a3 3 0 0 1-1-.69s0-.08-.05-.12.1 0 .14 0c.23.07.46.15.69.21a1.4 1.4 0 0 0 .41.06l-.47-.17a2.88 2.88 0 0 1-1.38-1s0-.09 0-.14a.78.78 0 0 1 .16 0c.16.08.32.18.49.25a2.78 2.78 0 0 1-.9-.84 4.66 4.66 0 0 1-.25-.5s0-.08 0-.13.1 0 .12.06a1.89 1.89 0 0 0 .51.47s0 0 .08 0-.11-.11-.17-.15a1.78 1.78 0 0 1-.66-1 .78.78 0 0 1 0-.21h.17c-.09-.18-.2-.39-.3-.61a3 3 0 0 1-.15-.45s0-.1.06-.18a1.25 1.25 0 0 1-.2-.76c.11-.05.13 0 .18.1s.32.37.5.55a2.27 2.27 0 0 1-.68-1.67c.1 0 .13 0 .16.09l.12.24a.49.49 0 0 0 .11.14 3.63 3.63 0 0 1-.22-.5 7.63 7.63 0 0 1-.17-.83c0-.14 0-.17.18-.13 0-.11 0-.24-.06-.35a1.72 1.72 0 0 1 .06-.68c0-.08.06-.16.19-.06a1.31 1.31 0 0 1 0-.22c0-.25 0-.5.08-.74 0-.09.06-.13.15-.1v-.39a1.73 1.73 0 0 1 .15-.68.17.17 0 0 1 .1-.07s.07.05.08.08.09.3.15.44a1.33 1.33 0 0 1-.07-.38c0-.35.11-.69.16-1v-.1c0-.03.06-.16.16-.13l.16.62v-.65a1.47 1.47 0 0 1 .19-.94.19.19 0 0 1 .13 0s.06 0 .07.08c.1.41.19.83.31 1.24a5.55 5.55 0 0 0 .74 1.53 5.72 5.72 0 0 0 1.18 1.33 7.81 7.81 0 0 0 2.25 1.31 4.09 4.09 0 0 1 1.66 1.08c.15.16.29.33.42.5a.3.3 0 0 0 .31.13.23.23 0 0 0 .23-.2.63.63 0 0 1 .09-.14h-.06c-.13-.13-.11-.19.06-.25l.15-.06c-.11-.1-.29-.15-.23-.32s.16-.07.23-.1a1.8 1.8 0 0 1-.11-.2.11.11 0 0 1 0-.12s.08 0 .12 0h.23a.49.49 0 0 1-.28-.38c0-.09 0-.1.12-.08h.15a2 2 0 0 1-.1-.22.14.14 0 0 1 .16-.2.33.33 0 0 0 .27-.25c0-.07-.11-.18-.23-.17l-.62.08a3.37 3.37 0 0 1-.55 0 .39.39 0 0 1-.27-.36s0-.07 0-.08a.82.82 0 0 1 .28-.11 3.35 3.35 0 0 0 1.25-.21s0 0-.06 0h-.05a2.65 2.65 0 0 0-1.15.15 1.07 1.07 0 0 0-.57.48.18.18 0 0 1-.1.07s0 0-.07-.08a.75.75 0 0 1 .38-1l.51-.26a.53.53 0 0 1-.15-.11.3.3 0 0 1-.06-.18s.09 0 .13-.06l-.05-.21h.23c0-.06-.06-.15 0-.18s.13 0 .19 0l.1.07v-.21c0-.06.08-.1.14-.05l.21.22.2-.11a1.5 1.5 0 0 1 1-.11 1.85 1.85 0 0 0 1.29-.3s.09-.11.14-.16a.47.47 0 0 1 .12-.07s.07.08.07.12.05.28-.08.36v.22a2.28 2.28 0 0 1 0 .26c0 .12 0 .23-.14.28l-.11.06c.23.18.2.45.28.68a2.75 2.75 0 0 0 .28.57.34.34 0 0 0 .41.14c.1 0 .1 0 .14.09a.46.46 0 0 1-.43.19c.05.13.15.14.25.16a.33.33 0 0 1 .13.07 1 1 0 0 1-.09.13.5.5 0 0 1-.13.07H340.03a.19.19 0 0 1 0 .13 1 1 0 0 1-.15.13c.07.06.23 0 .19.2l-.3.15.35.19c0 .16-.17.09-.25.14a.7.7 0 0 0 .14.44 1.07 1.07 0 0 1 .15.4c0 .16.12.28.27.3a.38.38 0 0 0 .27-.11 5 5 0 0 0 .43-.49 2.6 2.6 0 0 1 .88-.7c.37-.19.76-.35 1.14-.52a8.46 8.46 0 0 0 2-1.22 7 7 0 0 0 1-1.06 5.9 5.9 0 0 0 .93-1.9c.11-.35.18-.71.27-1.06a.29.29 0 0 1 0-.1c.11 0 .17 0 .22.1a1.89 1.89 0 0 1 .13 1.07 3 3 0 0 0 0 .52 4.92 4.92 0 0 0 .14-.55c0-.11.05-.16.17-.12a4.19 4.19 0 0 1 .21 1.41 1.29 1.29 0 0 1 0-.19s.05-.1.08-.1a.12.12 0 0 1 .11.07 4.25 4.25 0 0 1 .14.51 5 5 0 0 1 0 .55c.13 0 .17.05.17.17 0 .3.05.6.07.88h.1a1.82 1.82 0 0 1 .05 1.13h.16a2.79 2.79 0 0 1-.36 1.47c0-.06.08-.11.11-.17a1.74 1.74 0 0 0 .1-.19c0-.06 0-.16.14-.12a2 2 0 0 1-.74 1.71l.69-.76a1.14 1.14 0 0 1-.2.85c.12 0 .1.12.07.22a4 4 0 0 1-.45 1s0 0 0 .07h.06s.1-.05.11 0a.14.14 0 0 1 .06.12 3.27 3.27 0 0 1-.17.53 2.66 2.66 0 0 1-.67.75 1.52 1.52 0 0 0 .54-.43s0-.08.06-.09a.18.18 0 0 1 .12 0 .11.11 0 0 1 0 .1 2.2 2.2 0 0 1-.71 1 3.73 3.73 0 0 0-.43.36l.45-.26a.58.58 0 0 1 .19 0 .69.69 0 0 1-.05.17 3 3 0 0 1-1.3 1c-.18.07-.37.13-.55.21.11 0 .23 0 .34-.06l.76-.23a.71.71 0 0 1 .14 0 .4.4 0 0 1 0 .13 2.73 2.73 0 0 1-.89.65h-.06.26a.31.31 0 0 1 .12 0s0 .08-.06.1a2.81 2.81 0 0 1-1.06.54h-.15.43c.07.1 0 .15-.05.21a2.61 2.61 0 0 1-.92.33l.1.15a2.22 2.22 0 0 1-1.42.28.76.76 0 0 1 .16.06l.11.08s-.06.08-.09.09a1.47 1.47 0 0 1-1 0c-.22-.06-.43-.15-.65-.23 0 .12 0 .16-.19.17l.33.3c.12.11.11.14 0 .2.11.13.23.25.34.39a.67.67 0 0 1 .06.15l-.18.06h-.16a12.13 12.13 0 0 0 1.26 2.26c.18-.16.33-.29.49-.41a.44.44 0 0 1 .57-.05l.11-.23a5.24 5.24 0 0 1 1.22-1.47l.19-.17c.09-.09.15-.08.2 0l-.4 1.13a1.73 1.73 0 0 1 .32-.11l.73-.16h.08s.11 0 .12.06a.24.24 0 0 1 0 .14 8.52 8.52 0 0 0-1.39 1.55l-.44.61a.2.2 0 0 1-.32 0l-.12-.18v.05c0 .35-.3.5-.54.68a3.65 3.65 0 0 1-.31.24 1.46 1.46 0 0 1-.2.05.34.34 0 0 0-.12 0c-.33.21-.64.44-1 .62s-.88.43-1.35.66l.17.52c.06.17.14.33.2.49s0 .13 0 .14a.18.18 0 0 1-.16 0 1.86 1.86 0 0 1-.84-.36Zm-.69-6.1-.16.12c-.12.07-.12.16-.08.29s.18.56.27.84l.81 2.55h.2l1.37-.7c.07 0 .07-.08.07-.16a.58.58 0 0 1 0-.32.2.2 0 0 0 0-.2.65.65 0 0 0-.13-.16c-.29-.34-.6-.67-.88-1a1.54 1.54 0 0 0-.76-.62.26.26 0 0 1-.11-.07Zm-4.73 3.79a.41.41 0 0 0 .05-.09c.06-.17.11-.35.16-.52.11-.34.23-.67.34-1s.2-.64.31-1 .19-.6.29-.9c0-.08-.2-.31-.27-.3h-.06c-.15.13-.31.27-.47.39a1 1 0 0 1-.25.14 2 2 0 0 0-.45.27c-.43.48-.83 1-1.24 1.46 0 .05-.09.18-.06.22a.41.41 0 0 1 .06.37.11.11 0 0 0 .06.15l1.4.71Zm-7.48-14.91-.25-.51Zm20.82-.4-.21.4Z"/><path fill="#010101" d="m337.5 259.51-1.67-.2 1.18-9.59"/><path fill="#2baae2" d="m120.623 267.417 297.95.364-.137 112.35-297.95-.364z"/><path fill="#010101" d="m425.1 386.75-311.24-.36.14-125.63 311.23.35Zm-297.94-13.63 284.67.33.12-99.07-284.68-.33Z"/><path fill="#010101" d="m254.81 331.23-3-5.79v5.79h-5.06v-16.14h7.52a7.47 7.47 0 0 1 3.35.7 4.82 4.82 0 0 1 2.08 1.9 5.18 5.18 0 0 1 .7 2.7 4.81 4.81 0 0 1-.91 2.87 5 5 0 0 1-2.59 1.8l3.51 6.18zm-3.05-9.17h2a1.58 1.58 0 0 0 1.09-.33 1.57 1.57 0 0 0 0-2 1.46 1.46 0 0 0-1.08-.37h-2zm16.65-3.32a4.31 4.31 0 0 1 2.16-.51 4.89 4.89 0 0 1 2.71.79 5.31 5.31 0 0 1 1.9 2.28 8.36 8.36 0 0 1 .69 3.53 8.19 8.19 0 0 1-.7 3.52 5.29 5.29 0 0 1-1.9 2.27 4.84 4.84 0 0 1-2.72.79 4.3 4.3 0 0 1-2.15-.52 3.51 3.51 0 0 1-1.38-1.4v7.91H262v-19h5v1.75a3.51 3.51 0 0 1 1.41-1.41zm1.81 4.48a1.87 1.87 0 0 0-2.69 0 2.71 2.71 0 0 0 0 3.19 1.75 1.75 0 0 0 1.34.57 1.78 1.78 0 0 0 1.35-.56 2.72 2.72 0 0 0 0-3.2zm12.67 4.01-2.36 6.77h-3.19l1.08-6.77zm12.31-5.82v4.17h-10.62v-4.18z"/><path fill="#010101" d="M269.55 360.13a36.38 36.38 0 0 1 0-72.75 36.38 36.38 0 0 1 0 72.75Zm0-62.13a25.75 25.75 0 0 0 0 51.5 25.75 25.75 0 0 0 0-51.5ZM353.901 309.832l30.67.038-.086 70.22-30.67-.038zM131.21 281.91v-3.7h6v13h-4.14v-9.31zm8.79-2.21a5.47 5.47 0 0 1 8.05 0 9.5 9.5 0 0 1 0 9.68 5.46 5.46 0 0 1-8.05 0 8 8 0 0 1-1.3-4.85 8 8 0 0 1 1.3-4.83zm5.19 2.7a1.3 1.3 0 0 0-2.33 0 6.09 6.09 0 0 0-.29 2.14 6.22 6.22 0 0 0 .28 2.16 1.13 1.13 0 0 0 1.17.72 1.12 1.12 0 0 0 1.16-.72 8.25 8.25 0 0 0 0-4.3zm6.6-2.69a4.72 4.72 0 0 1 4-1.76 4.66 4.66 0 0 1 4 1.78 7.91 7.91 0 0 1 1.32 4.83 8 8 0 0 1-1.33 4.85 5.47 5.47 0 0 1-8.05 0 9.65 9.65 0 0 1 0-9.69zm5.19 2.7a1.3 1.3 0 0 0-2.33 0 5.86 5.86 0 0 0-.29 2.14 6.32 6.32 0 0 0 .28 2.17 1.13 1.13 0 0 0 1.17.72 1.12 1.12 0 0 0 1.16-.72 8.29 8.29 0 0 0 0-4.31zm6.59-2.69a5.48 5.48 0 0 1 8.05 0 7.91 7.91 0 0 1 1.32 4.83 8 8 0 0 1-1.33 4.85 5.45 5.45 0 0 1-8.05 0 9.65 9.65 0 0 1 0-9.69zm5.19 2.71a1.3 1.3 0 0 0-2.33 0 6.15 6.15 0 0 0-.29 2.15 6.22 6.22 0 0 0 .28 2.16 1.13 1.13 0 0 0 1.17.72 1.12 1.12 0 0 0 1.16-.72 8.25 8.25 0 0 0 0-4.3zm6.59-2.69a4.7 4.7 0 0 1 4-1.76 4.64 4.64 0 0 1 4 1.78 7.91 7.91 0 0 1 1.32 4.83 8 8 0 0 1-1.33 4.85 5.47 5.47 0 0 1-8 0 8 8 0 0 1-1.3-4.85 8 8 0 0 1 1.31-4.85zm5.19 2.7a1.3 1.3 0 0 0-2.33 0 6.09 6.09 0 0 0-.29 2.14 6.22 6.22 0 0 0 .28 2.16 1.13 1.13 0 0 0 1.17.72 1.11 1.11 0 0 0 1.16-.71 6.28 6.28 0 0 0 .29-2.17 6.13 6.13 0 0 0-.28-2.14zm6.59-2.69a5.46 5.46 0 0 1 8.05 0 7.91 7.91 0 0 1 1.32 4.83 8 8 0 0 1-1.33 4.85 5.45 5.45 0 0 1-8 0 9.65 9.65 0 0 1 0-9.69zm5.19 2.7a1.3 1.3 0 0 0-2.33 0 5.86 5.86 0 0 0-.29 2.14 6.28 6.28 0 0 0 .28 2.17 1.13 1.13 0 0 0 1.17.72 1.12 1.12 0 0 0 1.16-.72 8.29 8.29 0 0 0 0-4.31z"/><path fill="#010101" d="m383.994 332.009 34.51.042-.037 30.67-34.51-.042z"/><path d="M371.88 302.14c.07.21.13.4.19.6a.11.11 0 0 1 0 .08.15.15 0 0 1-.11 0 2 2 0 0 1-.76-.36h-.05v.47c0 .16 0 .19-.18.11s-.44-.26-.65-.4a1.58 1.58 0 0 1-.16-.14c0 .18 0 .35-.05.52s0 .16-.17.09a1.55 1.55 0 0 1-.71-.61 1.53 1.53 0 0 1-.87.67l-.07-.67a2.6 2.6 0 0 1-1 .61v-.65a2.53 2.53 0 0 1-1 .4l.25-.77a2 2 0 0 1-1.1.41l.45-1.23-.81-.35a9.68 9.68 0 0 1-1.48-.89c-.07 0-.11-.08-.21-.05s-.13-.05-.19-.09-.3-.22-.44-.34-.23-.23-.34-.35 0-.07 0-.1a1.28 1.28 0 0 0 0-.17l-.19.23a.14.14 0 0 1-.23 0c-.07-.09-.15-.18-.22-.28a12.49 12.49 0 0 0-1.39-1.69 1.71 1.71 0 0 0-.25-.22c-.09-.06-.1-.12 0-.21a4.79 4.79 0 0 1 1.22.28c-.12-.34-.23-.68-.36-1 0-.1 0-.16.07-.21a5.23 5.23 0 0 1 1.61 1.94c.3-.21.51 0 .73.17a3.76 3.76 0 0 1 .32.28 4.31 4.31 0 0 0 .68-1.07c.21-.37.4-.76.61-1.17h-.22c-.05 0-.13 0-.13-.05a.22.22 0 0 1 0-.16c.11-.13.23-.25.35-.38-.15-.11-.14-.11 0-.23l.29-.3c-.18 0-.17-.08-.17-.14-.3.09-.59.2-.88.27a1.24 1.24 0 0 1-.76-.06.2.2 0 0 1-.06-.11s.05-.05.08-.06l.26-.09a2.11 2.11 0 0 1-1.47-.24l.08-.16a2.45 2.45 0 0 1-.94-.35.32.32 0 0 1-.07-.13l.12-.05h.21c-.16-.06-.31-.09-.44-.15l-.76-.4c-.07 0-.15-.11 0-.21h.37a3.13 3.13 0 0 1-1-.68.39.39 0 0 1-.06-.13h.14c.23.06.46.14.69.21a1.16 1.16 0 0 0 .42.05l-.48-.16a2.93 2.93 0 0 1-1.38-1.05s0-.1 0-.14a.4.4 0 0 1 .16 0c.17.09.32.18.49.26a2.71 2.71 0 0 1-.9-.85 2.78 2.78 0 0 1-.24-.49s0-.09 0-.13.11 0 .13.06a1.87 1.87 0 0 0 .5.47.11.11 0 0 0 .08 0l-.17-.15a1.78 1.78 0 0 1-.65-1 .5.5 0 0 1 0-.21h.18c-.09-.19-.21-.4-.3-.61a2.41 2.41 0 0 1-.16-.45s0-.1.07-.19a1.17 1.17 0 0 1-.2-.76c.1 0 .13 0 .17.1a6.52 6.52 0 0 0 .5.55 2.26 2.26 0 0 1-.68-1.66c.1-.05.13 0 .17.09a2.56 2.56 0 0 0 .11.24.69.69 0 0 0 .11.13 3 3 0 0 1-.21-.49 8.39 8.39 0 0 1-.18-.84c0-.14 0-.16.18-.12 0-.12 0-.24-.05-.36a1.39 1.39 0 0 1 .06-.67c0-.09.05-.16.18-.06a1.31 1.31 0 0 1 0-.22c0-.25 0-.5.08-.75 0-.08.07-.13.15-.09v-.39a1.66 1.66 0 0 1 .16-.69s.06-.07.09-.06.07.05.08.08.09.29.15.44a1.8 1.8 0 0 1-.07-.38c0-.35.11-.69.17-1v-.1c0-.04.06-.15.16-.12l.16.62c0-.21 0-.43-.05-.64a1.56 1.56 0 0 1 .19-.95s.09 0 .13 0 .06 0 .07.08c.11.41.2.82.31 1.23a5.7 5.7 0 0 0 .74 1.53 6.27 6.27 0 0 0 1.18 1.34 8.18 8.18 0 0 0 2.25 1.31 4.17 4.17 0 0 1 1.66 1.07q.23.25.42.51a.32.32 0 0 0 .31.13.24.24 0 0 0 .23-.2.49.49 0 0 1 .09-.15h-.05c-.13-.13-.12-.19.05-.25l.15-.06c-.1-.1-.29-.15-.23-.32s.16-.08.24-.11a1.17 1.17 0 0 1-.12-.2.18.18 0 0 1 0-.12s.08 0 .12 0a.91.91 0 0 0 .23 0 .49.49 0 0 1-.28-.38c0-.08.05-.1.12-.07l.16.05a2.21 2.21 0 0 1-.11-.22.15.15 0 0 1 .17-.2.34.34 0 0 0 .27-.25.22.22 0 0 0-.23-.17c-.21 0-.42.05-.62.07a2.62 2.62 0 0 1-.56 0c-.14 0-.27-.21-.27-.35v-.09a.63.63 0 0 1 .29-.1 3.34 3.34 0 0 0 1.24-.21h-.11a2.74 2.74 0 0 0-1.14.15 1.14 1.14 0 0 0-.58.48.12.12 0 0 1-.1.07s0 0-.07-.08a.75.75 0 0 1 .39-1c.16-.09.33-.17.5-.25 0 0-.11-.07-.15-.11a.43.43 0 0 1-.06-.18s.1-.05.13-.06l-.05-.21h.23c0-.06-.06-.15 0-.18s.13 0 .19 0l.1.06v-.2c0-.06.08-.11.14-.05a1.47 1.47 0 0 1 .21.22l.2-.11a1.6 1.6 0 0 1 1-.12 1.81 1.81 0 0 0 1.28-.29c.06-.05.09-.12.15-.17a1.05 1.05 0 0 1 .11-.07s.07.08.07.12.05.28-.08.37v.47a.23.23 0 0 1-.15.28l-.11.06c.23.18.21.45.29.69a2.51 2.51 0 0 0 .28.57.33.33 0 0 0 .4.13c.1 0 .1 0 .15.09a.48.48 0 0 1-.44.2.31.31 0 0 0 .25.16.84.84 0 0 1 .14.06.71.71 0 0 1-.1.14s-.07 0-.13.07h.19a.16.16 0 0 1 .11 0 .14.14 0 0 1 0 .12.92.92 0 0 1-.14.14c.06.05.22 0 .19.19l-.31.15.35.2c0 .16-.17.08-.25.14a.68.68 0 0 0 .15.43 1.47 1.47 0 0 1 .14.4.37.37 0 0 0 .27.31.39.39 0 0 0 .27-.11 5.15 5.15 0 0 0 .43-.5 2.73 2.73 0 0 1 .88-.7c.37-.18.76-.34 1.14-.52a8 8 0 0 0 2-1.22 5.74 5.74 0 0 0 1-1.06 6.19 6.19 0 0 0 .94-1.89c.1-.35.17-.71.26-1.07v-.1c.12 0 .17 0 .22.11a1.87 1.87 0 0 1 .13 1.07v.51a5.36 5.36 0 0 0 .14-.54c0-.12.05-.16.17-.13a4.24 4.24 0 0 1 .22 1.41 1.06 1.06 0 0 1 0-.19c0-.05.05-.1.08-.11a.14.14 0 0 1 .11.07 2.42 2.42 0 0 1 .14.51 5 5 0 0 1 0 .55c.13 0 .17.06.18.18l.06.88h.1a1.83 1.83 0 0 1 .06 1.13h.16a2.8 2.8 0 0 1-.37 1.47.91.91 0 0 0 .11-.16 1.24 1.24 0 0 0 .1-.2c0-.06 0-.15.15-.11a2 2 0 0 1-.74 1.7l.7-.76a1.09 1.09 0 0 1-.21.85c.12.05.11.12.07.23a3.39 3.39 0 0 1-.45.94.45.45 0 0 0 0 .08l.07-.05s.09-.05.11 0 .07.08.06.11a2.37 2.37 0 0 1-.18.53 2.27 2.27 0 0 1-.66.75 1.49 1.49 0 0 0 .54-.43s0-.07.06-.09a.16.16 0 0 1 .12 0s0 .07 0 .09a2.28 2.28 0 0 1-.71 1 4.7 4.7 0 0 0-.43.35c.15-.08.3-.18.46-.25a.52.52 0 0 1 .18 0 1.09 1.09 0 0 1-.05.17 3 3 0 0 1-1.29 1c-.18.08-.38.13-.56.22.11 0 .23 0 .34-.06l.76-.23a.23.23 0 0 1 .14 0s0 .09 0 .12a2.55 2.55 0 0 1-.88.65h-.07a2.44 2.44 0 0 1 .26 0 .93.93 0 0 1 .13 0s0 .09-.06.11a2.9 2.9 0 0 1-1.07.53.34.34 0 0 0-.14 0h.39c.07.1 0 .15 0 .2a2.54 2.54 0 0 1-.93.33l.1.16a2.27 2.27 0 0 1-1.41.28l.16.05a.87.87 0 0 1 .11.09s-.06.08-.1.09a1.47 1.47 0 0 1-1 0l-.64-.24c0 .12 0 .17-.2.17l.33.31c.12.11.12.13 0 .19l.34.39a.39.39 0 0 1 .07.16l-.19.05h-.16a11.81 11.81 0 0 0 1.26 2.26c.18-.15.33-.29.49-.41a.45.45 0 0 1 .57-.05l.12-.23a5.17 5.17 0 0 1 1.21-1.47 1 1 0 0 0 .19-.17c.09-.09.15-.07.2 0l-.39 1.14.32-.11.73-.16h.09s.11 0 .11.06a.15.15 0 0 1 0 .14 8.57 8.57 0 0 0-1.38 1.56l-.45.6a.18.18 0 0 1-.31 0l-.13-.17c0 .36-.31.5-.54.68s-.21.17-.32.24a.59.59 0 0 1-.2.06h-.12c-.33.2-.64.43-1 .62s-.88.43-1.35.65c.06.16.11.35.18.53s.13.32.19.49 0 .12 0 .14a.29.29 0 0 1-.16 0 2 2 0 0 1-.84-.37Zm-.69-6.09-.15.11c-.13.07-.13.16-.08.29.09.28.17.56.26.84.27.85.54 1.7.82 2.55a1.33 1.33 0 0 0 .19 0l1.38-.7c.06 0 .07-.07.06-.15a.61.61 0 0 1 0-.33.16.16 0 0 0 0-.19 1.77 1.77 0 0 0-.12-.17c-.3-.34-.61-.66-.89-1a1.52 1.52 0 0 0-.75-.62.34.34 0 0 1-.12-.06Zm-4.72 3.78a.39.39 0 0 0 0-.09c.06-.17.11-.34.16-.51.11-.34.23-.68.34-1l.31-1c.1-.3.2-.61.29-.91 0-.07-.2-.31-.27-.29l-.48.39-.24.14a1.74 1.74 0 0 0-.46.27c-.42.47-.83 1-1.23 1.45a.3.3 0 0 0-.07.22.41.41 0 0 1 .06.38c0 .07 0 .11.06.14l1.4.71a.39.39 0 0 0 .13.1Zm-7.47-14.9-.26-.5Zm20.82-.41-.2.41Z"/><path fill="#010101" d="m368.56 347.01-1.67-.21 1.18-9.59"/></g></svg>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Bayar Virtual Account
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Bayar atau transfer ke virtual account dengan berbagai metode pembayaran.
            </p>
            <a href="javascript:void(0)" class="font-medium text-base text-body-color hover:text-primary" > Bayar Sekarang </a>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".2s">
            <div class=" w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10 " >
              <span class=" w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300 " ></span>
              <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path fill="#607d95" d="M23.5 17.5v10c0 1.1-.9 2-2 2h-11c-1.1 0-2-.9-2-2v-23c0-1.1.9-2 2-2h11c1.1 0 2 .9 2 2v13z"/><path fill="#90cff1" d="M8.5 6.5h15v18h-15z"/><path fill="#607d95" d="M21.3 19L20 17.7c-.2-.2-.5-.2-.7-.1l-1.2.8c-.4.3-1 .2-1.4-.1l-3.1-3.1c-.4-.4-.4-1-.1-1.4l.8-1.2c.1-.2.1-.5-.1-.7L13 10.7c-.2-.2-.6-.2-.8 0l-1.1 1.1c-.6.6-.8 1.4-.6 2.1.3 1.3 1 2.4 1.9 3.3l2.3 2.3c.9.9 2.1 1.6 3.3 1.9.8.2 1.6 0 2.1-.6l1.1-1.1c.4-.2.4-.5.1-.7z"/><path fill="#4b6c85" d="M20.5 20.6l.8-.8c.2-.2.2-.6 0-.8L20 17.7c-.2-.2-.5-.2-.7-.1l-1.1.7 2.3 2.3zM13.6 13.7l.7-1.1c.1-.2.1-.5-.1-.7L13 10.7c-.2-.2-.6-.2-.8 0l-.8.8 2.2 2.2z"/><path fill="#4b6c85" d="M18.9 20.8c-1.3-.3-2.5-1-3.4-1.9l-2.4-2.4c-.9-.9-1.6-2.1-1.9-3.4-.1-.5-.1-1.1.2-1.5l-.2.2c-.6.6-.8 1.4-.6 2.1.3 1.3 1 2.4 1.9 3.3l2.3 2.3c.9.9 2.1 1.6 3.3 1.9.8.2 1.6 0 2.1-.6l.3-.3c-.5.3-1 .4-1.6.3z"/><path fill="#40657c" d="M21.2 18.8c-.4.4-.9.4-1.3 0l-.9-.9-.7.4 2.2 2.2.8-.8c.2-.2.2-.6 0-.8l-.1-.1zM14.2 11.8c-.3.4-.8.5-1.2.1l-1-1-.6.6 2.2 2.2.7-1.1c.1-.2.1-.5-.1-.7v-.1z"/><path fill="#4b6c85" d="M11 5c-.3 0-.5-.2-.5-.5 0-1.1.9-2 2-2h-2c-1.1 0-2 .9-2 2v2h15V5H11z"/><path fill="#70b7e6" d="M8.5 6.5h2v18h-2z"/><path fill="#4b6c85" d="M23.5 26v-1.5h-15v3c0 1.1.9 2 2 2h2c-1.1 0-2-.9-2-2V27c0-.6.4-1 1-1h12z"/><path fill="#004463" d="M17.5 5h-3c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h3c.3 0 .5.2.5.5s-.2.5-.5.5zM10.5 5h-.2c-.1 0-.1-.1-.2-.1s-.1-.1-.1-.2v-.2c0-.1 0-.3.1-.4 0 0 .1-.1.2-.1h.4c.1 0 .1.1.2.1 0 .1.1.3.1.4 0 .1-.1.3-.2.3 0 0-.1.1-.2.1 0 .1 0 .1-.1.1zM23 7H9c-.3 0-.5-.2-.5-.5S8.7 6 9 6h14c.3 0 .5.2.5.5s-.2.5-.5.5zM23 25H9c-.3 0-.5-.2-.5-.5s.2-.5.5-.5h14c.3 0 .5.2.5.5s-.2.5-.5.5z"/><path fill="#004463" d="M21.5 30h-11C9.1 30 8 28.9 8 27.5v-23C8 3.1 9.1 2 10.5 2h11C22.9 2 24 3.1 24 4.5v23c0 1.4-1.1 2.5-2.5 2.5zm-11-27C9.7 3 9 3.7 9 4.5v23c0 .8.7 1.5 1.5 1.5h11c.8 0 1.5-.7 1.5-1.5v-23c0-.8-.7-1.5-1.5-1.5h-11z"/><path fill="#004463" d="M17.5 28h-3c-.3 0-.5-.2-.5-.5v-1c0-.3.2-.5.5-.5h3c.3 0 .5.2.5.5v1c0 .3-.2.5-.5.5zM15 27h2-2zM18.7 22c-.2 0-.4 0-.7-.1-1.4-.3-2.6-1-3.6-2l-2.3-2.3c-1-1-1.7-2.2-2-3.6-.2-.9 0-1.9.7-2.6l1.1-1.1c.4-.4 1.1-.4 1.5 0l1.3 1.3c.4.4.4.9.1 1.3l-.8 1.2c-.2.2-.1.6.1.8l3.1 3.1c.2.2.5.2.8.1l1.2-.8c.4-.3 1-.2 1.3.1l1.3 1.3c.2.2.3.5.3.7 0 .3-.1.6-.3.8l-1.1 1.1c-.6.4-1.3.7-2 .7zm-6-11l-1.2 1.1c-.4.4-.6 1.1-.5 1.7.3 1.2.9 2.3 1.8 3.1l2.3 2.3c.9.9 1.9 1.5 3.1 1.8.6.2 1.2 0 1.6-.5l1.1-1.1-1.3-1.3-1.3.8c-.6.4-1.5.3-2-.2l-3.1-3.1c-.5-.5-.6-1.4-.2-2l.8-1.2-1.1-1.4z"/><path fill="#004463" d="M13.6 14.1c-.1 0-.3 0-.4-.1l-2-2c-.2-.2-.2-.5 0-.7.2-.2.5-.2.7 0l2 2c.2.2.2.5 0 .7 0 .1-.1.1-.3.1zM20.3 20.9c-.1 0-.3 0-.4-.1l-2-2c-.2-.2-.2-.5 0-.7s.5-.2.7 0l2 2c.2.2.2.5 0 .7 0 0-.1.1-.3.1zM16.3 14.3c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4M21.3 16.7h-.1c-.3-.1-.4-.3-.4-.6.4-1.4 0-2.9-1-3.9s-2.5-1.4-3.9-1c-.3.1-.5-.1-.6-.4-.1-.3.1-.5.4-.6 1.7-.5 3.6 0 4.8 1.3 1.3 1.3 1.8 3.1 1.3 4.8 0 .2-.2.4-.5.4z"/><path fill="#004463" d="M19.4 16.1h-.1c-.3-.1-.4-.3-.4-.6.2-.7 0-1.4-.5-1.9s-1.2-.7-1.9-.5c-.3.1-.5-.1-.6-.4-.1-.3.1-.5.4-.6 1-.3 2.1 0 2.9.8.8.8 1.1 1.9.8 2.9-.2.2-.4.3-.6.3z"/></svg>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Beli Pulsa & Kuota
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Habis Kuota? Beli kuota dan pulsa disini. Harga dijamin terjangkau. Bisa semua operator.
            </p>
            <a href="javascript:void(0)" class="font-medium text-base text-body-color hover:text-primary" > Isi Sekarang </a>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap -mx-4">
        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".1s">
            <div class=" w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10 " >
              <span class=" w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300 " ></span>
              <svg width="35" height="35" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <path d="M44.9313 11.7H38.9188C40.5438 10.9687 41.7626 9.99374 42.2501 8.69374C42.9001 6.98749 42.2501 5.19999 40.3001 3.33124C38.1876 1.29999 35.9938 0.568738 33.8001 1.13749C29.9813 2.11249 27.4626 7.06874 26.2438 9.99374C25.1063 7.06874 22.5876 2.11249 18.6876 1.13749C16.4938 0.568738 14.3001 1.29999 12.1876 3.33124C10.2376 5.19999 9.5876 6.98749 10.2376 8.69374C10.7251 9.99374 12.0251 10.9687 13.5688 11.7H7.06885C5.0376 11.7 3.4126 13.325 3.4126 15.3562V21.5312C3.4126 23.5625 5.0376 25.1875 7.06885 25.1875H7.71885V46.2312C7.71885 48.8312 9.83135 51.025 12.5126 51.025H40.1376C42.7376 51.025 44.9313 48.9125 44.9313 46.2312V25.1875C46.9626 25.1875 48.5876 23.5625 48.5876 21.5312V15.3562C48.5063 13.325 46.8813 11.7 44.9313 11.7ZM34.5313 3.98124C34.7751 3.89999 35.0188 3.89999 35.1813 3.89999C36.1563 3.89999 37.2126 4.38749 38.2688 5.52499C38.7563 6.01249 39.8126 7.06874 39.5688 7.79999C39.0001 9.34374 33.9626 10.6437 28.9251 11.05C30.0626 8.36874 32.1751 4.54999 34.5313 3.98124ZM13.0001 7.71874C12.7563 6.98749 13.8126 5.93124 14.3001 5.44374C15.4376 4.38749 16.4126 3.81874 17.3876 3.81874C17.6313 3.81874 17.8751 3.81874 18.0376 3.89999C20.4751 4.54999 22.5063 8.28749 23.6438 10.9687C18.6063 10.5625 13.5688 9.26249 13.0001 7.71874ZM42.0063 46.2312C42.0063 47.2875 41.1126 48.1812 40.0563 48.1812H12.4313C11.3751 48.1812 10.4813 47.2875 10.4813 46.2312V25.1875H41.9251V46.2312H42.0063ZM45.6626 21.5312C45.6626 22.0187 45.3376 22.3437 44.8501 22.3437H7.06885C6.6626 22.3437 6.25635 22.0187 6.25635 21.5312V15.3562C6.25635 14.95 6.6626 14.5437 7.06885 14.5437H44.8501C45.2563 14.5437 45.6626 14.8687 45.6626 15.3562V21.5312Z" fill="white" />
              </svg>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Lisensi Digital
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Dapatkan Lisensi digital software ternama seperti MS. Office dengan harga murah.
            </p>
            <a href="javascript:void(0)" class="font-medium text-base text-body-color hover:text-primary" > Beli Sekarang </a>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".15s" >
            <div class=" w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10 " >
              <span class=" w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300 " ></span>
              <svg width="35" height="35" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <path d="M49.8062 23.3187L43.875 17.3875C43.3063 16.8187 42.4125 16.8187 41.8438 17.3875C41.275 17.9562 41.275 18.85 41.8438 19.4187L46.9625 24.6187H27.4625V4.87498L32.5812 10.075C33.15 10.6437 34.0437 10.6437 34.6125 10.075C35.1812 9.50623 35.1812 8.61248 34.6125 8.04373L28.6812 2.11248C27.95 1.38123 26.975 0.974976 26 0.974976C24.9438 0.974976 24.05 1.38123 23.3188 2.11248L17.3875 8.04373C16.8187 8.61248 16.8187 9.50623 17.3875 10.075C17.6312 10.3187 18.0375 10.4812 18.3625 10.4812C18.6875 10.4812 19.0937 10.3187 19.3375 10.075L24.6187 4.87498V24.5375H4.95625L10.075 19.3375C10.6437 18.7687 10.6437 17.875 10.075 17.3062C9.50625 16.7375 8.6125 16.7375 8.04375 17.3062L2.1125 23.2375C0.65 24.7 0.65 27.1375 2.1125 28.6L8.04375 34.5312C8.2875 34.775 8.69375 34.9375 9.01875 34.9375C9.34375 34.9375 9.75 34.775 9.99375 34.5312C10.5625 33.9625 10.5625 33.0687 9.99375 32.5L4.79375 27.3H24.4563V47.125L19.2563 41.925C18.6875 41.3562 17.7938 41.3562 17.225 41.925C16.6563 42.4937 16.6563 43.3875 17.225 43.9562L23.1562 49.8875C23.8875 50.6187 24.8625 51.025 25.8375 51.025C26.8937 51.025 27.7875 50.6187 28.5187 49.8875L34.45 43.9562C35.0188 43.3875 35.0188 42.4937 34.45 41.925C33.8813 41.3562 32.9875 41.3562 32.4188 41.925L27.4625 47.125V27.3812H47.0438L41.8438 32.5812C41.275 33.15 41.275 34.0437 41.8438 34.6125C42.0875 34.8562 42.4938 35.0187 42.8188 35.0187C43.1438 35.0187 43.55 34.8562 43.7938 34.6125L49.725 28.6812C51.2688 27.2187 51.2687 24.7812 49.8062 23.3187Z" fill="white" />
              </svg>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Langganan Berbayar
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Suka streaming? Beli paket langganan Netflix dan yang lainnya disini.
            </p>
            <a href="javascript:void(0)" class="font-medium text-base text-body-color hover:text-primary" > Beli Sekarang </a>
          </div>
        </div>
        <div class="w-full md:w-1/2 lg:w-1/3 px-4">
          <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".2s">
            <div class=" w-[70px] h-[70px] flex items-center justify-center bg-primary rounded-2xl mb-8 relative z-10 " >
              <span class=" w-[70px] h-[70px] flex items-center justify-center bg-primary bg-opacity-20 rounded-2xl mb-8 absolute z-[-1] top-0 left-0 rotate-[25deg] group-hover:rotate-45 duration-300 " ></span>
              <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <path d="M10.7734 14.3281H3.82813C2.07813 14.3281 0.65625 12.9062 0.65625 11.1562V4.21094C0.65625 2.46094 2.07813 1.03906 3.82813 1.03906H10.7734C12.5234 1.03906 13.9453 2.46094 13.9453 4.21094V11.1562C13.9453 12.9062 12.5234 14.3281 10.7734 14.3281ZM3.82813 2.95312C3.17188 2.95312 2.57031 3.5 2.57031 4.21094V11.1562C2.57031 11.8125 3.11719 12.4141 3.82813 12.4141H10.7734C11.4297 12.4141 12.0313 11.8672 12.0313 11.1562V4.21094C12.0313 3.55469 11.4844 2.95312 10.7734 2.95312H3.82813Z" fill="white" />
                <path d="M31.1719 14.3281H24.2266C22.4766 14.3281 21.0547 12.9062 21.0547 11.1562V4.21094C21.0547 2.46094 22.4766 1.03906 24.2266 1.03906H31.1719C32.9219 1.03906 34.3438 2.46094 34.3438 4.21094V11.1562C34.3438 12.9062 32.9219 14.3281 31.1719 14.3281ZM24.2266 2.95312C23.5703 2.95312 22.9688 3.5 22.9688 4.21094V11.1562C22.9688 11.8125 23.5156 12.4141 24.2266 12.4141H31.1719C31.8281 12.4141 32.4297 11.8672 32.4297 11.1562V4.21094C32.4297 3.55469 31.8828 2.95312 31.1719 2.95312H24.2266Z" fill="white" />
                <path d="M10.7734 33.9609H3.82813C2.07813 33.9609 0.65625 32.5391 0.65625 30.7891V23.8438C0.65625 22.0938 2.07813 20.6719 3.82813 20.6719H10.7734C12.5234 20.6719 13.9453 22.0938 13.9453 23.8438V30.7891C13.9453 32.5391 12.5234 33.9609 10.7734 33.9609ZM3.82813 22.5859C3.17188 22.5859 2.57031 23.1328 2.57031 23.8438V30.7891C2.57031 31.4453 3.11719 32.0469 3.82813 32.0469H10.7734C11.4297 32.0469 12.0313 31.5 12.0313 30.7891V23.8438C12.0313 23.1875 11.4844 22.5859 10.7734 22.5859H3.82813Z" fill="white" />
                <path d="M31.1719 33.9609H24.2266C22.4766 33.9609 21.0547 32.5391 21.0547 30.7891V23.8438C21.0547 22.0938 22.4766 20.6719 24.2266 20.6719H31.1719C32.9219 20.6719 34.3438 22.0938 34.3438 23.8438V30.7891C34.3438 32.5391 32.9219 33.9609 31.1719 33.9609ZM24.2266 22.5859C23.5703 22.5859 22.9688 23.1328 22.9688 23.8438V30.7891C22.9688 31.4453 23.5156 32.0469 24.2266 32.0469H31.1719C31.8281 32.0469 32.4297 31.5 32.4297 30.7891V23.8438C32.4297 23.1875 31.8828 22.5859 31.1719 22.5859H24.2266Z" fill="white" />
              </svg>
            </div>
            <h4 class="font-bold text-xl text-dark mb-3">
              Jasa Sosial Media
            </h4>
            <p class="text-body-color mb-8 lg:mb-11">
              Lagi bangun karir jadi konten digital? Butuh Follower dan subscriber biar meyakinkan? Cek produk kami.
            </p>
            <a href="javascript:void(0)" class="font-medium text-base text-body-color hover:text-primary" > Beli Sekarang </a>
          </div>
        </div>
      </div>
    </div>
</section>
@include('layouts.faq')
@endsection