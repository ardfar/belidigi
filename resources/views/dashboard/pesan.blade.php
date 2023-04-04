@extends('layouts.dashboard.main')
@section('title','Pesan Umum - BeliDigi')
@section('content')
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto pb-4">
                Data : Pesan Umum
            </h2>
        </div>
        @if ($openMessage->count() != 0)
            @foreach ($openMessage as $openMSG)
                <div class="p-5">
                    <div class="text-base font-medium truncate">{{ $openMSG->nama }}</div>
                    <div class="text-gray-500 mt-1">{{ $openMSG->created_at }}</div>
                    <div class="text-gray-600 text-justify mt-1">{{ $openMSG->pesan }}</div>
                    <div class="font-medium flex mt-5">
                        <form action="{{ route('ignoreMsg') }}" class="hidden" id="{{ $openMSG->idPesan }}-ignore">
                            @csrf
                            @method('PUT')
                            <input type="text" name="idPesan" id="idPesan" value="{{ $openMSG->idPesan }}">
                        </form>
                        <button id="ignore" class="btn btn-secondary py-1 px-2" data-target="{{ $openMSG->idPesan }}">Abaikan Pesan</button>
                        <form action="{{ route('emailBalasan') }}" class="hidden" id="{{ $openMSG->idPesan }}">
                            @csrf
                            @method('PUT')
                            <input type="text" name="idPesan" id="idPesan" value="{{ $openMSG->idPesan }}">
                            <textarea name="balasan" id="balasan" cols="30" rows="10"></textarea>
                        </form>
                        <button class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto" data-target="{{ $openMSG->idPesan }}" data-phone="{{ $openMSG->hp }}" id="balasBtn">Balas Pesan</button>
                    </div>
                </div>
            @endforeach
        @else
            <div class="p-5">
                <p class="text-center">TIDAK ADA DATA UNTUK DITAMPILKAN</p>
            </div>
        @endif
    <script>
        $("#ignore").click(function (event) {
                event.preventDefault();
                msgCode = $(this).attr('data-target')
                Swal.fire({
                    title: "Perhatian",
                    text: "Pesan akan dihapus",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Oke",
                    cancelButtonText: "Batalkan",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    a.isConfirmed && $("#"+msgCode+"-ignore").submit();
                })
            });
        $("#balasBtn").click(function (event) {
                event.preventDefault();
                msgCode = $(this).attr('data-target')
                phone = $(this).attr('data-phone')
                Swal.fire({
                    title: "Kirim Balasan",
                    html: `
                        <select name="platformSwal" id="platformSwal" class="swal2-input">
                            <option value="email" id="email">Email</option>
                            <option value="wa" id="wa">Whatsapp</option>
                        </select>
                        <textarea name="balasanSwal" id="balasanSwal" cols="30" rows="5" class="swal2-input"></textarea>
                    `,
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonText: "Kirim Balasan",
                    cancelButtonText: "Batal",
                    buttons: !0,
                    dangerMode: !0,
                }).then((a) => {
                    if ($('#wa').is(':selected')){
                        idCode = '+62'
                        msg = $('#balasanSwal').val()
                        phoneString = phone.toString()
                        phoneSlice = phoneString.substr(1)
                        phoneCountry = idCode.concat(phone)
                        msgEdit = msg.replace(/[\s,]+/g,'%20')
                        urlFix = 'https://api.whatsapp.com/send?phone='+phoneCountry+'&text='+msgEdit;
                        window.open(urlFix,'Balas Melalui Whatsapp','directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,resizable=no,width=500,height=700');
                    } else {
                        a.isConfirmed && $('#'+msgCode).submit();
                    }
                });
                $("#balasanSwal").change(function () {
                    swalValue = $("#balasanSwal").val();
                    $("#balasan").val(swalValue);
                });
            });
    </script>
    </div>
@endsection