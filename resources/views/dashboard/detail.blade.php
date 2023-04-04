@extends('layouts.dashboard.main')
@section('title','Detail #'.$recentTrx->idTransaksi.'- BeliDigi')
@section('content')
<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto pb-4">
            Detail Transaksi #{{ $recentTrx->idTransaksi }}
        </h2>
    </div>
    <div class="w-full">
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
                    <td class="border lg:px-8 py-4 px-2">Jenis Kuota</td>
                    <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->jenisKuota }}</td>
                </tr>
                <tr>
                    <td class="border lg:px-8 py-4 px-2">Kode Kuota</td>
                    <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->kodeKuota }}</td>
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
                <tr>
                    <td class="border lg:px-8 py-4 px-2">Biaya Admin</td>
                    <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->biayaAdmin,'0',',','.') }}</td>
                </tr>
            @endif
            
            {{-- tabel buat refund  --}}
            @if ($recentTrx->jenisTransaksi == 'refund')
                <tr>
                    <td class="border lg:px-8 py-4 px-2">Id Transaksi Terkait</td>
                    <td class="border lg:px-8 py-4 px-2"><p class="underline cursor-pointer" onclick="window.open('{{ route('refundTerkait',[$recentTrx->idTerkait]) }}','detail #{{ $recentTrx->idTerkait }}','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,resizable=no,width=500,height=700');">#{{ $recentTrx->idTerkait }}</p></td>
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
                            @if ($recentTrx->statusProses == 'PROCESS')
                                Sedang Proses
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
            @if ($recentTrx->statusProses == 'FAILED' or $recentTrx->statusProses == 'CANCEL')
                <tr>
                    <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->statusProses == 'FAILED' ? 'Penyebab Ditolak' : 'Penyebab Membatalkan' }}</td>
                    <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->statusProses == 'FAILED' ? $recentTrx->sebabTolak : $recentTrx->sebab }}</td>
                </tr>
            @endif
            @if (($recentTrx->statusProses == 'CANCEL' or $recentTrx->statusProses == 'FAILED') and $recentTrx->sebab != '')
                @if ($recentTrx->jenisTransaksi == 'refund')
                    <tr>
                        <td class="border lg:px-8 py-4 px-2">Sebab Ditolak</td>
                        <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->sebabBatal }}</td>
                    </tr>
                @else
                    <tr>
                        <td class="border lg:px-8 py-4 px-2">Sebab Gagal / Dibatalkan</td>
                        <td class="border lg:px-8 py-4 px-2">{{ $recentTrx->sebab }}</td>
                    </tr>
                @endif
            @endif
        </table>
        @if ($recentTrx->jenisTransaksi == 'refund')
        <table class="shadow-lg bg-white w-full">
            <tr>
                <td class="border lg:px-8 py-4 px-2 w-1/2">Bukti Transaksi</td>
                <td class="border lg:px-8 py-4 px-2 w-1/2"><img class="w-full" src="{{ asset('storage/struk/'.$recentTrx->fileBukti) }}" alt=""></td>
            </tr>
        </table>
        @endif
    </div>
    @if (Route::is('verifyDetail'))
        <form action="{{ route('verifyConfirm') }}" class="hidden" id="verifyConfirm">
            <input type="text" name="jenisTransaksi" id="jenisTransaksi" value="{{ $recentTrx->jenisTransaksi }}">
            <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
        </form>
        <form action="{{ route('verifyDecline') }}" class="hidden" id="verifyDecline">
            <input type="text" name="jenisTransaksi" id="jenisTransaksi" value="{{ $recentTrx->jenisTransaksi }}">
            <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
            <input type="text" name="sebab" id="sebab">
        </form>
        <button class="btn btn-primary w-32 mr-2 mb-2 mt-4" onclick="window.location.href='{{ route('verify') }}'"><i data-feather="external-link" class="w-4 h-4 mr-2"></i> Kembali </button>
        @if ($recentTrx->statusProses == 'VERIFY')
            <button class="btn btn-success w-32 mr-2 mb-2 mt-4" id="confirm" data-code="{{ $recentTrx->idTransaksi }}"><i data-feather="thumbs-up" class="w-4 h-4 mr-2"></i> Konfirmasi </button>
            <button class="btn btn-danger w-32 mr-2 mb-2 mt-4" id="cancelTrx"><i data-feather="delete" class="w-4 h-4 mr-2"></i> Tolak </button>
        @endif
    @else
        @if (Route::is('processDetail'))
            <button class="btn btn-primary w-32 mr-2 mb-2 mt-4" onclick="window.location.href='{{ route('process') }}'"><i data-feather="external-link" class="w-4 h-4 mr-2"></i> Kembali </button>
            @if ($recentTrx->statusProses == 'PROCESS')
                @if ($recentTrx->jenisTransaksi == 'jasa-sosmed')
                    <form action="{{ route('processAPIBuy') }}" class="hidden" id="apiBuy">
                        <input type="text" name="kodeProduk" id="kodeProduk" value="{{ $recentTrx->kodeProduk }}">
                        <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
                    </form>
                    <button class="btn btn-dark w-50 mr-2 mb-2" onclick="document.getElementById('apiBuy').submit();"> <i data-feather="shopping-cart" class="w-4 h-4 mr-2"></i> Proses Pesanan (DJava API) </button>
                @elseif ($recentTrx->jenisTransaksi == 'lisensi-digital')
                    <form action="{{ route('processSuccess') }}" class="hidden" id="processSuccess">
                        <input type="text" name="jenisTransaksi" id="jenisTransaksi" value="{{ $recentTrx->jenisTransaksi }}">
                        <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
                        <input type="text" name="kodeLisensi" id="kodeLisensi">
                    </form>
                    <button class="btn btn-success w-fit mr-2 mb-2 mt-4" id="confirm-code" data-code="{{ $recentTrx->idTransaksi }}"><i data-feather="thumbs-up" class="w-4 h-4 mr-2"></i> Selesaikan Pesanan </button>
                @else 
                    <form action="{{ route('processSuccess') }}" method="POST" class="hidden" id="processSuccess" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <input type="text" name="jenisTransaksi" id="jenisTransaksi" value="{{ $recentTrx->jenisTransaksi }}">
                        <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
                        <span id="fileBukti_area"><input type="file" name="fileBukti" id="fileBukti" required></span>
                    </form>
                    <button class="btn btn-success w-fit mr-2 mb-2 mt-4" id="confirm-file" data-code="{{ $recentTrx->idTransaksi }}"><i data-feather="thumbs-up" class="w-4 h-4 mr-2"></i> Selesaikan Pesanan </button>
                @endif
                <form action="{{ route('processAbort') }}" class="hidden" id="processAbort">
                    <input type="text" name="jenisTransaksi" id="jenisTransaksi" value="{{ $recentTrx->jenisTransaksi }}">
                    <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
                    <input type="text" name="sebab" id="sebab">
                </form>
                <button class="btn btn-danger w-32 mr-2 mb-2 mt-4" id="cancelTrx"><i data-feather="delete" class="w-4 h-4 mr-2"></i> Batalkan </button>
            @endif
        @else
            @if (Route::is('refundDetail'))
                <form action="{{ route('refundProcess') }}" class="hidden" id="refundProcess">
                    <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
                </form>
                <form action="{{ route('refundSuccess') }}" class="hidden" id="refundSuccess">
                    <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
                </form>
                <form action="{{ route('refundAbort') }}" class="hidden" id="refundAbort">
                    <input type="text" name="idTransaksi" id="idTransaksi" value="{{ $recentTrx->idTransaksi }}">
                    <input type="text" name="sebab" id="sebab">
                </form>
                <button class="btn btn-primary w-32 mr-2 mb-2 mt-4" onclick="window.location.href='{{ route('refundDashboard') }}'"><i data-feather="external-link" class="w-4 h-4 mr-2"></i> Kembali </button>
                @if ($recentTrx->statusProses == 'WAITING')
                    <button class="btn btn-success w-fit mr-2 mb-2 mt-4" id="processRefund" data-code="{{ $recentTrx->idTransaksi }}"><i data-feather="thumbs-up" class="w-4 h-4 mr-2"></i> Proses </button>
                    <button class="btn btn-danger w-32 mr-2 mb-2 mt-4" id="cancelRefund"><i data-feather="delete" class="w-4 h-4 mr-2"></i> Tolak </button>
                @else
                    @if ($recentTrx->statusProses == 'PROCESS')
                        <button class="btn btn-success w-fit mr-2 mb-2 mt-4" id="finishRefund" data-code="{{ $recentTrx->idTransaksi }}"><i data-feather="thumbs-up" class="w-4 h-4 mr-2"></i> Selesaikan </button>
                        <button class="btn btn-danger w-32 mr-2 mb-2 mt-4" id="cancelRefund"><i data-feather="delete" class="w-4 h-4 mr-2"></i> Tolak </button>
                    @endif
                @endif
            @else 
                @if (Route::is('createDetail'))
                    <button class="btn btn-primary w-32 mr-2 mb-2 mt-4" onclick="window.location.href='{{ route('created') }}'"><i data-feather="external-link" class="w-4 h-4 mr-2"></i> Kembali </button>
                @else 
                    <button class="btn btn-primary w-32 mr-2 mb-2 mt-4" onclick="window.location.href='{{ route('cancel') }}'"><i data-feather="external-link" class="w-4 h-4 mr-2"></i> Kembali </button>
                @endif
            @endif
        @endif
    @endif
</div>
<script>
    @if (Route::is('verifyDetail',[$recentTrx->jenisTransaksi,$recentTrx->idTransaksi]))
        $("#cancelTrx").click(function (event) {
                event.preventDefault();
                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    html: "<input id='sebabSwal' class='swal2-input' type='text' placeholder='Tuliskan sebab kamu membatalkan transaksi ini'>",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Iya, Batalkan",
                    cancelButtonText: "Tidak",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#verifyDecline").submit();
                });
                $("#sebabSwal").change(function () {
                    swalValue = $("#sebabSwal").val();
                    $("#sebab").val(swalValue);
                });
            });
            $("#confirm").click(function (event) {
                event.preventDefault();
                trxCode = $(this).attr('data-code')
                Swal.fire({
                    title: "Perhatian",
                    text: "Dengan ini status pembayaran #"+trxCode+" berubah menjadi 'SUDAH BAYAR'",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oke",
                    cancelButtonText: "Batalkan",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#verifyConfirm").submit();
                })
            });
    @else
        @if (Route::is('processDetail',[$recentTrx->jenisTransaksi,$recentTrx->idTransaksi]))
        $("#cancelTrx").click(function (event) {
                event.preventDefault();
                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    html: "<input id='sebabSwal' class='swal2-input' type='text' placeholder='Tuliskan sebab kamu membatalkan transaksi ini'>",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Iya, Batalkan",
                    cancelButtonText: "Tidak",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#processAbort").submit();
                });
                $("#sebabSwal").change(function () {
                    swalValue = $("#sebabSwal").val();
                    $("#sebab").val(swalValue);
                });
            });
            $("#confirm-file").click(function (event) {
                event.preventDefault();
                trxCode = $(this).attr('data-code')
                Swal.fire({
                    title: "Perhatian",
                    html: `<div class="w-full"><label>Masukan File Bukti Transaksi Untuk Menyelesaikan Transaksi</label><input id="fileSwal" class="w-auto block pt-6" type="file" accept=".png,.jpg.svg,.pdf" required></div>`,
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oke",
                    cancelButtonText: "Kembali",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#processSuccess").submit();
                })
                $('#fileSwal').change(function(){
                    var clone = $(this).clone();
                    clone.attr({id: 'fileBukti',name: 'fileBukti'});
                    $('#fileBukti_area').html(clone);
                });
            });
            $("#confirm-code").click(function (event) {
                event.preventDefault();
                trxCode = $(this).attr('data-code')
                Swal.fire({
                    title: "Perhatian",
                    html: `<label>Masukan Kode Lisensi Untuk Menyelesaikan Transaksi</label><input id="codeSwal" class="swal2-input" type="text" placeholder="Masukan Kode Lisensi" required>`,
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oke",
                    cancelButtonText: "Kembali",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#processSuccess").submit();
                })
                $('#codeSwal').change(function (){
                    $('#kodeLisensi').val($('#codeSwal').val());
                });
            });
        @else
            $("#cancelRefund").click(function (event) {
                event.preventDefault();
                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    html: "<input id='sebabSwal' class='swal2-input' type='text' placeholder='Tuliskan penyebabnya'>",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Iya, Tolak",
                    cancelButtonText: "Tidak",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#refundAbort").submit();
                });
                $("#sebabSwal").change(function () {
                    swalValue = $("#sebabSwal").val();
                    $("#sebab").val(swalValue);
                });
            });
            $("#processRefund").click(function (event) {
                event.preventDefault();
                trxCode = $(this).attr('data-code')
                Swal.fire({
                    title: "Perhatian",
                    text: "Dengan ini status pembayaran #"+trxCode+" berubah menjadi 'DIPROSES'",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oke",
                    cancelButtonText: "Batalkan",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#refundProcess").submit();
                })
            });
            $("#finishRefund").click(function (event) {
                event.preventDefault();
                trxCode = $(this).attr('data-code')
                Swal.fire({
                    title: "Perhatian",
                    text: "Dengan ini status pembayaran #"+trxCode+" berubah menjadi 'BERHASIL'",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oke",
                    cancelButtonText: "Batalkan",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#refundSuccess").submit();
                })
            });
        @endif
    @endif
</script>
@endsection