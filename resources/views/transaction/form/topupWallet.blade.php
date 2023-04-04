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
            {{-- Main form  --}}
            <form id="topup_form" method="post" action="{{ route('add_topup_e_wallet_transaction') }}">
                @csrf
                <div id="import-input-2">
                    <div class="text-gray-700 px-10 py-5 import-input-form-2">
                        <label class="block mb-1 text-base py-2" for="nama">Nama atau Alias*</label>
                        <input value="{{ Auth::check() ? old('nama',Auth::user()->name) : old('nama') }}" id="nama" name="nama" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan nama kamu" {{ Auth::check() ? "readonly" : "" }}/>
                        <div class="form-help text-sm py-1">Selain dicatumkan pada bukti transaksi, data ini akan digunakan sebagai password untuk melihat detail transaksi</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-2">
                        <label class="block mb-1 text-base py-2" for="email">Email*</label>
                        <input value="{{ Auth::check() ? old('email', Auth::user()->email) : old('email') }}" id="email" name="email" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="email" placeholder="Masukan Email" {{ Auth::check() ? "readonly" : "" }}/>
                        <div class="form-help text-sm py-1">Email-mu Diperlukan untuk mengirimkan bukti transaksi</div>
                    </div>
                </div>
                <div id="import-input-3">
                    <div class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 py-2" for="ewallet">Platform E-Wallet*</label>
                        <select value="{{ old('ewallet') }}" id="ewallet" name="ewallet" class="select-width h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none">
                            <option value="gopay" id="gopay">GoPay</option>
                            <option value="ovo" id="ovo">OVO</option>
                            <option value="dana" id="dana">Dana</option>
                            <option value="linkaja" id="linkaja">LinkAja</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </div>
                        <div class="form-help text-sm py-1">Pilih platform e-wallet yang sesuai.</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="hp">Nomor Telepon*</label>
                        <input value="{{ old('hp') }}" id="hp" name="hp" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg " type="number" placeholder="Contoh: 085172059904"/>
                        <div class="form-help text-sm py-1">Harap isi nomor telepon anda yang terdaftar pada e-wallet.</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="nominalTopup">Nominal TopUp*</label>
                        <input value="{{ old('nominalTopup') }}" id="nominalTopup" name="nominalTopup" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg " type="number" min="10000" placeholder="Masukan nominal Topup" value="10000"/>
                        <div class="form-help text-sm py-1" id="minTop">Minimal nominal TopUp Rp. 10.000</div>
                    </div>
                </div>
                <div class="relative inline-block w-full text-gray-700 px-10 py-5">
                    <label class="block mb-1 py-2" for="metodeBayar">Metode Pembayaran*</label>
                    <select value="{{ old('metodeBayar') }}" id="metodeBayar" name="metodeBayar" class=" methodSelector-p select-width h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none ">
                        <option value="tranBRI">Transfer BRI</option>
                        <option value="tranMandiri">Transfer Mandiri</option>
                        <option value="tranBCA">Transfer BCA</option>
                        <option value="tranBNI">Transfer BNI</option>
                        <option value="qrisDANA">QRIS</option>
                        <option value="kirimDANA">Kirim Dana</option>
                        <option value="kirimGOPAY">Kirim GoPay</option>
                        <option value="kirimOVO">Kirim OVO</option>
                        <option value="kirimSPAY">Kirim Shopee Pay</option>
                        <option value="kirimUSDC">Kirim USDC</option>
                        <option value="tranPulsa" disabled>Pulsa (akan datang)</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </div>
                    <div class="form-help text-sm py-1">Pilihlah metode pembayaran yang sesuai, penggabungan transaksi bisa dilakukan setelah transaksi berhasil dibuat</div>
                </div>
                <div class="relative inline-block w-full text-gray-700 px-10 py-5">
                    <button id="konfirmasi_data" class="text-base font-medium text-white bg-black rounded-lg py-3 px-6 duration-300 ease-in-out " > Isi E-Wallet </button>
                </div>
            </form>
        </div>
    </section>
        {{-- Select the option based on the URL parameter --}}
    <script>$(document).ready(setAttrToOpt("{{ $target }}"));function setAttrToOpt(t){$("#"+t).attr("selected","")}</script>
@endsection

{{-- Custom script --}}
@section('customJs',asset('js/custom/tw-form.custom.js'))