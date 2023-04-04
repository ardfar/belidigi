{{-- extends page layout  --}}
@extends('layouts.sublayout.page')
{{-- Add the title to tab title  --}}
@section('title','Bayar Virtual Account')
{{-- Add the title to the banner title  --}}
@section('page_title','Bayar Virtual Account')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative"> 
        <div class="container px-4">
            {{-- The form  --}}
            <form id="data_form" method="POST" action="{{ route('add_bayar_virtual_transaction') }}">
                @csrf
                {{-- Slider container below  --}}
                <div class="swiper h-fit" id="form-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
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
                        </div>
                        <div class="swiper-slide" id="swiper_slide_2">
                            <div id="import-input-3">
                                <div class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="jenisVA">Jenis Virtual Account*</label>
                                    <select value="{{ old('jenisVA') }}" id="jenisVA" name="jenisVA" class=" bankSelector h-10 pl-3 pr-6 text-large placeholder-gray-600 border rounded-lg appearance-none select-width" placeholder="Pilih Jenis Virtual Account">
                                        <option value="BRI">BRIVA</option>
                                        <option value="BCA">Virtual Account BCA</option>
                                        <option value="MANDIRI">Virtual Account Mandiri</option>
                                        <option value="BNI">Virtual Account BNI</option>
                                        <option value="BSI">Virtual Account BSI</option>
                                        <option value="MUAMALAT">Virtual Account Muamalat</option>
                                        <option value="PERMATA">Virtual Account Permata</option>
                                        <option value="CITI">Virtual Account CITI</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="form-help text-sm py-1">Pilih jenis virtual account</div>
                                </div>
                                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="noVA">Nomor Virtual Account*</label>
                                    <input value="{{ old('noVA') }}" id="noVA" name="noVA" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Masukan nomor rekening tujuan" id="forms-labelOverInputCode"/>
                                    <div class="form-help text-sm py-1">Pastikan Nomor Virtual Account yang dimasukan benar</div>
                                </div>
                                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="pemilikVA">Pemilik Virtual Account</label>
                                    <input value="{{ old('pemilikVA') }}" id="pemilikVA" name="pemilikVA" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan nama pemilik rekening"/>
                                    <div class="form-help text-sm py-1">Nama Pemilik Virtual Account diperlukan untuk verifikasi bahwa rekening yang dimasukan sudah benar (opsional)</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="import-input-3">
                                <div class="text-gray-700 px-10 py-5 import-input-form-3" >
                                    <label class="block mb-1 py-2" for="jumlahBayar">Jumlah Bayar*</label>
                                    <input value="{{ old('jumlahBayar') }}" id="jumlahBayar" name="jumlahBayar" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" min="10000" placeholder="Masukan jumlah transfer"/>
                                    <div class="form-help text-sm py-1">harap masukan jumlah Bayar, Minimal Rp. 10.000</div>
                                </div>
                                <div class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-3" id="special-ii3">
                                    <label class="block mb-1 py-2" for="metodeBayar">Metode Pembayaran*</label>
                                    <select value="{{ old('metodeBayar') }}" id="metodeBayar" name="metodeBayar" class="methodSelector h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none select-width">
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
                                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="note">Catatan Transaksi</label>
                                    <input value="{{ old('note') }}" id="note" name="note" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan catatan transaksi" maxlength="50"/>
                                    <div class="form-help text-sm py-1">Catatan transaksi akan dicatumkan pada bukti transaksi (opsional). Maksimal 50 Karakter</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Custom Pagination button and form send button   --}}
                <div id="final_form">
                    <div class="relative w-full text-gray-700 px-10 py-5" id="confirm_form">
                        <div id="previous-swiper-btn" class="text-base font-medium text-white bg-primary rounded-lg py-3 px-6 w-fit pointer mr-4"> Sebelumnya </div>
                        <div id="next-swiper-btn" class="text-base font-medium text-white bg-primary rounded-lg py-3 px-6 w-fit pointer mr-4"> Selanjutnya </div>
                        <button id="konfirmasi_data" class="text-base font-medium text-white bg-black/70 cursor-not-allowed rounded-lg py-3 px-6 w-fit transition duration-300" disabled> Buat Transaksi </button>
                        <p id="sk-text" style="width: 40%">
                            Dengan mengklik tombol "Buat Transaksi" maka, kamu menyetujui <a href="" class="underline">Syarat dan Ketentuan</a> yang berlaku
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

{{-- Add customized javascript  --}}
@section('customJs',asset('js/custom/bayar-va.custom.js'))