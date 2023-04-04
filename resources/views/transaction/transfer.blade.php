{{-- extends page layout  --}}
@extends('layouts.sublayout.page') 
{{-- Add the title to tab title  --}}
@section('title','Transfer Uang Antar Bank')
{{-- Add the title to the banner title  --}}
@section('page_title','Transfer Uang Antar Bank')
{{-- Main Page content  --}}
@section('page_content')
    <section class="py-20 md:py-[120px] relative"> 
        <div class="container px-4">
            {{-- The form  --}}
            <form id="data_form" method="POST" action="{{ route('add_transfer_bank_transaction') }}">
                @csrf
                {{-- Slider container below  --}}
                <div class="swiper h-fit" id="form-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div id="import-input-3">
                                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 text-base py-2" for="nama">Nama atau Alias*</label>
                                    <input value="{{ old('nama',Auth::check() ? Auth::user()->name : '') }}" id="nama" name="nama" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan nama kamu" />
                                    <div class="form-help text-sm py-1">Selain dicatumkan pada bukti transaksi, data ini akan digunakan sebagai password untuk melihat detail transaksi</div>
                                </div>
                                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 text-base py-2" for="email">Alamat Email*</label>
                                    <input value="{{ old('email',Auth::check() ? Auth::user()->email : '') }}" id="email" name="email" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="email" placeholder="Masukan alamat email-mu"/>
                                    <div class="form-help text-sm py-1">Email diperlukan untuk mengirimkan bukti transaksi.</div>
                                </div>
                                <div class="text-gray-700 px-10 py-5 import-input-form" id="special-ii3">
                                    <label class="block mb-1 text-base py-2" for="hp">Nomor Telepon</label>
                                    <input value="{{ old('hp',Auth::check() ? Auth::user()->hp : '') }}" id="hp" name="hp" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Contoh: 085172059904"/>
                                    <div class="form-help text-sm py-1">Harap isi nomor telepon anda (opsional).</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="swiper_slide_2">
                            <div id="import-input-3" >
                                <div id="holder_bank" class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="bankTujuan">Bank Tujuan*</label>
                                    <select value="{{ old('bankTujuan') }}" id="bankTujuan" name="bankTujuan" class=" bankSelector swiper-no-swiping select-width h-10 pl-3 pr-6 text-large placeholder-gray-600 border rounded-lg appearance-none" placeholder="Pilih Bank Tujuan" style="width:100%">
                                        <option value="Bank Rakyat Indonesia">BRI - Bank Rakyat Indonesia</option>
                                        <option value="Bank Central Asia">BCA - Bank Central Asia</option>
                                        <option value="Bank Central Asia Syariah">BCA Syariah - Bank Central Asia Syariah</option>
                                        <option value="Bank Mandiri">Mandiri - Bank Mandiri</option>
                                        <option value="Bank Negara Indonesia">BNI - Bank Negara Indonesia</option>
                                        <option value="Bank Syariah Indonesia">BSI - Bank Syariah Indonesia</option>
                                        <option value="Bank Muamalat">Muamalat - Bank Muamalat</option>
                                        <option value="Bank Tabungan Negara">BTN - Bank Tabungan Negara</option>
                                        <option value="Bank CIMB Niaga">CIMB - Bank CIMB Niaga</option>
                                        <option value="Bank CIMB Niaga Syariah">CIMB Syariah - Bank CIMB Niaga Syariah</option>
                                        <option value="Bank Permata">Permata - Bank Permata</option>
                                        <option value="Bank Danamon">Danamon - Bank Danamon</option>
                                        <option value="Bank Maybank">Maybank - Bank Maybank</option>
                                        <option value="Bank Mega">Mega - Bank Mega</option>
                                        <option value="Bank UOB Indonesia">UOB - Bank UOB Indonesia</option>
                                        <option value="Bank Artha Graha Internasional">Bank Artha Graha Internasional</option>
                                        <option value="Bank Sinarmas">Sinarmas - Bank Sinarmas</option>
                                        <option value="Bank CommonWealth">CommonWealth - Bank CommonWealth</option>
                                        <option value="Bank OCBC NISP">OCBC NISP - Bank OCBC NISP</option>
                                        <option value="Bank CITI">CITI - Bank CITI</option>
                                        <option value="Bank BNP Paribas Indonesia">Bank BNP Paribas Indonesia</option>
                                        <option value="Bank Ekspor Indonesia">BEI - Bank Ekspor Indonesia</option>
                                        <option value="Bank Panin">PANIN - Bank Panin</option>
                                        <option value="Bank Arta Niaga Kencana">Arta - Bank Arta Niaga Kencana</option>
                                        <option value="Bank Jawa Barat dan Banten">BJB - Bank Jawa Barat dan Banten</option>
                                        <option value="Bank BJB Syariah">Bank BJB Syariah</option>
                                        <option value="Bank DKI">BDKI - Bank DKI</option>
                                        <option value="BPD DIY">BPD DIY</option>
                                        <option value="Bank Jawa Tengah">Bank Jawa Tengah</option>
                                        <option value="Bank Jawa Timur">Bank Jawa Timur</option>
                                        <option value="BPD Jambi">BPD Jambi</option>
                                        <option value="BPD Aceh">BPD Aceh</option>
                                        <option value="Bank Sumatra Utara">Bank Sumatra Utara</option>
                                        <option value="Bank Nagari">Bank Nagari</option>
                                        <option value="Bank Riau">Bank Riau</option>
                                        <option value="Bank Sumatra Selatan Babel">Bank Sumatra Selatan Babel</option>
                                        <option value="Bank Lampung">Bank Lampung</option>
                                        <option value="Bank Kalimantan Selatan">Bank Kalimantan Selatan</option>
                                        <option value="Bank Kalimantan Barat">Bank Kalimantan Barat</option>
                                        <option value="Bank Kalimantan Timur dan Utara">Bank Kalimantan Timur dan Utara</option>
                                        <option value="Bank Kalimantan Tengah">Bank Kalimantan Tengah</option>
                                        <option value="Bank Sulawesi Selatan dan Barat">Bank Sulawesi Selatan dan Barat</option>
                                        <option value="Bank Sulawesi Utara dan Gorontalo">Bank Sulawesi Utara dan Gorontalo</option>
                                        <option value="Bank Nusa Tenggara Barat">Bank Nusa Tenggara Barat</option>
                                        <option value="BPD Bali">BPD Bali</option>
                                        <option value="Bank Nusa Tenggara Timur">Bank Nusa Tenggara Timur</option>
                                        <option value="Bank Maluku Utara">Bank Maluku Utara</option>
                                        <option value="Bank Papua">Bank Papua</option>
                                        <option value="Bank Bengkulu">Bank Bengkulu</option>
                                        <option value="Bank Sulawesi Tengah">Bank Sulawesi Tengah</option>
                                        <option value="Bank Sultra">Bank Sultra</option>
                                        <option value="American Express Bank">American Express Bank</option>
                                        <option value="JP. Morgan Chase Bank, N.A">JP. Morgan Chase Bank, N.A</option>
                                        <option value="Bank of America, N.A">Bank of America, N.A</option>
                                        <option value="ING Indonesia Bank">ING Indonesia Bank</option>
                                        <option value="Bank Credit Agricole Indosuez">Bank Credit Agricole Indosuez</option>
                                        <option value="The Bangkok Bank Comp. LTD">The Bangkok Bank Comp. LTD</option>
                                        <option value="Bank HSBC">The Hongkong & Shanghai B.C. (Bank HSBC)</option>
                                        <option value="The Bank of Tokyo Mitsubishi UFJ LTD">The Bank of Tokyo Mitsubishi UFJ LTD</option>
                                        <option value="Bank Sumitomo Mitsui Indonesia">Bank Sumitomo Mitsui Indonesia</option>
                                        <option value="Bank DBS Indonesia">Bank DBS Indonesia</option>
                                        <option value="Bank Resona Perdania">Bank Resona Perdania</option>
                                        <option value="Bank Mizuho Indonesia">Bank Mizuho Indonesia</option>
                                        <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                        <option value="Bank ABN Amro">Bank ABN Amro</option>
                                        <option value="Bank Keppel Tatlee Buana">Bank Keppel Tatlee Buana</option>
                                        <option value=">Bank Capital Indonesia">Bank Capital Indonesia</option>
                                        <option value="Korea Exchange Bank Danamon">Korea Exchange Bank Danamon</option>
                                        <option value="Bank ANZ Indonesia">Bank ANZ Indonesia</option>
                                        <option value="Deutsche Bank AG">Deutsche Bank AG</option>
                                        <option value="Bank Woori Indonesia">Bank Woori Indonesia</option>
                                        <option value="Bank Of China">Bank Of China</option>
                                        <option value="Bank Bumi Arta">Bank Bumi Arta</option>
                                        <option value="Bank Ekonomi">Bank Ekonomi</option>
                                        <option value="Bank Antardaerah">Bank Antardaerah</option>
                                        <option value="Bank Haga">Bank Haga</option>
                                        <option value="Bank IFI">Bank IFI</option>
                                        <option value="Bank JTRUST">Bank JTRUST</option>
                                        <option value="Bank Mayapada">Bank Mayapada</option>
                                        <option value="Bank Nusantara Parahyangan">Bank Nusantara Parahyangan</option>
                                        <option value="Bank of India Indonesia">Bank of India Indonesia</option>
                                        <option value="Bank Mestika Dharma">Bank Mestika Dharma</option>
                                        <option value="Bank Metro Express">Bank Metro Express (Bank Shinhan Indonesia)</option>
                                        <option value="Bank Maspion Indonesia">Bank Maspion Indonesia</option>
                                        <option value="Bank Hagakita">Bank Hagakita</option>
                                        <option value="Bank Ganesha">Bank Ganesha</option>
                                        <option value="Bank Windu Kentjana">Bank Windu Kentjana</option>
                                        <option value="Halim Indonesia Bank (Bank ICBC Indonesia)">Halim Indonesia Bank (Bank ICBC Indonesia)</option>
                                        <option value="Bank Harmoni International">Bank Harmoni International</option>
                                        <option value="Bank QNB Kesawan (Bank QNB Indonesia)">Bank QNB Kesawan (Bank QNB Indonesia)</option>
                                        <option value="Bank Himpunan Saudara 1906">Bank Himpunan Saudara 1906</option>
                                        <option value="Bank Swaguna">Bank Swaguna</option>
                                        <option value="Bank Bisnis Internasional">Bank Bisnis Internasional</option>
                                        <option value="Bank Sri Partha">Bank Sri Partha</option>
                                        <option value="Bank Jasa Jakarta">Bank Jasa Jakarta</option>
                                        <option value="Bank Bintang Manunggal">Bank Bintang Manunggal</option>
                                        <option value="Bank MNC / Bank Bumiputera">Bank MNC / Bank Bumiputera</option>
                                        <option value="Bank Yudha Bhakti">Bank Yudha Bhakti</option>
                                        <option value="Bank BRI Agro">Bank BRI Agro</option>
                                        <option value="Bank Indomonex (Bank SBI Indonesia)">Bank Indomonex (Bank SBI Indonesia)</option>
                                        <option value="Bank Royal Indonesia">Bank Royal Indonesia</option>
                                        <option value="Bank Alfindo (Bank National Nobu)">Bank Alfindo (Bank National Nobu)</option>
                                        <option value="Bank Syariah Mega">Bank Syariah Mega</option>
                                        <option value="Bank Ina Perdana">Bank Ina Perdana</option>
                                        <option value="Bank Harfa">Bank Harfa</option>
                                        <option value="Prima Master Bank">Prima Master Bank</option>
                                        <option value="Bank Persyarikatan Indonesia">Bank Persyarikatan Indonesia</option>
                                        <option value="Bank Dipo International (Bank Sahabat Sampoerna)">Bank Dipo International (Bank Sahabat Sampoerna)</option>
                                        <option value="Bank Akita">Bank Akita</option>
                                        <option value="Liman International Bank">Liman International Bank</option>
                                        <option value="Anglomas Internasional Bank">Anglomas Internasional Bank</option>
                                        <option value="Bank Kesejahteraan Ekonomi">Bank Kesejahteraan Ekonomi</option>
                                        <option value="Bank Artos IND">Bank Artos IND</option>
                                        <option value="Bank Purba Danarta">Bank Purba Danarta</option>
                                        <option value="Bank Multi Arta Sentosa">Bank Multi Arta Sentosa</option>
                                        <option value="Bank Mayora Indonesia">Bank Mayora Indonesia</option>
                                        <option value="Bank Index Selindo">Bank Index Selindo</option>
                                        <option value="Centratama Nasional Bank">Centratama Nasional Bank</option>
                                        <option value="Bank Fama Internasional">Bank Fama Internasional</option>
                                        <option value="Bank Mandiri Taspen Pos">Bank Mandiri Taspen Pos</option>
                                        <option value="Bank Victoria International">Bank Victoria International</option>
                                        <option value="Bank Harda">Bank Harda</option>
                                        <option value="BPR KS">BPR KS</option>
                                        <option value="Bank Agris">Bank Agris</option>
                                        <option value="Bank Merincorp">Bank Merincorp</option>
                                        <option value="Bank Maybank Indocorp">Bank Maybank Indocorp</option>
                                        <option value="Bank OCBC – Indonesia">Bank OCBC – Indonesia</option>
                                        <option value="Bank CTBC (China Trust) Indonesia">Bank CTBC (China Trust) Indonesia</option>
                                    </select>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                                    </div>
                                    <div class="form-help text-sm py-1">Pilih bank tujuan</div>
                                </div>
                                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="rekTujuan">Nomor Rekening Tujuan*</label>
                                    <input value="{{ old('rekTujuan') }}" id="rekTujuan" name="rekTujuan" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Masukan nomor rekening tujuan"/>
                                    <div class="form-help text-sm py-1">Pastikan Nomor rekening yang dimasukan benar</div>
                                </div>
                                <div class="text-gray-700 px-10 py-5 import-input-form-3" id="special-ii3">
                                    <label class="block mb-1 py-2" for="pemilikTujuan">Pemilik Rekening*</label>
                                    <input value="{{ old('pemilikTujuan') }}" id="pemilikTujuan" name="pemilikTujuan" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan nama pemilik rekening"/>
                                    <div class="form-help text-sm py-1">Nama Pemilik Rekening tujuan diperlukan untuk verifikasi bahwa rekening yang dimasukan sudah benar</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div id="import-input-3">
                                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="jumlahTransfer">Jumlah Transfer*</label>
                                    <input value="{{ old('jumlahTransfer') }}" id="jumlahTransfer" name="jumlahTransfer" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" min="10000" max="2000000" placeholder="Masukan jumlah transfer"/>
                                    <div class="form-help text-sm py-1">Minimal nominal transfer Rp. 10.000 Maksimal Rp. 2.000.000</div>
                                </div>
                                <div class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-3">
                                    <label class="block mb-1 py-2" for="metodeBayar">Metode Pembayaran*</label>
                                    <select value="{{ old('metodeBayar') }}" id="metodeBayar" name="metodeBayar" class="swiper-no-swiping methodSelector select-width h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none" style="width: 100%" >
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
                                    <input value="{{ old('note') }}" id="note" name="note" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan catatan untuk transaksi ini" maxlength="50"/>
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
@section('customJs',asset('js/custom/transfer.custom.js'))