{{-- extends page layout  --}}
@extends('layouts.sublayout.page')
{{-- Add the title to tab title  --}}
@section('title','Jasa Sosial Media')
{{-- Add the title to the banner title  --}}
@section('page_title','Jasa Sosial Media')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative">
        {{-- START: Grid Product Display  --}}
        <div class="container px-4 py-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                  <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
                    <h2 class=" font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4 " > Instagram </h2>
                    <p class=" text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color " > 
                        Temukan berbagai jasa sosial media untuk instagram
                    </p>
                  </div>
                </div>
              </div>
              <div class="flex flex-wrap -mx-4">
                <div class="px-4 py-6" id="price_table_container">
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            Insta Follower
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Follower Instagram Global 
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 4.000
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 Follower
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href='{{ route('jasa-sosmed-checkout',['instagram','INSTA-FOLL-RANDOM']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Follower Random Worldwide
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Privasi aman
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses 30 Menit (jika tidak overload)
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Permanen
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Follower dilebihkan (antisipasi drop)
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Hanya butuh username Instagram (jangan di private)
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            Insta Follower Lokal
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Follower Instagram Lokal Indonesia
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 4.100
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 Follower
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['instagram','INSTA-FOLL-LOKAL']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Akun Aktif Real Indonesia
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses 30 Menit (jika sistem tidak overload)
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Hanya Butuh nama akun
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Privasi Aman
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Akun aktif
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="16" height="16" viewBox="0 0 256 256" xml:space="preserve">
                                    <defs></defs>
                                    <g transform="translate(128 128) scale(0.72 0.72)" style="">
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(-175.05 -175.05000000000004) scale(3.89 3.89)" >
                                        <path d="M 13.4 88.492 L 1.508 76.6 c -2.011 -2.011 -2.011 -5.271 0 -7.282 L 69.318 1.508 c 2.011 -2.011 5.271 -2.011 7.282 0 L 88.492 13.4 c 2.011 2.011 2.011 5.271 0 7.282 L 20.682 88.492 C 18.671 90.503 15.411 90.503 13.4 88.492 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 69.318 88.492 L 1.508 20.682 c -2.011 -2.011 -2.011 -5.271 0 -7.282 L 13.4 1.508 c 2.011 -2.011 5.271 -2.011 7.282 0 l 67.809 67.809 c 2.011 2.011 2.011 5.271 0 7.282 L 76.6 88.492 C 74.589 90.503 71.329 90.503 69.318 88.492 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(236,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        </g>
                                    </g>
                                </svg>
                                <div style="padding-left: 5px">
                                    Follower bayaran bisa unfollow
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            Insta View
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            View Instagram untuk IGTV, Reels, Feed
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 400
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 View
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['instagram','INSTA-VIEW-LOKAL']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Permanen
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Bisa untuk view IGTV, Reels ataupun Feed Postingan
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses 30 menit (jika tidak overload)
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Hanya Butuh Link Postingan (bukan akun private)
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Fast Response dibawah pukul 20.00 WIB
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            Insta Like Lokal
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Like Instagram Lokal Indonesia
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 3.500
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 Likes
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['instagram','INSTA-LIKE-LOKAL']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Like akun real Indonesia
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Bisa Buat IGTV, reels ataupun Feed Postingan
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Hanya butuh Link Postingan
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Akun Aktif
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative px-4 w-full" style="padding: 20px 1rem">
                    <div class="max-w-lg overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                        <div class="px-6 py-8 bg-white lg:p-12 card-text-container">
                            <h3 class="text-2xl font-bold sm:text-3xl pt-2 pb-4">Instagram Custom Comment</h3>
                            <p class="text-base text-gray-500 pb-4">
                                Ingin menambah kepercayaan konsumen terhadap barang yang kita jual di Instagram? atau biar lebih populer? BeliDigi menghadirkan jasa kustom komentar. 
                            </p>
                            <div>
                                <div class="flex items-center">
                                    <h4 class="text-sm font-semibold tracking-wide uppercase whats-text">Apa saja kelebihannya?</h4>
                                    <div id="line-decor"></div>
                                </div>
                                <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                    <li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Hanya butuh link postingan/IGTV/Reels</p>
                                    </li>
                                    <li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Proses Cepat</p>
                                    </li><li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Akun Indonesia</p>
                                    </li>
                                    <li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Harga Murah</p>
                                    </li>
                                    <li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Prosesnya Aman</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-container relative px-6 py-8 text-center lg:p-12">
                            <div class="pricy-placeholder">
                                <div class="font-bold" style="width: 100%">
                                    <span style="font-size: 1rem; font-weight: lighter">Mulai dari</span>
                                </div>
                                <div class="font-bold" style="width: 100%">
                                    <span style="font-size: 2rem">Rp. 10.000</span><br><span style="font-size: 1rem; font-weight: lighter">per 5 Komentar</span>
                                </div>
                                <div>
                                    <div class="rounded-md shadow py-2">
                                        <button id="access-btn" onclick="window.location.href = '{{ route('jasa-sosmed-checkout',['instagram','INSTA-COM-CUSTOM']) }}'">Beli Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                  <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]" style="padding-top: 90px">
                    <h2 class=" font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4 " > Youtube </h2>
                    <p class=" text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color " > 
                        Kembangkan Channel-mu agar Terkenal
                    </p>
                  </div>
                </div>
              </div>
        
              <div class="flex flex-wrap -mx-4">
                <div class="px-4 py-6" id="price_table_container">
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            YT Subscriber
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Subscriber Youtube Random 
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 7.600
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 20 Subscriber
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href='{{ route('jasa-sosmed-checkout',['youtube','YT-SUBS-RANDOM']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Subscriber Random Worldwide
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Privasi aman
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses 30 Menit (jika tidak overload)
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Permanen
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Aman untuk monetisasi
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Hanya butuh link Channel Youtube
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Speed 30 - 50 Subs Per hari
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            YT Likes
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Likes Video Youtube
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 2.000
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 Likes
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['youtube','YT-LIKES']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Non Drop
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses Cepat
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Hanya Butuh Link Video
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Klaim Garansi Mudah
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Bonus Like (jika beruntung)
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            YT Comments
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Kustom Komentar Untuk Youtube
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 5.000
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 10 Komentar
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['youtube','YT-COM-CUSTOM']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Permanen
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses Cepat
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Hanya Butuh Link Video
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Tulis Komentar suka-suka
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Fast Response dibawah pukul 20.00 WIB
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            YT Views
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Tayangan / Views untuk Video Youtube
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 4.000
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 200 Views
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['youtube','YT-VIEWS-RANDOM']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Non Drop
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses Bertahap
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Hanya butuh Link Video
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Garansi refill jika drop dibawah orderan
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                  <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]" style="padding-top: 90px">
                    <h2 class=" font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4 " > Tiktok </h2>
                    <p class=" text-lg sm:text-xl leading-relaxed sm:leading-relaxed text-body-color " > 
                        Raih kepopuleran dengan mudah di Tiktok dengan jasa sosmed
                    </p>
                  </div>
                </div>
              </div>
        
              <div class="flex flex-wrap -mx-4">
                <div class="px-4 py-6" id="price_table_container">
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            TikTok Follower
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Follower Tiktok Global 
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 9.000
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 Follower
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href='{{ route('jasa-sosmed-checkout',['tiktok','TIKTOK-FOLL-RANDOM']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Follower Random Worldwide
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Privasi aman
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses Kilat
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Akun Aktif Real Indonesia
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Hanya butuh username Tiktok (jangan di private)
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Bergaransi
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            TikTok Likes
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Like postingan TikTok
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 4.500
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 Likes
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['tiktok','TIKTOK-LIKES-LOKAL']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Akun Aktif Real Indonesia
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses cepat (10.000 like/3 jam)
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Privasi Aman
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Hanya Butuh nama akun
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Bergaransi
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            TikTok View
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            View Postingan TikTok
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 4.500
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 3000 View
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['tiktok','TIKTOK-VIEW-RANDOM']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Permanen
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses Cepat (1.000.000 Views / 3 jam)
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Penonton Asli
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Hanya Butuh Link Postingan
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Bergaransi
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Ada Bonus View (jika beruntung)
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="shadow-lg rounded-2xl w-64 bg-white  p-4 priceCardEffect">
                        <p class="text-black  text-3xl font-bold">
                            TikTok Share Indo
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Share Postingan TikTok Lokal
                        </p>
                        <p class="text-black   text-3xl font-bold">
                            Rp. 4.000
                        </p>
                        <p class="text-gray-500  text-sm mb-4">
                            Per 100 Shares
                        </p>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href= '{{ route('jasa-sosmed-checkout',['tiktok','TIKTOK-SHARE-LOKAL']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                                Beli Sekarang
                            </button>
                        </div>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Di Share oleh akun FYP Indonesia
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Proses Cepat (10.000 shares / 12 jam)
                            </li>
                            <li class="mb-3 flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                    <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                                </svg>
                                Hanya butuh Link Postingan
                            </li>
                        </ul>
                        <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                        </span>
                        <ul class="text-sm text-black  w-full mt-6 mb-6">
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Akun Real Indonesia
                                </div>
                            </li>
                            <li class="mb-3 flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                    <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                                </svg>
                                <div style="padding-left: 5px">
                                    Bergaransi  
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative px-4 w-full" style="padding: 20px 1rem">
                    <div class="max-w-lg overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                        <div class="px-6 py-8 bg-white lg:p-12 card-text-container">
                            <h3 class="text-2xl font-bold sm:text-3xl pt-2 pb-4">TikTok Custom Comment</h3>
                            <p class="text-base text-gray-500 pb-4">
                                Layanan ini untuk menambah komentar di Video kamu agar terlihat Organik dan Viral, Tentu menggunakan akun dengan nama pengguna ASLI INDONESIA dengan komentar yang berhubungan dengan konten yang kamu buat alias tidak acak.
                            </p>
                            <div>
                                <div class="flex items-center">
                                    <h4 class="text-sm font-semibold tracking-wide uppercase whats-text">Apa saja kelebihannya?</h4>
                                    <div id="line-decor"></div>
                                </div>
                                <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                    <li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Hanya butuh link postingan</p>
                                    </li>
                                    <li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Proses Cepat</p>
                                    </li><li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Akun Indonesia</p>
                                    </li>
                                    <li class="flex" style="padding-top: 10px">
                                        <div>
                                            <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Sesuai Konten</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-container relative px-6 py-8 text-center lg:p-12">
                            <div class="pricy-placeholder">
                                <div class="font-bold" style="width: 100%">
                                    <span style="font-size: 1rem; font-weight: lighter">Mulai dari</span>
                                </div>
                                <div class="font-bold" style="width: 100%">
                                    <span style="font-size: 2rem">Rp. 3.500</span><br><span style="font-size: 1rem; font-weight: lighter">per Komentar</span>
                                </div>
                                <div>
                                    <div class="rounded-md shadow py-2">
                                        <button id="access-btn" onclick="window.location.href = '{{ route('jasa-sosmed-checkout',['tiktok','TIKTOK-COM-CUSTOM']) }}'">Beli Sekarang</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- END: Grid Product Display  --}}
    </section>
@endsection
