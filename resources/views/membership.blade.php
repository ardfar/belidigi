@extends('layouts.sublayout.page')
@section('title','Membership - Belidigi')
@section('page_title','Membership')
@section('page_content')
<section id="pricing" class="bg-white pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                    Status Keanggotaan
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl md:text-[40px] text-dark mb-4">
                    Membership
                    </h2>
                    <p class="text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color">
                    Belidigi memiliki sistem Membership yang menguntungkan bagi pengguna Belidigi yang sudah teregistrasi. Status Keanggotaan bisa didapatkan dengan memperbanyak transaksi atau membeli digiPass untuk upgrade membership secara instan.
                    </p>
                </div>
            </div>
        </div>
            <div class="flex flex-wrap items-center justify-center">
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-10 text-center wow fadeInUp" data-wow-delay=".15s">
                        <span class="text-dark font-medium text-base uppercase block mb-2">
                            PENDATANG
                        </span>
                        <p class="text-gray-50 text-sm mb-4">
                            Hanya dengan registrasi dan verifikasi dasar
                        </p>
                        <h2 class="font-semibold text-primary mb-9 text-[28px]">
                            Rp. 0
                            <br>
                            <span class="text-base">
                                seumur hidup
                            </span>
                        </h2>
                        <div class="mb-10">
                                <p class="text-base font-medium text-body-color leading-loose mb-1">
                                    <b>Kamu mendapatkan:</b>
                                </p>
                                <p class="text-base font-medium text-body-color leading-loose mb-1">
                                Biaya admin Rp. 500 untuk transfer antar bank
                                </p>
                                <p class="text-base font-medium text-body-color leading-loose mb-1">
                                Limit transaksi Rp. 1.000.000 per hari
                                </p>
                        </div>
                        <div class="w-full">
                            @if (Auth::check())
                                <a href="javascript:void(0)" class="inline-block text-base font-medium text-primary bg-transparent border border-[#D4DEFF] rounded-full text-center py-4 px-11 hover:text-white hover:bg-primary hover:border-primary transition duration-300 ease-in-out">
                                    Transaksi Sekarang
                                </a>
                            @else
                                <a href="javascript:void(0)" class="inline-block text-base font-medium text-primary bg-transparent border border-[#D4DEFF] rounded-full text-center py-4 px-11 hover:text-white hover:bg-primary hover:border-primary transition duration-300 ease-in-out">
                                Daftar Sekarang
                                </a>
                            @endif
                        </div>
                        <span class="absolute left-0 bottom-0 z-[-1] w-14 h-14 rounded-tr-full block bg-primary">
                        </span>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-primary bg-gradient-to-b from-primary to-[#179BEE] rounded-xl relative z-10 overflow-hidden shadow-pricing py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-10 text-center wow fadeInUp" data-wow-delay=".1s">
                        <span class="inline-block py-2 px-6 border border-white rounded-full text-base font-semibold text-primary bg-white uppercase mb-5">
                        THE BEST ONE
                        </span>
                        <span class="text-white font-medium text-base uppercase block mb-2">
                        JURAGAN
                        </span>
                        <p class="text-white text-sm mb-4">
                            Hanya dengan 150 kali dan verifikasi KTP atau bayar
                        </p>
                        <h2 class="font-semibold text-white mb-9 text-[28px]">
                            Rp. 98.000 
                            <br>
                            <span class="text-base">
                                per 3 bulan 
                                <br>
                                untuk menjadi JURAGAN secara instan
                            </span>
                        </h2>
                        <div class="mb-10">
                            <p class="text-base font-medium text-white leading-loose mb-1">
                                <b>Kelebihan:</b>
                            </p>
                            <p class="text-base font-medium text-white leading-loose mb-1">
                            Tanpa Biaya Admin
                            </p>
                            <p class="text-base font-medium text-white leading-loose mb-1">
                            Limit transaksi Rp. 10.000.000 per hari
                            </p>
                            <p class="text-base font-medium text-white leading-loose mb-1">
                            Pesanan diprioritaskan
                            </p>
                            <p class="text-base font-medium text-white leading-loose mb-1">
                            Customer service prioritas
                            </p>
                            <p class="text-base font-medium text-white leading-loose mb-1">
                            Harga produk lebih murah
                            </p>
                            <p class="text-base font-medium text-white leading-loose mb-1">
                            Bisa transaksi massal
                            </p>
                        </div>
                        <div class="w-full">
                            <a href="javascript:void(0)" class="inline-block text-base font-medium text-dark bg-white border border-white rounded-full text-center py-4 px-11 hover:text-white hover:bg-dark hover:border-dark transition duration-300 ease-in-out">
                            Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <div class="bg-white rounded-xl relative z-10 overflow-hidden border border-primary border-opacity-20 shadow-pricing py-10 px-8 sm:p-12 lg:py-10 lg:px-6 xl:p-12 mb-10 text-center wow fadeInUp" data-wow-delay=".15s">
                    <span class="text-dark font-medium text-base uppercase block mb-2">
                    WARGA TETAP
                    </span>
                    <p class="text-gray-50 text-sm mb-4">
                        Hanya dengan 50 kali transaksi atau bayar
                    </p>
                    <h2 class="font-semibold text-primary mb-9 text-[28px]">
                        Rp. 50.000 
                        <br>
                        <span class="text-base">
                            per 3 bulan
                            <br>
                            untuk menjadi WARGA TETAP secara instan
                        </span>
                    </h2>
                    <div class="mb-10">
                            <p class="text-base font-medium text-body-color leading-loose mb-1">
                                <b>Kelebihan:</b>
                            </p>
                            <p class="text-base font-medium text-body-color leading-loose mb-1">
                            Tanpa Biaya Admin
                            </p>
                            <p class="text-base font-medium text-body-color leading-loose mb-1">
                            Limit transaksi Rp. 7.500.000 per hari
                            </p>
                            <p class="text-base font-medium text-body-color leading-loose mb-1">
                            Customer service prioritas
                            </p>
                    </div>
                    <div class="w-full">
                        <a href="javascript:void(0)" class="inline-block text-base font-medium text-primary bg-transparent border border-[#D4DEFF] rounded-full text-center py-4 px-11 hover:text-white hover:bg-primary hover:border-primary transition duration-300 ease-in-out">
                        Beli Sekarang
                        </a>
                    </div>
                    <span class="absolute right-0 top-0 z-[-1] w-14 h-14 rounded-bl-full block bg-secondary">
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection