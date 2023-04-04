@extends('layouts.sublayout.page')
@section('title','Ringkasan Transaksi')
@section('page_title','Ringkasan Transaksi #'.$recentTrx->idTransaksi)
@section('page_content')
    <section class="py-10 md:py-[120px] relative">
        <div class="container px-2">
            <div class="lg:flex lg:flex-wrap sm:block">
                <div class="sm:w-full lg:w-8/12 px-4">
                    <table class="shadow-lg bg-white w-full">
                        <tr>
                          <td class="border lg:px-8 py-4 px-2">Kode Transaksi</td>
                          <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->idTransaksi }}</td>
                        </tr>
                        <tr>
                          <td class="border lg:px-8 py-4 px-2">Oleh</td>
                          <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->nama }}</td>
                        </tr>
                        @if ($recentTrx->jenisTransaksi == 'refund')
                            @if ($recentTrx->platform == 'Whatsapp')
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2">No. Whatsapp</td>
                                    <td class="border lg:px-8 py-4 px-2" style="text-decoration: underline"><a href="https://wa.me/{{ '+62'.ltrim($recentTrx->username,'0') }}" target="_blank">{{ '+62'.ltrim($recentTrx->username,'0') }}</a></td>
                                </tr>
                            @endif
                            @if ($recentTrx->platform == 'Email')
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2">Email</td>
                                    <td class="border lg:px-8 py-4 px-2" style="text-decoration: underline"><a href="mailto:{{ $recentTrx->username }}" target="_blank">{{ $recentTrx->username }}</a></td>
                                </tr>
                            @endif
                            @if ($recentTrx->platform == 'Instagram')
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2">Akun Instagram</td>
                                    <td class="border lg:px-8 py-4 px-2" style="text-decoration: underline"><a href="https://instagram.com/{{ $recentTrx->username }}" target="_blank">{{ $recentTrx->username }}</a></td>
                                </tr>
                            @endif
                        @else
                            @if ($recentTrx->email != '')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Email</td>
                                <td class="border lg:px-8 py-4 px-2" style="text-decoration: underline"><a href="mailto:{{ $recentTrx->email }}" target="_blank">{{ $recentTrx->email }}</a></td>
                            </tr>
                            @if ($recentTrx->hp != '')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">No. Telepon</td>
                                <td class="border lg:px-8 py-4 px-2" style="text-decoration: underline"><a href="tel:{{ $recentTrx->hp }}" target="_blank">{{ $recentTrx->hp }}</a></td>
                            </tr>
                            @endif
                            @else
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">No. Telepon</td>
                                <td class="border lg:px-8 py-4 px-2" style="text-decoration: underline"><a href="tel:{{ $recentTrx->hp }}" target="_blank">{{ $recentTrx->hp }}</a></td>
                            </tr>
                            @endif
                        @endif

                        {{-- tabel buat transfer bank --}}
                        @if ($recentTrx->jenisTransaksi == 'transfer-bank')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">Transfer Bank</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Bank Tujuan</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->bankTujuan }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Rekening Tujuan</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->rekTujuan }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Pemilik Rekening Tujuan</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->pemilikTujuan }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jumlah Transfer</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->jumlahTransfer,'0',',','.') }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Biaya Admin</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->biayaAdmin,'0',',','.') }}</td>
                            </tr>
                        @endif
                        
                        {{-- tabel buat bayar virtual account --}}
                        @if ($recentTrx->jenisTransaksi == 'bayar-virtual')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">Bayar Virtual Account</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Virtual Account</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->jenisVA }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">No. Virtual Account</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->noVA }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Pemilik Virtual Account</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->pemilikVA }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jumlah Bayar</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->jumlahBayar,'0',',','.') }}</td>
                            </tr>
                        @endif
                        
                        {{-- special row for bayar-virtual and transfer-bank --}}
                        @if ($recentTrx->jenisTransaksi == 'transfer-bank' or $recentTrx->jenisTransaksi == 'bayar-virtual')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Catatan Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->note }}</td>
                            </tr>
                        @endif

                        {{-- tabel buat beli pulsa --}}
                        @if ($recentTrx->jenisTransaksi == 'beli-pulsa')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">Beli Pulsa</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Operator SIM</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->operator }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Nominal Pulsa</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->jumlahPulsa,'0',',','.') }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Harga Pulsa</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->hargaPulsa,'0',',','.') }}</td>
                            </tr>
                        @endif

                        {{-- tabel buat beli kuota --}}
                        @if ($recentTrx->jenisTransaksi == 'beli-kuota')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">Beli Kuota</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Operator SIM</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->operator }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Detail Kuota</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->detailKuota }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Harga Kuota</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->hargaKuota,'0',',','.') }}</td>
                            </tr>
                        @endif

                        {{-- tabel buat beli lisensi --}}
                        @if ($recentTrx->jenisTransaksi == 'lisensi-digital')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">Beli Lisensi Digital</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Lisensi</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->jenisLisensi }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Harga Lisensi</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->hargaLisensi,'0',',','.') }}</td>
                            </tr>
                        @endif

                        {{-- tabel buat beli jasa sosmed --}}
                        @if ($recentTrx->jenisTransaksi == 'jasa-sosmed')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">Beli Jasa Sosial Media</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Nama Pengguna</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->username }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Layanan</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->jenisLayanan }}</td>
                            </tr>
                            @if (strlen($recentTrx->kustomKomentar)!=0)
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2">Link Konten</td>
                                    <td class="border lg:px-8 py-4 px-2"><a href="{{ $recentTrx->linkPost }}" style="text-decoration: underline" target="_blank">{{ $recentTrx->linkPost }}</a></td>
                                </tr>
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2">Kustom Komentar</td>
                                    <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->kustomKomentar }}</td>
                                </tr>
                            @endif
                            @if (strlen($recentTrx->linkPost)!=0 and strlen($recentTrx->kustomKomentar)==0)
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2">Link Konten</td>
                                    <td class="border lg:px-8 py-4 px-2"><a href="{{ $recentTrx->linkPost }}" style="text-decoration: underline" target="_blank">{{ $recentTrx->linkPost }}</a></td>
                                </tr>
                            @endif
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Harga Layanan</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->hargaLayanan,'0',',','.') }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jumlah Pesanan</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->jumlahJasa }}</td>
                            </tr>
                        @endif

                        {{-- tabel buat topup e-wallet  --}}
                        @if ($recentTrx->jenisTransaksi == 'topup-ewallet')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Jenis Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">Top Up E-wallet</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Platform E-Wallet</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->ewallet }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Nominal Top Up</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->nominalTopup,'0',',','.') }}</td>
                            </tr>
                        @endif
                        
                        {{-- tabel buat refund  --}}
                        @if ($recentTrx->jenisTransaksi == 'refund')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Id Transaksi Terkait</td>
                                <td class="border lg:px-8 py-4 px-2"><a href="#" target="_blank">{{ $recentTrx->idTerkait }}</a></td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Tanggal Bayar</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->tanggalBayar }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Nominal Refund</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->nominalRefund,'0',',','.') }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Bank Tujuan</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->bankTujuan }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Rekening Tujuan</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->noRek }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Pemilik Rekening</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->pemilikRekening }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Alasan Refund</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->sebab }}</td>
                            </tr>
                        @endif

                        @if ($recentTrx->jenisTransaksi != 'refund')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Kode Unik</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ $recentTrx->kodeUnik }}</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Total Bayar</td>
                                <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}</td>
                            </tr>
                        @endif

                        <tr>
                            @if ($recentTrx->jenisTransaksi == 'refund')
                            <td class="border lg:px-8 py-4 px-2">Status Refund</td>
                            <td class="border lg:px-8 py-4 px-2">
                                @if ($recentTrx->statusProses == 'WAITING')
                                    Menunggu Verifikasi Tim
                                @endif
                                @if ($recentTrx->statusProses == 'PROCESS')
                                    Sedang Proses Pencairan
                                @endif
                                @if ($recentTrx->statusProses == 'SUCCESS')
                                    <span style="color: green">Refund Berhasil</span> <br>
                                    <span> Silahkan Cek Rekening Terkait Selama 1x24 Jam </span> 
                                @endif
                                @if ($recentTrx->statusProses == 'CANCEL')
                                    <span style="color: red">Refund DiTolak</span>
                                @endif
                                @if ($recentTrx->statusProses == 'FAILED')
                                    <span style="color: red">Refund Gagal</span>
                                @endif
                            </td>
                            @else
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Status Transaksi</td>
                                <td class="border lg:px-8 py-4 px-2">
                                    @if ($recentTrx->statusProses == 'WAITING')
                                        Menunggu Pembayaran
                                    @endif
                                    @if ($recentTrx->statusProses == 'VERIFY')
                                        Pembayaran Sedang Dicek
                                    @endif
                                    @if ($recentTrx->statusProses == 'PROCESS')
                                        Sedang diProses
                                    @endif
                                    @if ($recentTrx->statusProses == 'SUCCESS')
                                        <span style="color: green">Berhasil</span>
                                    @endif
                                    @if ($recentTrx->statusProses == 'CANCEL')
                                        <span style="color: red">Dibatalkan</span>
                                    @endif
                                    @if ($recentTrx->statusProses == 'FAILED')
                                        <span style="color: red">Gagal</span>
                                    @endif
                                </td>
                            </tr>
                            @endif
                        </tr>
                        @if ($recentTrx->statusProses == 'CANCEL' and $recentTrx->sebab != '')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Sebab</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->sebab }}</td>
                            </tr>
                        @endif
                        @if ($recentTrx->statusProses == 'FAILED' and $recentTrx->sebabTolak != '')
                            <tr>
                                <td class="border lg:px-8 py-4 px-2">Sebab DiTolak</td>
                                <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->sebabTolak }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
                <div class="sm:w-full lg:w-4/12 px-4">
                    @if ($recentTrx->jenisTransaksi != 'refund')
                        <table class="shadow-lg bg-white w-full">
                            <tr>
                                <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                    @if ($recentTrx->statusProses == 'CANCEL')
                                        Transaksi Anda Telah DIBATALKAN
                                    @else
                                        @if ($recentTrx->statusProses == 'SUCCESS')
                                            Transaksi Selesai diproses
                                        @else
                                            @if ($recentTrx->statusProses == 'VERIFY')
                                                Pembayaran Sedang Diverifikasi
                                            @else
                                                @if ($recentTrx->statusProses == 'PROCESS')
                                                    Pesanan Sedang Diproses
                                                @else
                                                    @if ($recentTrx->statusProses == 'FAILED')
                                                        Transaksi ini Dibatalkan Oleh Admin <br> <br>
                                                        <span class="font-normal">Silahkan Request Refund untuk transaksi-mu</span>
                                                    @else 
                                                        @if ($recentTrx->statusProses == 'WAITING' and \Carbon\Carbon::now()->lt(Carbon\Carbon::parse( $recentTrx->created_at )->addHours(3)))
                                                            Lakukan Pembayaran Segera
                                                        @else
                                                            Transaksi Ini Sudah Expired
                                                        @endif
                                                    @endif
                                                @endif
                                            @endif
                                        @endif
                                    @endif
                                </td>
                            </tr>
                            @if (($recentTrx->statusProses != 'SUCCESS' and $recentTrx->statusProses != 'CANCEL' and $recentTrx->statusProses != 'PROCESS' and $recentTrx->statusProses != 'FAILED') and \Carbon\Carbon::now()->lt(Carbon\Carbon::parse( $recentTrx->created_at )->addHours(3)))
                                @if (($recentTrx->statusProses == 'WAITING' or $recentTrx->statusProses == 'VERIFY'))
                                    @if ($recentTrx->metodeBayar == 'tranBRI')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/bri.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">No. Rekening</td>
                                            <td class="border lg:px-8 py-4 px-2">479101015326507</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    @if ($recentTrx->metodeBayar == 'tranBNI')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/bni.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">No. Rekening</td>
                                            <td class="border lg:px-8 py-4 px-2">1394236202</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    @if ($recentTrx->metodeBayar == 'tranBCA')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/bca.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">No. Rekening</td>
                                            <td class="border lg:px-8 py-4 px-2">006790769095</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    @if ($recentTrx->metodeBayar == 'tranMandiri')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/mandiri.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">No. Rekening</td>
                                            <td class="border lg:px-8 py-4 px-2">1560018973661</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    @if ($recentTrx->metodeBayar == 'kirimGOPAY')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/gopay.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">No. Telepon</td>
                                            <td class="border lg:px-8 py-4 px-2">10804810018</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2" colspan="2"><img src="" alt="qr bayar"></td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    @if ($recentTrx->metodeBayar == 'kirimDANA')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/dana.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">Nomor Telepon</td>
                                            <td class="border lg:px-8 py-4 px-2">10804810018</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2" colspan="2"><img src="" alt="qr bayar"></td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    @if ($recentTrx->metodeBayar == 'kirimSPAY')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/spay.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">Nomor Telepon</td>
                                            <td class="border lg:px-8 py-4 px-2">10804810018</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2" colspan="2"><img src="" alt="qr bayar"></td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    @if ($recentTrx->metodeBayar == 'kirimUSDC')
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                                <img id="methodLogo" src="{{ asset('images/trx/usdc.svg') }}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">Alamat USDC</td>
                                            <td class="border lg:px-8 py-4 px-2">10804810018</td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2" colspan="2"><img src="" alt="qr bayar"></td>
                                        </tr>
                                        <tr>
                                            <td class="border lg:px-8 py-4 px-2">A.N.</td>
                                            <td class="border lg:px-8 py-4 px-2">Farras Arrafi</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="border lg:px-8 py-4 px-2">Batas Pembayaran</td>
                                        <td class="border lg:px-8 py-4 px-2">{{ Carbon\Carbon::parse( $recentTrx->created_at )->addHours(3) }}</td>
                                    </tr>
                                    <tr>
                                        <td class="border lg:px-8 py-4 px-2">Total Bayar</td>
                                        <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}</td>
                                    </tr>
                                @endif
                                @if ($recentTrx->statusProses == 'WAITING' and \Carbon\Carbon::now()->lt(Carbon\Carbon::parse( $recentTrx->created_at )->addHours(3)))
                                    {{-- tombol sudah bayar --}}
                                    <tr>
                                        <td class="border lg:px-8 py-4 px-2" colspan="2">
                                            <form action="{{ route('update_payment_status') }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="text" name="jenisTransaksi" id="jenisTransaksi" value="{{ $recentTrx->jenisTransaksi }}" hidden>
                                                <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}" hidden>
                                                <input type="text" name="statusProses" id="statusProses" value="VERIFY" hidden>
                                                <button type="submit" class="w-full text-base font-medium text-white bg-black rounded-lg py-3 px-6 duration-300 ease-in-out " > Saya Sudah Bayar </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                                {{-- tombol batalkan  --}}
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2" colspan="2">
                                        <form id="cancelRequest" action="{{ route('update_payment_status') }}">
                                            @csrf
                                            @method('PUT')
                                            <input type="text" name="jenisTransaksi" id="jenisTransaksi" value="{{ $recentTrx->jenisTransaksi }}" hidden>
                                            <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}" hidden>
                                            <input type="text" name="statusProses" id="statusProses" value="CANCEL" hidden>
                                            <textarea name="sebab" id="sebab" hidden></textarea>
                                            <button id="cancelTrx" class="w-full text-base font-medium text-white bg-black rounded-lg py-3 px-6 duration-300 ease-in-out " > Batalkan Transaksi </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                            {{-- tombol refund  --}}
                            @if (($recentTrx->statusProses == 'WAITING' or $recentTrx->statusProses == 'CANCEL') or $recentTrx->statusProses == 'FAILED')
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2" colspan="2">
                                        <button onclick="window.location.href='{{ route('refund',[$recentTrx->idTransaksi]) }}'" class="w-full text-base font-medium text-white bg-black rounded-lg py-3 px-6 duration-300 ease-in-out " > Refund </button>
                                    </td>
                                </tr>  
                            @endif
                            {{-- bukti transaksi (buat transfer bank dan bayar VA) --}}
                            @if (($recentTrx->jenisTransaksi == 'transfer-bank' or $recentTrx->jenisTransaksi == 'bayar-virtual') and $recentTrx->statusProses == 'SUCCESS')
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">Bukti Transaksi</td>
                                </tr>
                                <tr>
                                    <td class="border lg:px-8 py-4 px-2 text-center font-bold" colspan="2">
                                        <img src="{{ asset('storage/struk/transfer/struk-'.$recentTrx->idTransaksi.'.png') }}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="lg:px-8 py-4 px-2">
                                        <a href="{{ asset('storage/struk/transfer/struk-'.$recentTrx->idTransaksi.'.png') }}" download  class="hidden" id="strukDownload"></a>
                                        <button onclick="document.getElementById('strukDownload').click()" class="w-full text-base font-medium text-white bg-black rounded-lg py-3 px-6 duration-300 ease-in-out " > Download </button>
                                    </td>
                                    <td class="lg:px-8 py-4 px-2">
                                        <button id="strukShare" class="w-full text-base font-medium text-white bg-black rounded-lg py-3 px-6 duration-300 ease-in-out " > Bagikan </button>
                                        <script>
                                            const dateNow = new Date();
                                            let hour = dateNow.getHours();
                                            if (hour >= 4 && hour <= 10){
                                                greeting = 'Selamat Pagi'
                                            } else if (hour > 10 && hour <= 15){
                                                greeting = 'Selamat Siang'
                                            } else if (hour > 15 && hour <= 17){
                                                greeting = 'Selamat Sore'
                                            } else {
                                                greeting = 'Selamat malam'
                                            }
                                            @if ($recentTrx->jenisTransaksi == 'transfer-bank')
                                            explain = ', Saya baru saja transfer ke rekening anda sebesar Rp. {{ number_format((int)$recentTrx->jumlahTransfer,'0',',','.') }} melalui BeliDigi dengan maksud {{ $recentTrx->note }}. \n\nYuk transaksi hemat di BeliDigi \n Lihat detail transaksi di: '
                                            @else
                                            explain = ', Saya baru saja bayar tagihan yang ada pada virtual account institusi anda sebesar Rp. {{ number_format((int)$recentTrx->jumlahBayar,'0',',','.') }} melalui BeliDigi dengan maksud {{ $recentTrx->note }}. \n\nYuk transaksi hemat di BeliDigi \n Lihat detail transaksi di: '
                                            @endif
                                            shareButton = document.getElementById('strukShare');
                                            shareButton.addEventListener("click", async () => {
                                                const response = await fetch('{{ asset('storage/struk/transfer/struk-'.$recentTrx->idTransaksi.'.png') }}');
                                                const blob = await response.blob();
                                                const file = new File([blob], '{{ 'struk-'.$recentTrx->idTransaksi.'.png' }}', { type: "image/png" });
                                                try {
                                                    await navigator.share({
                                                    title: "Bagikan Struk #{{ $recentTrx->idTransaksi }}",
                                                    text: greeting+explain,
                                                    url: '{{ URL::current() }}',
                                                    files: [file]
                                                    });
                                                } catch (err) {
                                                    console.error("Share gagal:", err.message);
                                                }
                                            });
                                        </script>
                                    </td>
                                </tr>
                            @endif
                        </table>
                    @else
                        <table class="shadow-lg bg-white w-full">
                            <tr>
                                <td class="border lg:px-8 py-4 px-2 text-center font-bold">Bukti Transaksi</td>
                            </tr>
                            <tr>
                                <td class="border lg:px-8 py-4 px-2 text-center font-bold">
                                    <img src="{{ asset('storage/struk/refund/'.$recentTrx->fileBukti) }}" alt="">
                                </td>
                            </tr>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </section>
    @if (($recentTrx->statusProses == 'WAITING' or $recentTrx->statusProses == 'VERIFY') and $recentTrx->jenisTransaksi != 'refund')
        @if ($recentTrx->metodeBayar == 'tranBRI')
            @include('transaction.faq.bri')
        @endif
        @if ($recentTrx->metodeBayar == 'tranBNI')
            @include('transaction.faq.bni')
        @endif
        @if ($recentTrx->metodeBayar == 'tranBCA')
            @include('transaction.faq.bca')
        @endif
        @if ($recentTrx->metodeBayar == 'tranMandiri')
            @include('transaction.faq.mandiri')
        @endif
    @endif
@endsection
@section('customJs',asset('js/custom/invoice.custom.js'))
