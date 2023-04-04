{{-- extends page layout  --}}
@extends('layouts.sublayout.page')
{{-- Add the title to tab title  --}}
@section('title','Beli Pulsa & Kuota')
{{-- Add the title to the banner title  --}}
@section('page_title','Beli Pulsa & Kuota')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative"> 
        <div class="container px-4 py-4">
            <div class="w-full relative" style="height: 7vh">
                {{-- Add button to switch between form  --}}
                <div class="mx-10 absolute overflow-hidden" id="toggleButton">
                    <button onclick="tab('beli-pulsa','beli-kuota')" id="beli-pulsa-btn" class="text-base font-medium py-3 px-10 relative" style="background: #3056d3; color: white; transition: .4s;"> Pulsa </button>
                    <button onclick="tab('beli-kuota','beli-pulsa')" id="beli-kuota-btn" class="text-base font-medium py-3 px-10 relative" style="background: white; color: black; transition: .4s;"> Kuota </button>
                </div>
            </div>
            {{-- Beli Pulsa form  --}}
            <div id="beli-pulsa" style="display: block">
                <form id="pulsa_form" method="POST" action="{{ route('add_beli_pulsa_transaction') }}">
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
                            <label class="block mb-1 text-base py-2" for="hp">Nomor Telepon*</label>
                            <input value="{{ old('hp') }}" id="hp-pulsa" name="hp" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Contoh: 085172059904"/>
                            <div class="form-help text-sm py-1">Harap isi nomor telepon anda.</div>
                        </div>
                    </div>
                    <div id="import-input-2">
                        <div class="text-gray-700 px-10 py-5 import-input-form-2">
                            <label class="block mb-1 text-base py-2" for="operator">Operator*</label>
                            <input value="{{ old('operator') }}" id="operator-pulsa" name="operator" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Operator SIM" readonly/>
                        </div>
                        <div id="pulsa" class="relative text-gray-700 px-10 py-5 import-input-form-2">
                            <div id="pulsa-wrapper">
                                <label class="block mb-1 py-2" for="jumlahPulsa">Jumlah Pulsa*</label>
                                <select value="{{ old('jumlahPulsa') }}" style="width:100%" id="jumlahPulsa" name="jumlahPulsa" class=" pulsaSelector h-10 pl-3 pr-6 text-large placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                                    <option value="">Harap masukan no telepon</option>
                                </select>
                            </div>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                            </div>
                            <div class="form-help text-sm py-1">Pilih pulsa yang sesuai</div>
                        </div>
                    </div>
                    <div class="relative inline-block w-full text-gray-700 px-10 py-5">
                        <label class="block mb-1 py-2" for="metodeBayar">Metode Pembayaran*</label>
                        <select value="{{ old('metodeBayar') }}" id="metodeBayar-p" name="metodeBayar" class="w-full h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none">
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
                    <div class="relative flex w-full text-gray-700 px-10 py-5">
                        <button id="konfirmasi_pulsa" class="text-base font-medium text-white bg-black rounded-lg py-3 px-6"> Beli Pulsa </button>
                        <p id="sk-text" class="inline-block" style="width: 40%">
                            Dengan mengklik tombol "Buat Transaksi" maka, kamu menyetujui <a href="" class="underline">Syarat dan Ketentuan</a> yang berlaku
                        </p>
                    </div>
                </form>
            </div>
            {{-- Beli Kuota Form  --}}
            <div id="beli-kuota" style="display: none">
                <form id="kuota_form" method="post" action="{{ route('add_beli_kuota_transaction') }}">
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
                            <label class="block mb-1 text-base py-2" for="hp">Nomor Telepon*</label>
                            <input value="{{ old('hp') }}" id="hp-kuota" name="hp" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Contoh: 085172059904"/>
                            <div class="form-help text-sm py-1">Harap isi nomor telepon anda.</div>
                        </div>
                    </div>
                    <div id="import-input-2">
                        <div class="text-gray-700 px-10 py-5 import-input-form-2">
                            <label class="block mb-1 text-base py-2" for="operator">Operator*</label>
                            <input value="{{ old('operator') }}" id="operator-kuota" name="operator" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Operator SIM" readonly/>
                        </div>
                        <div id="kuota" class="relative text-gray-700 px-10 py-5 import-input-form-2">
                            <div id="kuota-wrapper">
                                <label class="block mb-1 py-2" for="jumlahKuota">Pilihan Paket*</label>
                                <select value="{{ old('jumlahKuota') }}" style="width:100%" id="jumlahKuota" name="jumlahKuota" class=" kuotaSelector h-10 pl-3 pr-6 text-large placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                                    <option value="">Harap masukan no telepon</option>
                                </select>
                            </div>
                            <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                            </div>
                            <div class="form-help text-sm py-1">Pilih kuota yang sesuai</div>
                        </div>
                    </div>
                    <div class="relative inline-block w-full text-gray-700 px-10 py-5">
                        <label class="block mb-1 py-2" for="metodeBayar">Metode Pembayaran*</label>
                        <select value="{{ old('metodeBayar') }}" style="width: 100%" id="metodeBayar-k" name="metodeBayar" class="select-width h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline">
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
                    <div class="relative flex w-full text-gray-700 px-10 py-5">
                        <button id="konfirmasi_kuota" class="text-base font-medium text-white bg-black rounded-lg py-3 px-6"> Beli Kuota </button>
                        <p id="sk-text" class="inline-block" style="width: 40%">
                            Dengan mengklik tombol "Buat Transaksi" maka, kamu menyetujui <a href="" class="underline">Syarat dan Ketentuan</a> yang berlaku
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

{{-- Add customized javascript  --}}
@section('customJs',asset('js/custom/pulsakuota.custom.js'))