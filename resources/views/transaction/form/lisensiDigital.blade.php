{{-- extends page layout  --}}
@extends('layouts.sublayout.page')
{{-- Add the title to tab title  --}}
@section('title','Checkout Lisensi Digital')
{{-- Add the title to the banner title  --}}
@section('page_title','Checkout Lisensi Digital')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative">
        <div class="container px-4 py-4">
            {{-- Main Form  --}}
            <form id="lisensi_form" method="post" action="{{ route('add_beli_lisensi_digital_transaction') }}">
                @csrf
                <div id="import-input-3">
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="nama">Nama atau Alias*</label>
                        <input value="{{ old('nama',Auth::check() ? Auth::user()->name : '') }}" id="nama" name="nama" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan nama kamu" {{ Auth::check() ? "readonly" : "" }}/>
                        <div class="form-help text-sm py-1">Selain dicatumkan pada bukti transaksi, data ini akan digunakan sebagai password untuk melihat detail transaksi</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form-3">
                        <label class="block mb-1 text-base py-2" for="email">Alamat Email*</label>
                        <input value="{{ old('email',Auth::check() ? Auth::user()->email : '') }}" id="email" name="email" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="email" placeholder="Masukan alamat email-mu" {{ Auth::check() ? "readonly" : "" }}/>
                        <div class="form-help text-sm py-1">Email diperlukan untuk mengirimkan bukti transaksi.</div>
                    </div>
                    <div class="text-gray-700 px-10 py-5 import-input-form" id="special-ii3">
                        <label class="block mb-1 text-base py-2" for="hp">Nomor Telepon</label>
                        <input value="{{ old('hp',Auth::check() ? Auth::user()->hp : '') }}" id="hp" name="hp" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Contoh: 085172059904" {{ Auth::check() ? "readonly" : "" }}/>
                        <div class="form-help text-sm py-1">Harap isi nomor telepon anda (opsional).</div>
                    </div>
                </div>
                <div id="import-input-2">
                    <div id="lisensi" class="relative text-gray-700 px-10 py-5 import-input-form-2">
                        <label class="block mb-1 py-2" for="lisensiDigital">Produk / Lisensi Digital*</label>
                        <select value="{{ old('lisensiDigital') }}" id="lisensiDigital" name="lisensiDigital" class=" lisensiSelector select-width h-10 pl-3 pr-6 text-large placeholder-gray-600 border rounded-lg appearance-none" placeholder="Pilih Lisensi yang sesuai">
                            <option value="W10P" id="W10P"> Windows 10 Professional ==> Rp. 35.000</option>
                            <option value="W10H" id="W10H">Windows 10 Home ==> Rp. 30.000</option>
                            <option value="W11P" id="W11P">Windows 11 Professional ==> Rp. 40.000</option>
                            <option value="MSO21" id="MSO21">MS Office 2021 ==> Rp. 43.000</option>
                            <option value="MSO365" id="MSO365">MS Office 365 ==> Rp. 25.000</option>
                            <option value="GDU" id="GDU">Google Drive Unlimited ==> Rp. 25.000</option>
                            <option value="ACC" id="ACC">Adobe Creative Cloud ==> Rp. 2.500.000</option>
                            <option value="IDM" id="IDM">Internet Download Manager ==> Rp. 125.000</option>
                        </select>
                        <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                        </div>
                        <div class="form-help text-sm py-1">Pilih produk digital yang sesuai</div>
                    </div>
                    <div class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-2">
                        <label class="block mb-1 py-2" for="metodeBayar">Metode Pembayaran*</label>
                        <select value="{{ old('metodeBayar') }}" id="metodeBayar" name="metodeBayar" class=" methodSelector select-width h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline">
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
                </div>
                <div class="relative flex w-full text-gray-700 px-10 py-5">
                    <button id="konfirmasi_data" class="text-base font-medium text-white bg-black rounded-lg py-3 px-6"> Beli Lisensi </button>
                    <p id="sk-text" class="inline-block" style="width: 40%">
                        Dengan mengklik tombol "Buat Transaksi" maka, kamu menyetujui <a href="" class="underline">Syarat dan Ketentuan</a> yang berlaku
                    </p>
                </div>
            </form>
        </div>
    </section>
    <script>
        // Select the option based on the URL parameter (http://localhost/lisensi-digital/W10P => opt with value W10P is selected)
        $(document).ready(setAttrToOpt("{{ $selected }}"));function setAttrToOpt(t){$("#"+t).attr("selected","")}
    </script>
@endsection

{{-- Custom script --}}
@section('customJs',asset('js/custom/ld-form.custom.js'))