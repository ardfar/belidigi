{{-- extends page layout  --}}
@extends('layouts.sublayout.page')
{{-- Add the title to tab title  --}}
@section('title','Checkout Jasa Sosial Media')
{{-- Add the title to the banner title  --}}
@section('page_title','Checkout Jasa Sosial Media')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative">
        <div class="container px-4 py-4">
            {{-- Main form  --}}
            <form id="jasaSosmed_form" method="POST" action="{{ route('add_beli_jasa_sosmed_transaction') }}">
                @csrf
                <div id="import-input-3">
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="nama">Nama atau Alias*</label>
                        <input value="{{ Auth::check() ? old('nama',Auth::user()->name) : old('nama') }}" id="nama" name="nama" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan nama kamu" {{ Auth::check() ? "readonly" : "" }}/>
                        <div class="form-help text-sm py-1">Selain dicatumkan pada bukti transaksi, data ini akan digunakan sebagai password untuk melihat detail transaksi</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="email">Email*</label>
                        <input value="{{ Auth::check() ? old('email', Auth::user()->email) : old('email') }}" id="email" name="email" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="email" placeholder="Masukan Email" {{ Auth::check() ? "readonly" : "" }}/>
                        <div class="form-help text-sm py-1">Email-mu Diperlukan untuk mengirimkan bukti transaksi</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="username">Nama Pengguna / Channel*</label>
                        <input value="{{ old('username') }}" id="username" name="username" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Masukan nama pengguna-mu"/>
                        <div class="form-help text-sm py-1">Nama pengguna diperlukan untuk layanan ini.</div>
                    </div>
                </div>
                <div id="jasa-sosmed" class="relative text-gray-700 px-10 py-5">
                    <label class="block mb-1 py-2" for="jenisLayanan">Jenis Produk / Layanan*</label>
                    {{-- Limited option based on the group  --}}
                    <select value="{{ old('jenisLayanan') }}" id="jenisLayanan" name="jenisLayanan" class="select-width h-10 pl-3 pr-6 text-large placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                        @if ($group=="instagram")
                            <option value="INSTA/FOLL/RANDOM" id="INSTA-FOLL-RANDOM">Instagram Follower Random 100 Follower ==> Rp. 4.000</option>
                            <option value="INSTA/FOLL/LOKAL" id="INSTA-FOLL-LOKAL">Instagram Follower Lokal Indonesia 100 Follower ==> Rp. 4.100</option>
                            <option value="INSTA/VIEW/LOKAL" id="INSTA-VIEW-LOKAL">Instagram View Lokal Indonesia 100 View ==> Rp. 400</option>
                            <option value="INSTA/LIKE/LOKAL" id="INSTA-LIKE-LOKAL">Instagram Like Lokal Indonesia 100 Like ==> Rp. 3.500</option>
                            <option value="INSTA/COM/CUSTOM" id="INSTA-COM-CUSTOM">Custom Komentar Instagram 5 Komentar ==> Rp. 10.000</option>
                        @endif
                        @if ($group=="youtube")
                            <option value="YT/SUBS/RANDOM" id="YT-SUBS-RANDOM">Youtube Subscribe Random 20 Subscriber ==> Rp. 7.600</option>
                            <option value="YT/COM/CUSTOM" id="YT-COM-CUSTOM">Custom Komentar Youtube 10 Komentar ==> Rp. 5.000</option>
                            <option value="YT/VIEWS/RANDOM" id="YT-VIEWS-RANDOM">Youtube View Random 200 View ==> Rp. 4.000</option>
                            <option value="YT/LIKES" id="YT-LIKES">Likes Video Youtube 100 Like ==> Rp. 2.000</option>
                        @endif
                        @if ($group=="tiktok")
                            <option value="TIKTOK/FOLL/RANDOM" id="TIKTOK-FOLL-RANDOM">Follower Tiktok random global 100 Follower ==> Rp. 9.000</option>
                            <option value="TIKTOK/SHARE/LOKAL" id="TIKTOK-SHARE-LOKAL">Share Postingan TikTok oleh akun Indonesia 100 Share==> Rp. 4.000</option>
                            <option value="TIKTOK/VIEW/RANDOM" id="TIKTOK-VIEW-RANDOM">View untuk postingan TikTok 3000 Views ==> Rp. 4.500</option>
                            <option value="TIKTOK/LIKES/LOKAL" id="TIKTOK-LIKES-LOKAL">Like Postingan Tiktok Lokal Indonesia 100 Likes ==> Rp. 4.500</option>
                            <option value="TIKTOK/COM/CUSTOM" id="TIKTOK-COM-CUSTOM" on>Komentar Kustom TikTok per Komentar ==> Rp. 3.500</option>
                        @endif
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </div>
                    <div class="form-help text-sm py-1">Pilih Produk yang sesuai</div>
                </div>
                <div id="import-input-3">
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="platform">Platform*</label>
                        <input id="platform" name="platform" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Platform Sosial Media" value="{{ $group }}" readonly/>
                        <div class="form-help text-sm py-1">Platform jasa sosial media.</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="jumlahJasa">Jumlah*</label>
                        <input id="jumlahJasa" name="jumlahJasa" value="{{ old('jumlahJasa') }}" min="1" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg focus:shadow-outline" type="number" placeholder="Masukan jumlah produk" />
                        <div class="form-help text-sm py-1">Jumlah produk yang akan kamu beli.</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="totalHarga">Total Bayar*</label>
                        <input id="totalHarga" name="totalHarga" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Nominal harus bayar" readonly/>
                        <div class="form-help text-sm py-1">Jumlah yang harus dibayar.</div>
                    </div>
                </div>

                <div class="text-gray-700 px-10 py-5" id="optional-wrapper">
                </div>

                <div class="relative inline-block w-full text-gray-700 px-10 py-5">
                    <label class="block mb-1 py-2" for="metodeBayar">Metode Pembayaran*</label>
                    <select value="{{ old('metodeBayar') }}" id="metodeBayar" name="metodeBayar" class="select-width h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline">
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
                    <button id="konfirmasi_data" class="text-base font-medium text-white bg-black rounded-lg py-3 px-6 duration-300 ease-in-out " > Beli Layanan </button>
                </div>
            </form>
        </div>
    </section>
        {{-- Select the option based on the URL parameter (http://localhost/jasa-sosmed/instagram/INSTA-FOLL-RANDOM => opt with value INSTA-FOLL-RANDOM is selected) --}}
        <script>$(document).ready(setAttrToOpt("{{ $target }}"));function setAttrToOpt(t){$("#"+t).attr("selected","")}</script>
@endsection

{{-- Custom script --}}
@section('customJs',asset('js/custom/js-form.custom.js'))