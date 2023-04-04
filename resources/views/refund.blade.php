@extends('layouts.sublayout.page')
@section('page_title','Refund')
@section('title','Refund')
@section('page_content')
<section class="py-20 md:py-[120px] relative"> 
    <div class="container px-4">
        <form id="data_form" action="{{ route('add_refund_transaction') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('GET')
            <div id="import-input-3">
                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                    <label class="block mb-1 text-base py-2" for="nama">Nama Lengkap*</label>
                    <input value="{{ old('nama',$data->nama) }}" id="nama" name="nama" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" readonly/>
                    <div class="form-help text-sm py-1">Nama-mu Diperlukan untuk proses verifikasi</div>
                </div>
                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                    <label class="block mb-1 text-base py-2" for="">Bisa Dihubungi Melalui*</label>
                    <select value="{{ $data->hp!='' ? old('platform','Whatsapp') : old('platform','Email') }}" id="platform" name="platform" class=" h-10 pl-3 pr-6 text-large placeholder-gray-600 border rounded-lg appearance-none select-width" placeholder="Pilih Platform sosmed kamu">
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="Email">E-Mail</option>
                        <option value="Instagram">Instagram</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </div>
                    <div class="form-help text-sm py-1">Harap pilih sosial media yang dapat digunakan untuk menghubungi kamu</div>
                </div>
                <div class="text-gray-700 px-10 py-5 import-input-form-3" id="special-ii3">
                    <label class="block mb-1 text-base py-2" for="username" id="labelAkun">Akun</label>
                    <input value="{{ $data->hp!='' ? old('username', $data->hp) : old('username',$data->email) }}" id="username" name="username" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" placeholder="Contoh: @bla"/>
                    <div class="form-help text-sm py-1" id="helperAkun">Harap masukan akun kamu</div>
                </div>
            </div>
            <div id="import-input-3">
                <div class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-3">
                    <label class="block mb-1 py-2" for="buktiTransaksi">Bukti Transaksi*</label>
                    <input id="buktiTransaksi" name="buktiTransaksi" type="file" accept=".png,.jpg.svg,.pdf" class="block w-full text-lg border text-gray-500" required>
                    <div class="form-help text-sm py-1">Harap Sisipkan Bukti Transaksi</div>
                </div>
                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                    <label class="block mb-1 py-2" for="nominalRefund">Nominal Refund*</label>
                    <input value="{{ $data->sebabTolak!='' && $data->statusProses=='FAILED' ? (int)$data->totalBayar : old('nominalRefund') }}" id="nominalRefund" name="nominalRefund" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Contoh: 10000" {{ $data->sebabTolak!='' && $data->statusProses=='FAILED' ? 'readonly' : '' }}/>
                    <div class="form-help text-sm py-1">Masukan nominal refund (jika tidak sesuai dengan bukti transfer, permintaan refund otomatis ditolak)</div>
                </div>
                <div class="text-gray-700 px-10 py-5 import-input-form-3" id="special-ii3">
                    <label class="block mb-1 py-2" for="tanggalBayar">Tanggal Trasfer / Pembayaran*</label>
                    <input value="{{ old('tanggalBayar') }}" id="tanggalBayar" name="tanggalBayar" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="date" placeholder="MM/DD/YYYY" required/>
                    <div class="form-help text-sm py-1">Harap masukkan tanggal transfer</div>
                </div>
            </div>
            <div id="import-input-3">
                <div class="relative inline-block w-full text-gray-700 px-10 py-5 import-input-form-3">
                    <label class="block mb-1 py-2" for="bankTujuan">Bank Tujuan*</label>
                    <select value="{{ old('bankTujuan') }}" id="bankTujuan" name="bankTujuan" class="bankSelector h-10 pl-3 pr-6 text-lg placeholder-gray-600 border rounded-lg appearance-none select-width">
                        <option value="BRI">BRI</option>
                        <option value="Mandiri">Mandiri</option>
                        <option value="BCA">BCA</option>
                        <option value="BNI">BNI</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                    </div>
                    <div class="form-help text-sm py-1">Harap Pilih Bank Tujuan Dana Refund. Jika tidak ada, pilih lainnya dan tuliskan rekening dengan kode bank.</div>
                </div>
                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                    <label class="block mb-1 py-2" for="noRek">Rekening Tujuan*</label>
                    <input value="{{ old('noRek') }}" id="noRek" name="noRek" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="number" placeholder="Masukan nomor rekening tujuan" id="forms-labelOverInputCode"/>
                    <div class="form-help text-sm py-1">Pastikan Nomor Rekening Sudah Benar, jika kamu memilih lainnya pada kolom Bank Tujuan dan tuliskan rekening dengan kode bank</div>
                </div>
                <div class="text-gray-700 px-10 py-5 import-input-form-3">
                    <label class="block mb-1 py-2" for="pemilikRek">Pemilik Rekening*</label>
                    <input value="{{ old('pemilikRek') }}" id="pemilikRek" name="pemilikRek" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Masukan nama pemilik rekening"/>
                    <div class="form-help text-sm py-1">Nama Pemilik Rekening diperlukan untuk verifikasi bahwa rekening yang dimasukan sudah benar</div>
                </div>
            </div>
            <div id="import-input-2">
                <div class="text-gray-700 px-10 py-5 import-input-form-2">
                    <label class="block mb-1 py-2" for="idTerkait">Id Transaksi Terkait*</label>
                    <input value="{{ $idWillRefund }}" id="idTerkait" name="idTerkait" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" readonly/>
                    <div class="form-help text-sm py-1">Masukan Id Transaksi Terkait pada kolom ini.</div>
                </div>
                <div class="text-gray-700 px-10 py-5 import-input-form-2">
                    <label class="block mb-1 py-2" for="sebab">Alasan Refund*</label>
                    <input value="{{ $data->sebab!='' ? old('sebab',$data->sebab) : old('sebab','Oleh Admin: '.$data->sebabTolak) }}" id="sebab" name="sebab" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg" type="text" placeholder="Salah kode unik"/>
                    <div class="form-help text-sm py-1">Tuliskan alasan kamu membuat refund</div>
                </div>
            </div>
            <div class="relative inline-block w-full text-gray-700 px-10 py-5">
                <button id="konfirmasi_data" class="text-base font-medium text-white bg-black rounded-lg py-3 px-6"> Kirim Permintaan Refund </button>
            </div>
        </form>
    </div>
</section>
@endsection
@section('customJs',asset('js/custom/refund.custom.js'))
