@extends('layouts.sublayout.page')
@section('title','Riwayat Transaksi')
@section('page_title','Halaman Riwayat Transaksi')
@section('page_content')
<section class=" bg-[#f3f4ff] pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] relative z-20 overflow-hidden " >
    <div class="container">
      <div class="flex flex-wrap -mx-4">
        <div class="w-full px-4">
          <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[620px]">
            <h2 class=" font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4 " > Temukan Transaksi-mu </h2>
            <div class="hidden" id="simple-container"><form id="authToView_form" class="hidden" action="{{ route('authToView') }}"> @csrf @method('PUT') <input type="text" name="idTerkait" id="idTerkait"> <input type="text" name="realName" id="realName"> <button type="submit" id="confirmToView"></button> </form></div>
            <form action="{{ route('history_search_transaction_data') }}">
                <div class="text-gray-700 px-4 py-5">
                    <input value="{{ old('searchQuery') }}" id="searchQuery" name="searchQuery" class="h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan id transaksi / email / telepon"/>
                </div>
                <div class="relative inline-block w-full text-gray-700 px-2 py-5">
                    <button type="submit" class="text-base font-medium text-white bg-black rounded-lg py-3 px-6"> Cari Transaksi </button>
                    <a href="{{ route('riwayat-transaksi') }}" class="text-base text-white bg-black rounded-lg px-6" style="padding: .85rem 1.5rem; line-height:1.5rem;background:#dc3741"> Reset </a>
                </div>
            </form>
            
          </div>
        </div>
      </div>

      <div class="flex flex-wrap -mx-4">
        <div class="w-full lg:w-full px-4">
            <div class="cursor-pointer single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-2 sm:p-8 mb-2">
                <div class="faq-btn flex items-center w-full text-left">
                  <div class="w-full" id="gridTable">
                      <div style="text-align: center;font-weight:bolder">TIMESTAMP</div>
                      <div style="text-align: center;font-weight:bolder">JENIS TRANSAKSI</div>
                      <div id="specialGridTable" style="text-align: center;font-weight:bolder">TOTAL BAYAR</div>
                      <div style="text-align: center;font-weight:bolder">METODE BAYAR</div>
                      <div id="specialGridTable" style="text-align: center;font-weight:bolder">STATUS</div>
                  </div>
                </div>
            </div>
          @foreach ($generalPurchaseInfo as $generalInfo)
            <div class="cursor-pointer single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-2 sm:p-8 mb-2 wow fadeInUp" data-wow-delay=".1s " onclick="window.location.href = '{{ route('invoice',[$generalInfo->jenisTransaksi,$generalInfo->idTransaksi,$generalInfo->accessCode]) }}'">
                <div class="faq-btn flex items-center w-full text-left">
                  <div class="w-full" id="gridTable">
                      <div style="text-align: center">{{ $generalInfo->created_at }}</div>
                      <div style="text-align: center">{{ $generalInfo->jenisTransaksi }}</div>
                      <div id="specialGridTable" style="text-align: center">Rp. {{ number_format((int)$generalInfo->totalBayar,'0',',','.') }}</div>
                      <div style="text-align: center">{{ $generalInfo->metodeBayar }}</div>
                      <div id="specialGridTable" style="text-align: center">{{ $generalInfo->status }}</div>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
        {{ $generalPurchaseInfo->links('vendor/pagination/custom') }}
      </div>
    </div>

    <div class="absolute bottom-0 right-0 z-[-1]">
      <svg width="1440" height="886" viewBox="0 0 1440 886" fill="none" xmlns="http://www.w3.org/2000/svg" >
        <path opacity="0.5" d="M193.307 -273.321L1480.87 1014.24L1121.85 1373.26C1121.85 1373.26 731.745 983.231 478.513 729.927C225.976 477.317 -165.714 85.6993 -165.714 85.6993L193.307 -273.321Z" fill="url(#paint0_linear)" />
        <defs>
          <linearGradient id="paint0_linear" x1="1308.65" y1="1142.58" x2="602.827" y2="-418.681" gradientUnits="userSpaceOnUse" >
            <stop stop-color="#3056D3" stop-opacity="0.36" />
            <stop offset="1" stop-color="#F5F2FD" stop-opacity="0" />
            <stop offset="1" stop-color="#F5F2FD" stop-opacity="0.096144" />
          </linearGradient>
        </defs>
      </svg>
    </div>
</section>
@endsection
@section('customJs',asset('js/custom/search.custom.js'))