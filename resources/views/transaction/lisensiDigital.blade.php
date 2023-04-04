{{-- extends page layout  --}}
@extends('layouts.sublayout.page')
{{-- Add the title to tab title  --}}
@section('title','Beli Lisensi Digital')
{{-- Add the title to the banner title  --}}
@section('page_title','Beli Lisensi Digital')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative">
        <div class="container px-4 py-4">
            {{-- START: Grid Product Display  --}}
            <div class="px-4 py-6" id="price_table_container">
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black  text-3xl font-bold">
                        Windows 10 Pro
                    </p>
                    <p class="text-gray-50 text-sm mb-4">
                        Lisensi OS Windows 10 Professional
                    </p>
                    <p class="text-black text-3xl font-bold">
                        Rp. 35.000
                    </p>
                    <p class="text-gray-50 text-sm mb-4">
                        Per Lisensi
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href='{{ route('lisensi-digital-checkout',['W10P']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Lisensi Resmi dari Microsoft
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            25-digit Kode Aktifasi
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Gratis Office 365 Student
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Untuk 1 Perangkat
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Tutorial Instalasi 
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Dijamin Aman Tanpa Virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black text-3xl font-bold">
                        Windows 10 Home
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Lisensi OS Windows 10 Home
                    </p>
                    <p class="text-black text-3xl font-bold">
                        Rp. 30.000
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Per Lisensi
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href= '{{ route('lisensi-digital-checkout',['W10H']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Lisensi Resmi dari Microsoft
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            25-digit Kode Aktifasi
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Gratis Office 365 Student
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Untuk 1 Perangkat
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Tutorial Instalasi
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Dijamin aman tanpa virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black  text-3xl font-bold">
                        Windows 11 Pro
                    </p>
                    <p class="text-gray-500  text-sm mb-4">
                        Lisensi OS Windows 11 Professional
                    </p>
                    <p class="text-black   text-3xl font-bold">
                        Rp. 40.000
                    </p>
                    <p class="text-gray-500  text-sm mb-4">
                        Per Lisensi
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href= '{{ route('lisensi-digital-checkout',['W11P']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Lisensi Resmi dari Microsoft
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            25-digit Kode Aktifasi
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Gratis Office 365 Student
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Untuk 1 Perangkat
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Tutorial Instalasi 
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Dijamin Aman Tanpa Virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black text-3xl font-bold">
                        MS Office 2021
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Akun MS Office 2021
                    </p>
                    <p class="text-black text-3xl font-bold">
                        Rp. 43.000
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Per Akun
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href= '{{ route('lisensi-digital-checkout',['MSO21']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Kustom Username
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Maksimal 5 Device
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Gratis 5TB One Drive
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Tutorial Instalasi
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bukan Bajakan, aman dari virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black text-3xl font-bold">
                        Google Drive
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Akun Google Drive Unlimited
                    </p>
                    <p class="text-black text-3xl font-bold">
                        Rp. 25.000
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Per Akun
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href= '{{ route('lisensi-digital-checkout',['GDU']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Penyimpanan Tanpa Batas
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Kustom Email
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bisa pindah device
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Akun privat bukan Sharing
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Akun dikirimkan melalui email
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Password bisa diganti
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Garansi (selama tidak mengupload file yang tak pantas)
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black  text-3xl font-bold">
                        MS Office 365
                    </p>
                    <p class="text-gray-500  text-sm mb-4">
                        Akun MS Office 365
                    </p>
                    <p class="text-black   text-3xl font-bold">
                        Rp. 25.000
                    </p>
                    <p class="text-gray-500  text-sm mb-4">
                        Per Akun
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href= '{{ route('lisensi-digital-checkout',['MSO365']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Kustom Username
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Maksimal 5 Device
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Gratis 5TB One Drive
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Tutorial Instalasi
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bukan Bajakan, aman dari virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black text-3xl font-bold">
                        Adobe
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Akun Adobe Creative Cloud
                    </p>
                    <p class="text-black text-3xl font-bold">
                        Rp. 2.500.000
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Per Akun
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href= '{{ route('lisensi-digital-checkout',['ACC']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Adobe Family Komplit
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bukan Bajakan, Asli Adobe
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Masa Akun 1 Tahun
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Bisa Pindah Device
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bukan akun Sharing, private account
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Gratis Support
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white p-4 priceCardEffect">
                    <p class="text-black text-3xl font-bold">
                        IDM
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Lisensi Internet Dowload Manager
                    </p>
                    <p class="text-black text-3xl font-bold">
                        Rp. 125.000
                    </p>
                    <p class="text-gray-500 text-sm mb-4">
                        Per lisensi
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href= '{{ route('lisensi-digital-checkout',['IDM']) }}'" class="w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white card-button" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Lisensi Original
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            Untuk 1 Device
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z"></path>
                            </svg>
                            1 Tahun masa pakai
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2"></span>
                    <ul class="text-sm text-black  w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bukan Bajakan
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z"></path>
                            </svg>
                            <div style="padding-left: 5px">
                                Gratis Support
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            {{-- END: Grid Product Display  --}}
        </div>
    </section>
@endsection