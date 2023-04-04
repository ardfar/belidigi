<html>
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('images/favicon.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail {{ $recentTrx->idTransaksi }}</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('css/dashboard/app.css') }}" />
        <!-- END: CSS Assets-->
    </head>
    <body>
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
                <tr>
                    <td class="border lg:px-8 py-4 px-2">Biaya Admin</td>
                    <td class="border lg:px-8 py-4 px-2">Rp. {{ number_format((int)$recentTrx->biayaAdmin,'0',',','.') }}</td>
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
            @if (($recentTrx->statusProses == 'CANCEL' or $recentTrx->statusProses == 'FAILED') and $recentTrx->sebab != '')
                @if ($recentTrx->jenisTransaksi == 'refund')
                    <tr>
                        <td class="border lg:px-8 py-4 px-2">Sebab Gagal / Dibatalkan</td>
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
    </body>
</html>