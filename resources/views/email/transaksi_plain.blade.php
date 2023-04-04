@if($type == 'menunggu')
Menunggu Pembayaran #{{ $id }} 
Halo Kak {{ $recentTrx->nama }} 
Tinggal sedikit lagi, pesanan-mu akan diproses. Silahkan lakukan pembayaran dengan metode tertera sebelum tenggat waktu.
Tenggat Waktu : {{ Carbon\Carbon::now()->add(3,'hour')->isoFormat('dddd, D MMMM Y HH:mm:ss') }}

Detail Transaksi

@if($recentTrx->jenisTransaksi == 'transfer-bank')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Transfer Bank
Bank Tujuan: {{ $recentTrx->bankTujuan }}
Rekening Tujuan: {{ $recentTrx->rekTujuan }}
Pemilik Rekening: {{ $recentTrx->pemilikTujuan }}
Jumlah Transfer: Rp. {{ number_format((int)$recentTrx->jumlahTransfer,'0',',','.') }}
Biaya Admin: Rp. 500
Kode Unik:Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }}
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'bayar-virtual')
Kode Transaksi: #{{ $recentTrx->idTransaksi }} 
Oleh: {{ $recentTrx->nama }} 
Email: {{ $recentTrx->email }} 
No. Telepon: {{ $recentTrx->hp }} 
Jenis Transaksi: Bayar Virtual Account 
Jenis Virtual Account: {{ $recentTrx->jenisVA }} 
Nomor Virtual Account: {{ $recentTrx->noVA }} 
Pemilik Virtual Account: {{ $recentTrx->pemilikVA }} 
Jumlah Bayar: Rp. {{ number_format((int)$recentTrx->jumlahBayar,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'beli-pulsa')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Beli Pulsa
Operator SIM: {{ $recentTrx->operator }}
Nominal Pulsa: Rp. {{ number_format((int)$recentTrx->jumlahPulsa,'0',',','.') }} 
Harga Pulsa: Rp. {{ number_format((int)$recentTrx->hargaPulsa,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'beli-kuota')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Beli Kuota
Operator SIM: {{ $recentTrx->operator }}
Detail Kuota: {{ $recentTrx->detailKuota }}
Harga Kuota: Rp. {{ number_format((int)$recentTrx->hargaKuota,'0',',','.') }}
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }}
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'lisensi-digital')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Beli Lisensi Digital
Jenis Lisensi: {{ $recentTrx->jenisLisensi }}
Harga Lisensi: Rp. {{ number_format((int)$recentTrx->hargaLisensi,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'jasa-sosmed')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
Jenis Transaksi: Beli Jasa Sosial Media
Nama Pengguna: {{ $recentTrx->username }}
Jenis Layanan: {{ $recentTrx->jenisLayanan }}
@if ($recentTrx->linkPost != '')
Link Konten{{ $recentTrx->linkPost }}
@endif
Harga Layanan: Rp. {{ number_format((int)$recentTrx->hargaLayanan,'0',',','.') }} 
Jumlah Pesanan: {{ $recentTrx->jumlahJasa }}
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'topup-ewallet')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Top Up E-Wallet
Platform E-Wallet: {{ $recentTrx->ewallet }}
Nominal Top Up: Rp. {{ number_format((int)$recentTrx->nominalTopup,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
Transaksi-mu Bermasalah? hubungi kami melalui: 
@endif
@endif
@if ($type == 'proses')
Pembayaran Diterima
Halo Kak {{ $recentTrx->nama }},
Pembayaran atas transaksi #{{ $recentTrx->idTransaksi }} telah diterima dan diverifikasi. Pesanan kakak akan segera diproses oleh tim BeliDigi. Silahkan cek transaksi di halaman website kami.
Transaksi-mu Bermasalah? hubungi kami melalui:
@endif
@if ($type == 'berhasil')
Pesanan #{{ $id }} Berhasil Diproses
Halo Kak {{ $recentTrx->nama }}
Transaksi kamu sudah berhasil. Bagikan pengalaman-mu menggunakan BeliDigi di sosial media-mu dengan men-tag BeliDigi dan dapatkan hadiah menarik setiap bulannya.

Detail Transaksi

@if($recentTrx->jenisTransaksi == 'transfer-bank')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Transfer Bank
Bank Tujuan: {{ $recentTrx->bankTujuan }}
Rekening Tujuan: {{ $recentTrx->rekTujuan }}
Pemilik Rekening: {{ $recentTrx->pemilikTujuan }}
Jumlah Transfer: Rp. {{ number_format((int)$recentTrx->jumlahTransfer,'0',',','.') }}
Biaya Admin: Rp. 500
Kode Unik:Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }}
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'bayar-virtual')
Kode Transaksi: #{{ $recentTrx->idTransaksi }} 
Oleh: {{ $recentTrx->nama }} 
Email: {{ $recentTrx->email }} 
No. Telepon: {{ $recentTrx->hp }} 
Jenis Transaksi: Bayar Virtual Account 
Jenis Virtual Account: {{ $recentTrx->jenisVA }} 
Nomor Virtual Account: {{ $recentTrx->noVA }} 
Pemilik Virtual Account: {{ $recentTrx->pemilikVA }} 
Jumlah Bayar: Rp. {{ number_format((int)$recentTrx->jumlahBayar,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'beli-pulsa')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Beli Pulsa
Operator SIM: {{ $recentTrx->operator }}
Nominal Pulsa: Rp. {{ number_format((int)$recentTrx->jumlahPulsa,'0',',','.') }} 
Harga Pulsa: Rp. {{ number_format((int)$recentTrx->hargaPulsa,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'beli-kuota')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Beli Kuota
Operator SIM: {{ $recentTrx->operator }}
Detail Kuota: {{ $recentTrx->detailKuota }}
Harga Kuota: Rp. {{ number_format((int)$recentTrx->hargaKuota,'0',',','.') }}
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }}
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'lisensi-digital')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Beli Lisensi Digital
Jenis Lisensi: {{ $recentTrx->jenisLisensi }}
Harga Lisensi: Rp. {{ number_format((int)$recentTrx->hargaLisensi,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'jasa-sosmed')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
Jenis Transaksi: Beli Jasa Sosial Media
Nama Pengguna: {{ $recentTrx->username }}
Jenis Layanan: {{ $recentTrx->jenisLayanan }}
@if ($recentTrx->linkPost != '')
Link Konten{{ $recentTrx->linkPost }}
@endif
Harga Layanan: Rp. {{ number_format((int)$recentTrx->hargaLayanan,'0',',','.') }} 
Jumlah Pesanan: {{ $recentTrx->jumlahJasa }}
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
@endif
@if($recentTrx->jenisTransaksi == 'topup-ewallet')
Kode Transaksi: #{{ $recentTrx->idTransaksi }}
Oleh: {{ $recentTrx->nama }}
Email: {{ $recentTrx->email }}
No. Telepon: {{ $recentTrx->hp }}
Jenis Transaksi: Top Up E-Wallet
Platform E-Wallet: {{ $recentTrx->ewallet }}
Nominal Top Up: Rp. {{ number_format((int)$recentTrx->nominalTopup,'0',',','.') }} 
Kode Unik: Rp. {{ number_format((int)$recentTrx->kodeUnik,'0',',','.') }} 
Total Bayar: Rp. {{ number_format((int)$recentTrx->totalBayar,'0',',','.') }}
Transaksi-mu Bermasalah? hubungi kami melalui:
@endif
@endif
@if ($type == 'batal')
Transaksi #{{ $recentTrx->idTransaksi }} Telah Dibatalkan
Halo Kak {{ $recentTrx->nama }},
Kami telah mendapatkan permintaan kakak untuk membatalkan transaksi #{{ $recentTrx->idTransaksi }} Kami sangat menyayangkan hal ini. Jika terdapat masalah pada transaksi kakak ataupun pertanyaan, silahkan balas email ini atau hubungi kami melalui hotline dibawah ini.
Ingin Komplain? Hubungi kami melalui:
@endif
@if ($type == 'tolak')
Transaksi #{{ $recentTrx->idTransaksi }} Telah Dibatalkan
Halo Kak {{ $recentTrx->nama }},
Tim kami telah membatalkan transaksi kakak dan akan mengirimkan kembali nominal yang dibayarkan jika kakak telah membayar untuk transaksi ini. 
Penyebab transaksi ini dibatalkan:"{{ $recentTrx->sebabTolak }}"
Ingin Komplain? Hubungi kami melalui:
@endif
Whatsapp : https://wa.me/+6289531503505 
Instagram : https://instagram.com/belidigi 
Twitter : @Belidigi
