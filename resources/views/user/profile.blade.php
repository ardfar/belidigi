@extends('layouts.sublayout.page')
@section('title','Your Profile - Belidigi')
@section('page_title','Your Profile')
@section('customCssLine')
#profile-image{
    width: 200px; 
    height: 200px;  
    background-repeat: no-repeat; 
    background-size: cover
  }
  #profile-image-edit{
    opacity: 0;
    position: relative;
    top: 0;
    width: 200px; 
    height:200px;
    z-index: 0;
    background: rgba(0,0,0,.5);
    transition: .2s;
  }
  #profile-image-edit svg{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    stroke: white;
    stroke-width: 3px;
  }
  #profile-image:hover #profile-image-edit{
    opacity: 1;
    z-index: 1;
  }
@endsection
@section('page_content')
<section class="py-20 md:py-[120px] relative">
    <div class="container px-4 py-4">
        {{-- greeting --}}
        <div class="text-center mx-auto mb-[60px] max-w-[620px]">
            <h2 class=" font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4 ">
                @if (Carbon\Carbon::now()->hour >= 4 and Carbon\Carbon::now()->hour <= 10)
                    Selamat Pagi
                @else
                    @if (Carbon\Carbon::now()->hour > 10 and Carbon\Carbon::now()->hour <= 15)
                        Selamat Siang
                    @else
                        @if (Carbon\Carbon::now()->hour > 15 and Carbon\Carbon::now()->hour <= 17)
                            Selamat Sore
                        @else
                            Selamat Malam
                        @endif
                    @endif
                @endif
                 Kak {{ strtok(Auth::user()->name," ") }}
            </h2>
        </div>
        {{-- profile picture  --}}
        <div class="flex flex-wrap justify-center pb-10">
            <div class="rounded-full overflow-hidden" id="profile-image" style="background-image: url('{{ $pp_link }}?{{ time() }}');">
                <div class="rounded-full overflow-hidden" id="profile-image-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                </div>
            </div>
            <form action="{{ route('change_user_profile_photo') }}" method="post" hidden id="pp_change" method="post" enctype="multipart/form-data">
                @csrf
                <span id="foto-profil_area"><input type="file" name="foto-profil" id="foto-profil" required></span>
            </form>
            <script>
                $("#profile-image-edit").click(function(a){
                    a.preventDefault();
                    Swal.fire({
                        title:"Apakah Anda Yakin?",
                        icon:"warning",
                        html:"<div class='w-full'><label for='fileSwal'>Pilih foto profil baru</label><input style='margin-bottom:25px; padding-top:15px' class='file block text-sm text-gray-500 file:mr-4 file:rounded-md file:border-0 file:font-semibold file:text-blue-700' type='file' accept='.png,.jpg' id='fileSwal' name='fileSwal' placeholder='Silahkan pilih file untuk foto profil baru'></div>",
                        showDenyButton:!0,
                        confirmButtonText:"Update Foto Profil",
                        denyButtonText:"Batalkan",
                        buttons:!0,
                        dangerMode:!0,
                    }).then(a=>{a.isConfirmed&&$("#pp_change").submit()});
                    $('#fileSwal').change(function(){
                        var clone = $(this).clone();
                        clone.attr({id: 'foto-profil',name: 'foto-profil'});
                        $('#foto-profil_area').html(clone);
                    });
                });
            </script>
        </div>
        {{-- line of identity --}}
        <div class="flex flex-wrap justify-center">
            <div style="display: inline; line-height:2.5rem">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: inline" class="mr-2 ml-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user block mx-auto"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <p style="display: inline-block">
                    {{ Auth::user()->username }}
                </p>
            </div>
            <div style="display: inline; line-height:2.5rem">
                <svg style="display: inline" class="mr-2 ml-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <p style="display: inline-block">
                    {{ Auth::user()->hp }}
                </p>
            </div>
            <div style="display: inline; line-height:2.5rem">
                <svg xmlns="http://www.w3.org/2000/svg" style="display:inline" class="mr-2 ml-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <p style="display: inline-block">
                    {{ Auth::user()->email }}
                </p>
            </div>
            <div style="display: inline; line-height:2.5rem">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: inline" class="mr-2 ml-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" ><path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path><polyline points="8 10 12 14 16 10"></polyline></svg>
                <p style="display: inline-block">
                    {{ Auth::user()->trx_success }} Transaksi Berhasil
                </p>
            </div>
            <div style="display: inline; line-height:2.5rem">
                <svg xmlns="http://www.w3.org/2000/svg" style="display: inline" class="mr-2 ml-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-award block mx-auto"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                <p style="display: inline-block">
                    {{ Str::ucfirst(Auth::user()->membership) }}
                </p>
            </div>
        </div>
        <div class="flex flex-wrap justify-center pb-10 py-4">
            <a style="cursor: pointer" id="edit-data"><span><b>Edit Data Diri</b> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="display: inline"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></span></a>
            <form id="edit-data-form" method="post" action="{{ route('change_user_data') }}" hidden >
                @csrf
                <input type="text" id="email" name="email" value="{{ Auth::user()->email }}">
                <input type="number" id="hp" name="hp" value="{{ Auth::user()->hp }}">
            </form>
            <script>
                $("#edit-data").click(function(a){
                    a.preventDefault();
                    Swal.fire({
                        title:"Apakah Anda Yakin?",
                        icon:"warning",
                        html:"<div class='w-full'><label for='emailSwal'>Masukkan email baru</label><input class='swal2-input' style='margin-bottom:25px; text-align:center' type='text' id='emailSwal' name='emailSwal' value='{{ Auth::user()->email }}'><label for='hpSwal'>Masukkan nomor telepon baru</label><input class='swal2-input' type='number' id='hpSwal' name='hpSwal' value='{{ Auth::user()->hp }}' style='text-align:center'></div>",
                        showDenyButton:!0,
                        confirmButtonText:"Update Data",
                        denyButtonText:"Batalkan",
                        buttons:!0,
                        dangerMode:!0,
                    }).then(a=>{a.isConfirmed&&$("#edit-data-form").submit()});
                    $("#emailSwal").change(function(){
                        swalValue= $("#emailSwal").val();
                        $("#email").val(swalValue)
                    })
                    $("#hpSwal").change(function(){
                        swalValue= $("#hpSwal").val();
                        $("#hp").val(swalValue)
                    })
                });
            </script>
        </div>
        {{-- membership bar --}}
        <div>
            <div class="text-center mx-auto max-w-[620px]">
                <span class="font-semibold text-lg text-primary mb-2 block">
                    @if (Auth::user()->trx_success < 150)
                        {{ ((Auth::user()->trx_success < 50) ? (50-Auth::user()->trx_success) : ((Auth::user()->trx_success >= 50 and Auth::user()->trx_success < 150) ? (150-Auth::user()->trx_success) : '')) }}x Transaksi lagi untuk menjadi {{ ((Auth::user()->trx_success < 50) ? "Warga Tetap" : ((Auth::user()->trx_success >= 50 and Auth::user()->trx_success <= 150) ? "Juragan" : '')) }}
                    @else
                        Kamu sudah menjadi JURAGAN sekarang, enjoy the life!
                    @endif
                </span>
            </div>
            @if (Auth::user()->membership != 'juragan')
            <style>
                .member-bar{
                    height:10px;
                    border-radius: 100px;
                }
            </style>
                <div class="flex flex-wrap justify-center pb-10">
                    <div style="width: 80%;background:gray;border-radius: 100px;height:10px;overflow:hidden">
                        <div class="member-bar" style="background: {{ ((Auth::user()->membership == 'pendatang') ? "red" : ((Auth::user()->membership == 'warga tetap') ? "blue" : "")) }}; width: calc({{ ((Auth::user()->trx_success < 50) ? (Auth::user()->trx_success/50) : ((Auth::user()->trx_success >= 50 and Auth::user()->trx_success <= 150) ? (Auth::user()->trx_success/150) : '')) }}*100%)"></div>
                    </div>
                </div>
            @endif
        </div>
        {{-- some of histories group --}}
        <div class="flex flex-wrap -mx-4">
            {{-- history title  --}}
            <div class="w-full px-4">
              <div style="padding-left:70px;padding-top: 60px;padding-bottom: 60px">
                <h2 class="font-bold text-3xl sm:text-4xl md:text-[42px] text-dark mb-4 " > Riwayat Transaksi</h2>
                <a href="{{ route('riwayat-transaksi') }}"><span>Lihat Lebih Banyak <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="display: inline"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg></span></a>
              </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <div class="w-full lg:w-full px-4">
                {{-- histroy data  --}}
                <div class="cursor-pointer single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-2 sm:p-8 mb-2">
                    <div class="faq-btn flex items-center w-full text-left">
                      <div class="w-full" id="gridTable">
                          <div style="text-align: center;font-weight:bolder">TIMESTAMP</div>
                          <div style="text-align: center;font-weight:bolder">JENIS TRANSAKSI</div>
                          <div id="specialGridTable" style="text-align: center;font-weight:bolder">TOTAL BAYAR</div>
                          <div style="text-align: center;font-weight:bolder">METODE BAYAR</div>
                          <div id="specialGridTable" style="text-align: center;font-weight:bolder">STATUS</div>
                      </div>
                    </div>
                </div>
              @foreach ($generalPurchaseInfo as $generalInfo)
                <div class="cursor-pointer single-faq w-full bg-white border border-[#F3F4FE] rounded-lg p-2 sm:p-8 mb-8 wow fadeInUp" data-wow-delay=".1s " onclick="window.location.href = '{{ route('invoice',[$generalInfo->jenisTransaksi,$generalInfo->idTransaksi,$generalInfo->accessCode]) }}'">
                    <div class="faq-btn flex items-center w-full text-left">
                      <div class="w-full" id="gridTable">
                          <div style="text-align: center">{{ $generalInfo->created_at }}</div>
                          <div style="text-align: center">{{ $generalInfo->jenisTransaksi }}</div>
                          <div id="specialGridTable" style="text-align: center">Rp. {{ number_format((int)$generalInfo->totalBayar,'0',',','.') }}</div>
                          <div style="text-align: center">{{ $generalInfo->metodeBayar }}</div>
                          <div id="specialGridTable" style="text-align: center">{{ $generalInfo->status }}</div>
                      </div>
                    </div>
                </div>
              @endforeach
            </div>
        </div>
    </div>
</section>
@endsection