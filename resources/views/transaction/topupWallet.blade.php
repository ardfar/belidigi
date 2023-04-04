{{-- extends page layout  --}}
@extends('layouts.sublayout.page')
{{-- Add the title to tab title  --}}
@section('title','Top Up E-Wallet')
{{-- Add the title to the banner title  --}}
@section('page_title','Top Up E-Wallet')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative">
        <div class="container px-4 py-4">
            <div class="flex flex-wrap -mx-4">
                {{-- START: PRODUCT GRID DISPLAY  --}}
                <div class="px-4 py-6" id="price_table_container">
                    <div class="shadow-lg rounded-2xl bg-white p-4  priceCardEffect" style="width:100%">
                        <p class="text-black text-3xl text-center font-bold">
                            GoPay
                        </p>
                        <div style="padding: 20px 5px">
                            <img src="{{ asset('images/trx/gopay.svg') }}" alt="" style="height:100px; width: auto; display:block; margin: 0 auto" class="svgEffect">
                        </div>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href='{{ route('topup-e-wallet-checkout',['gopay']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white">
                                Isi Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="shadow-lg rounded-2xl bg-white p-4  priceCardEffect" style="width:100%">
                        <p class="text-black text-3xl text-center font-bold text-">
                            OVO
                        </p>
                        <div style="padding: 20px 5px">
                            <img src="{{ asset('images/trx/ovo.svg') }}" alt="" style="height:100px; width: auto; display:block; margin: 0 auto" class="svgEffect">
                        </div>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href='{{ route('topup-e-wallet-checkout',['ovo']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                                Isi Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="shadow-lg rounded-2xl bg-white p-4  priceCardEffect" style="width:100%">
                        <p class="text-black text-3xl text-center font-bold text-">
                            Dana
                        </p>
                        <div style="padding: 20px 5px">
                            <img src="{{ asset('images/trx/dana.svg') }}" alt="" style="height:100px; width: auto; display:block; margin: 0 auto" class="svgEffect">
                        </div>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href='{{ route('topup-e-wallet-checkout',['dana']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                                Isi Sekarang
                            </button>
                        </div>
                    </div>
                    <div class="shadow-lg rounded-2xl bg-white p-4  priceCardEffect" style="width:100%">
                        <p class="text-black text-3xl text-center font-bold text-">
                            LinkAja
                        </p>
                        <div style="padding: 20px 5px">
                            <img src="{{ asset('images/trx/linkaja.svg') }}" alt="" style="height:100px; width: auto; display:block; margin: 0 auto" class="svgEffect">
                        </div>
                        <div class="w-full flex justify-center py-5">
                            <button onclick="window.location.href='{{ route('topup-e-wallet-checkout',['linkaja']) }}'" class="card-button w-full m-auto px-3 py-3 text-sm shadow border border-black rounded-lg text-black bg-white" >
                                Isi Sekarang
                            </button>
                        </div>
                    </div>
                </div>
                {{-- END: PRODUCT GRID DISPLAY  --}}
            </div>
        </div>
    </section>
@endsection
