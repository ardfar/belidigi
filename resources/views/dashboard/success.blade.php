@extends('layouts.dashboard.main')
@section('title','Transaksi Selesai Diproses - BeliDigi')
@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Data : Transaksi Selesai Diproses
        </h2>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form action="{{ route('successSearch') }}" class="xl:flex sm:mr-auto" >
                <div class="sm:flex items-center sm:mr-4">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Jenis</label>
                    <select id="filterKategori" name="filterKategori" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                        <option value="transfer-bank" id="transfer-bank">Transfer Bank</option>
                        <option value="bayar-virtual" id="bayar-virtual">Bayar VA</option>
                        <option value="beli-pulsa" id="beli-pulsa">Isi Pulsa</option>
                        <option value="beli-kuota" id="beli-kuota">Isi Kuota</option>
                        <option value="lisensi-digital" id="lisensi-digital">Lisensi Digital</option>
                        <option value="topup-ewallet" id="topup-ewallet">TopUp E-Wallet</option>
                        <option value="jasa-sosmed" id="jasa-sosmed">Jasa Sosmed</option>
                    </select>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                    <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Cari</label>
                    <input id="searchQuery" name="searchQuery" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Cari Data">
                </div>
                <div class="mt-2 xl:mt-0">
                    <button id="tabulator-html-filter-go" type="submit" class="btn btn-primary w-full sm:w-16">Terapkan</button>
                    <button id="tabulator-html-filter-reset" onclick="event.preventDefault();document.getElementById('areset').click()" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1">Reset</button>
                </div>
                <a href="{{ route('success') }}" class="hidden" id="areset"></a>
            </form>
            <div class="flex mt-5 sm:mt-0">
                <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
            </div>
        </div>
        <div class="overflow-x-auto scrollbar-hidden">
            <table class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowraptext-center">ID</th>
                        <th class="whitespace-nowrap text-center">JENIS TRANSAKSI</th>
                        <th class="text-center whitespace-nowrap">METODE BAYAR</th>
                        <th class="text-center whitespace-nowrap">TOTAL BAYAR</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($generalPurchaseInfo->count() != 0)
                        @foreach ($generalPurchaseInfo as $generalInfo)
                        <tr class="intro-x">
                            <td class="w-20 text-center ">
                                #{{ $generalInfo->idTransaksi }}
                            </td>
                            <td class="w-20 text-center">
                                <p class="whitespace-nowrap text-center">{{ $generalInfo->jenisTransaksi }}</p> 
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
                            <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a href="{{ route('successDetail',[$generalInfo->jenisTransaksi,$generalInfo->idTransaksi]) }}" class="flex items-center mr-3 text-theme-12"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Detail </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr class="intro-x">
                            <td colspan="6" class="text-center">TIDAK ADA DATA UNTUK DITAMPILKAN</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{ $generalPurchaseInfo->links('vendor/pagination/custom') }}
    </div>
    <script>
        @if (Route::is('success'))
        @else
        $("#{{ $categoryTarget }}").attr('selected','selected');
        $('#searchQuery').val('{{ $queryTarget }}')
        @endif
    </script>
    <!-- END: HTML Table Data -->
</div>
@endsection