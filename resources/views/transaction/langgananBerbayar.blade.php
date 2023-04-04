@extends('layouts.sublayout.page')
@section('title','Beli Akses Langganan Berbayar')
@section('page_title','Beli Akses Langganan Berbayar')
@section('page_content')
    <section class="py-20 md:py-[120px] relative">
        <div class="container px-4 py-4">
            <div class="px-4 py-6" id="price_table_container">
                <div class="shadow-lg rounded-2xl w-64 bg-white dark:bg-gray-800 p-4">
                    <p class="text-black dark:text-white text-3xl font-bold">
                        Spotify
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Akun Spotify Premium
                    </p>
                    <p class="text-black dark:text-white  text-3xl font-bold">
                        Rp. 9.000
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Per Bulan
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href='{{ route('lisensi-digital-checkout',['W10P']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Akun Private bukan Sharing
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Bisa Request Email
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Legal
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                    </span>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Berlaku Perpanjangan 
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Garansi
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white dark:bg-gray-800 p-4">
                    <p class="text-black dark:text-white text-3xl font-bold">
                        Youtube Premium
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Akun Youtube Premium 
                    </p>
                    <p class="text-black dark:text-white  text-3xl font-bold">
                        Rp. 15.000
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Per Bulan
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href='{{ route('lisensi-digital-checkout',['W10P']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Lisensi Resmi dari Microsoft
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            25-digit Kode Aktifasi
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Gratis Office 365 Student
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Untuk 1 Perangkat
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                    </span>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Tutorial Instalasi 
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Dijamin Aman Tanpa Virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white dark:bg-gray-800 p-4">
                    <p class="text-black dark:text-white text-3xl font-bold">
                        Windows 10 Pro
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Lisensi OS Windows 10 Professional
                    </p>
                    <p class="text-black dark:text-white  text-3xl font-bold">
                        Rp. 35.000
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Per Lisensi
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href='{{ route('lisensi-digital-checkout',['W10P']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Lisensi Resmi dari Microsoft
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            25-digit Kode Aktifasi
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Gratis Office 365 Student
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Untuk 1 Perangkat
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                    </span>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Tutorial Instalasi 
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Dijamin Aman Tanpa Virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white dark:bg-gray-800 p-4">
                    <p class="text-black dark:text-white text-3xl font-bold">
                        Windows 10 Pro
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Lisensi OS Windows 10 Professional
                    </p>
                    <p class="text-black dark:text-white  text-3xl font-bold">
                        Rp. 35.000
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Per Lisensi
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href='{{ route('lisensi-digital-checkout',['W10P']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Lisensi Resmi dari Microsoft
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            25-digit Kode Aktifasi
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Gratis Office 365 Student
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Untuk 1 Perangkat
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                    </span>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Tutorial Instalasi 
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Dijamin Aman Tanpa Virus
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="shadow-lg rounded-2xl w-64 bg-white dark:bg-gray-800 p-4">
                    <p class="text-black dark:text-white text-3xl font-bold">
                        Windows 10 Pro
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Lisensi OS Windows 10 Professional
                    </p>
                    <p class="text-black dark:text-white  text-3xl font-bold">
                        Rp. 35.000
                    </p>
                    <p class="text-gray-500 dark:text-gray-300 text-sm mb-4">
                        Per Lisensi
                    </p>
                    <div class="w-full flex justify-center py-5">
                        <button onclick="window.location.href='{{ route('lisensi-digital-checkout',['W10P']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                            Beli Sekarang
                        </button>
                    </div>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Lisensi Resmi dari Microsoft
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            25-digit Kode Aktifasi
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Gratis Office 365 Student
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Bisa Update
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Untuk 1 Perangkat
                        </li>
                        <li class="mb-3 flex items-center">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 1792 1792">
                                <path d="M1152 896q0 106-75 181t-181 75-181-75-75-181 75-181 181-75 181 75 75 181zm-256-544q-148 0-273 73t-198 198-73 273 73 273 198 198 273 73 273-73 198-198 73-273-73-273-198-198-273-73zm768 544q0 209-103 385.5t-279.5 279.5-385.5 103-385.5-103-279.5-279.5-103-385.5 103-385.5 279.5-279.5 385.5-103 385.5 103 279.5 279.5 103 385.5z">
                                </path>
                            </svg>
                            Seumur Hidup
                        </li>
                    </ul>
                    <span class="w-56 block bg-gray-100 h-1 rounded-lg my-2">
                    </span>
                    <ul class="text-sm text-black dark:text-white w-full mt-6 mb-6">
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Ada Tutorial Instalasi 
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Bantuan Pemasangan via WA
                            </div>
                        </li>
                        <li class="mb-3 flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#10b981" viewBox="0 0 1792 1792">
                                <path d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                </path>
                            </svg>
                            <div style="padding-left: 5px">
                                Dijamin Aman Tanpa Virus
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container px-4">
            <div class="relative px-4 w-full" style="padding: 20px 1rem">
                <div class="max-w-lg overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                    <div class="px-6 py-8 bg-white lg:p-12 card-text-container">
                        <h3 class="text-2xl font-bold sm:text-3xl pt-2 pb-4">Netflix</h3>
                        <p class="text-base text-gray-500 pb-4">
                            Adalah salah satu platfrom streaming film dan acara TV terkenal yang sudah mendunia. Kamu bisa tonton serial drama korea, film hingga anime. BeliDigi menawarkan paket Netflix super murah buat kamu. Ada beberapa pilihan paket Netflix, mulai dari yang harian hingga setahun full.
                        </p>
                        <div>
                            <div class="flex items-center">
                                <h4 class="text-sm font-semibold tracking-wide uppercase whats-text">Nggak Perlu Khawatir</h4>
                                <div id="line-decor"></div>
                            </div>
                            <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Bisa pilih Private atau sharing</p>
                                </li>
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Password akun diganti setiap durasi waktu tertentu, sesuai paketan yang dipilih</p>
                                </li><li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Kualitas 4K HDR</p>
                                </li>
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">1 Orang 1 Layar, Melanggar? Auto-kick</p>
                                </li>
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Akun Dikelola oleh BeliDigi</p>
                                </li>
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Region Akun: Indonesia</p>
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
                                <span style="font-size: 2rem">Rp. 1.700</span><span style="font-size: 1rem; font-weight: lighter">/ hari</span>
                            </div>
                            <div>
                                <div class="rounded-md shadow">
                                    <button id="access-btn">Book Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative px-4 w-full" style="padding: 20px 1rem">
                <div class="max-w-lg overflow-hidden rounded-lg shadow-lg lg:max-w-none lg:flex">
                    <div class="px-6 py-8 bg-white lg:p-12 card-text-container">
                        <h3 class="text-2xl font-bold sm:text-3xl pt-2 pb-4">Disney+ Hotstar</h3>
                        <p class="text-base text-gray-500 pb-4">
                            Sama halnya dengan Netflix, Disney+ Hotstar memiliki beberapa kelebihan seperti adanya serial Marvel yang khusus dihadirkan pada platform ini. BeliDigi juga menghadirkan paket harian hingga tahunan pada Platform Disney+ Hotstar.
                        </p>
                        <div>
                            <div class="flex items-center">
                                <h4 class="text-sm font-semibold tracking-wide uppercase whats-text">Apa Saja kelebihannya?</h4>
                                <div id="line-decor"></div>
                            </div>
                            <ul class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Bisa pilih akun Private atau Sharing</p>
                                </li>
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Password diganti sesuai dengan waktu paket</p>
                                </li><li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Akun Dikelola oleh BeliDigi</p>
                                </li>
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">1 Orang 1 Layar, Melanggar? Auto-kick</p>
                                </li>
                                <li class="flex" style="padding-top: 10px">
                                    <div>
                                        <svg id="svg-filter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <p class="px-2 text-gray-700" style="font-size: .9rem;height:auto;">Pakai sistem booking</p>
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
                                <span style="font-size: 2rem">Rp. 1.000</span><span style="font-size: 1rem; font-weight: lighter">/ hari</span>
                            </div>
                            <div>
                                <div class="rounded-md shadow">
                                    <button id="access-btn">Book Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection