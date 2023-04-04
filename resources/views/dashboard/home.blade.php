@extends('layouts.dashboard.main')
@section('title','Admin Dashboard - BeliDigi')
@section('content')
<div class="content">
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">
        <div class="flex justify-center">
            <span class="intro-y w-20 h-20 rounded-full btn btn-primary mx-2" id="jamPlaceholder" style="font-size: 30px">NaN</span>
            <span class="intro-y w-20 h-20 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" id="menitPlaceholder" style="font-size: 30px">NaN</span>
            <span class="intro-y w-20 h-20 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2" id="detikPlaceholder" style="font-size: 30px">NaN</span>
        </div>
        <div class="px-5 mt-10">
            <div class="font-medium text-center text-lg" id="fullDatePlaceholder">NaN</div>
        </div>
    </div>
    <!-- END: Wizard Layout -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Sekilas
                        </h2>
                        <a href="{{ route('dashboard') }}" class="ml-auto flex items-center text-theme-26 dark:text-theme-33"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="bar-chart-2" class="report-box__icon text-theme-21"></i> 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $todayTransactionCount }}</div>
                                    <div class="text-base text-gray-600 mt-1">Transaksi Berhasil Hari Ini</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="credit-card" class="report-box__icon text-theme-22"></i> 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $refundCount }}</div>
                                    <div class="text-base text-gray-600 mt-1">Permintaan Refund Hari ini</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="dollar-sign" class="report-box__icon text-theme-23"></i> 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">Rp. {{ number_format((int)$netWorthMonthly,'0',',','.') }}</div>
                                    <div class="text-base text-gray-600 mt-1">Total Keuntungan</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="user" class="report-box__icon text-theme-10"></i> 
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">{{ $userCount }}</div>
                                    <div class="text-base text-gray-600 mt-1">Total User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6 pt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">
                            Transaksi Terbaru
                        </h2>
                        {{-- <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel </button>
                            <button class="ml-3 btn box flex items-center text-gray-700 dark:text-gray-300"> <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF </button>
                        </div> --}}
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowraptext-center">ID</th>
                                    <th class="whitespace-nowrap text-center">JENIS TRANSAKSI</th>
                                    <th class="text-center whitespace-nowrap">EMAIL</th>
                                    <th class="text-center whitespace-nowrap">METODE BAYAR</th>
                                    <th class="text-center whitespace-nowrap">TOTAL BAYAR</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($generalPurchaseInfo as $generalInfo)
                                <tr class="intro-x">
                                    <td class="w-20 text-center ">
                                        #{{ $generalInfo->idTransaksi }}
                                    </td>
                                    <td class="w-20 text-center">
                                        <p class="whitespace-nowrap text-center">{{ $generalInfo->jenisTransaksi }}</p> 
                                    </td>
                                    <td class="text-center">
                                        <p class="font-medium whitespace-nowrap text-center">{{ $generalInfo->email }}</p> 
                                    </td>
                                    <td class="text-center">
                                        {{ $generalInfo->metodeBayar }}
                                    </td>
                                    <td class="text-center">
                                        {{ $generalInfo->totalBayar }}
                                    </td>
                                    <td class="text-center">
                                        {{ $generalInfo->status }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
                <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                    <div class="intro-x flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-auto">
                            Important Notes
                        </h2>
                        <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-left" class="w-4 h-4"></i> </button>
                        <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-gray-400 text-gray-700 dark:text-gray-300 mr-2"> <i data-feather="chevron-right" class="w-4 h-4"></i> </button>
                    </div>
                    <div class="mt-5 intro-x">
                        <div class="box zoom-in">
                            <div class="tiny-slider" id="important-notes">
                                @if ($openMessage->count() != 0)
                                    @foreach ($openMessage as $openMSG)
                                        <div class="p-5">
                                            <div class="text-base font-medium truncate">{{ $openMSG->nama }}</div>
                                            <div class="text-gray-500 mt-1">{{ $openMSG->created_at }}</div>
                                            <div class="text-gray-600 text-justify mt-1">{{ $openMSG->pesan }}</div>
                                            <div class="font-medium flex mt-5">
                                                <button type="button" class="btn btn-secondary py-1 px-2">Abaikan Pesan</button>
                                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Balas Pesan</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                <div class="p-5">
                                    <div class="text-base font-medium text-center">Tidak Ada Pesan Untuk Saat ini</div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l border-theme-25 -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection



