@extends('layouts.sublayout.page')
@section('title','Daftar - Belidigi')
@section('page_title','Daftar')
@section('page_content')
<section class="bg-[#F4F7FF] py-14 lg:py-20">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="max-w-[525px] mx-auto text-center bg-white rounded-lg relative overflow-hidden py-14 px-8 sm:px-12 md:px-[60px] wow fadeInUp" data-wow-delay=".15s">
                    <div class="mb-10 text-center">
                        <a href="javascript:void(0)" class="inline-block max-w-[160px] mx-auto"> <img src="{{ asset('images/logo/logo.svg') }}" alt="logo" /> </a>
                    </div>
                    <form action="{{ route('add_new_user') }}" method="POST" id="new_user_form">
                        @csrf
                        <div class="mb-6">
                            <input type="text" placeholder="Username" id="username" name="username" value="{{ old('username') }}" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" />
                            <p class="form-help text-sm py-1 text-left" style="padding-top: 10px">Masukan Username yang Unik</p>
                        </div>
                        <div class="mb-6">
                            <input type="text" placeholder="Nama atau Alias" id="nama" name="nama" value="{{ old('nama') }}" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" />
                            <p class="form-help text-sm py-1 text-left" style="padding-top: 10px" id="nameStatus">Masukan nama atau alias minimal 8 karakter</p>
                        </div>
                        <div class="mb-6">
                            <input type="email" placeholder="Email" id="email" name="email" value="{{ old('email') }}" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" />
                            <p class="form-help text-sm py-1 text-left" style="padding-top: 10px" id="emailStatus">Masukan Email Valid</p>
                        </div>
                        <div class="mb-6">
                            <input type="number" placeholder="No. Handphone" id="hp" name="hp" value="{{ old('hp') }}" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" />
                            <p class="form-help text-sm py-1 text-left" style="padding-top: 10px" id="hpStatus">Masukan Nomor telepon yang terhubung dengan Whatsapp</p>
                        </div>
                        <div class="mb-6">
                            <input type="password" placeholder="Password" id="password" name="password" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" />
                            <ul class="text-left text-sm" style="padding-top: 10px">
                                <li id="EChar"><span id="EChar_sym"></span> Minimal 8 Karakter</li>
                                <li id="UpChar"><span id="UpChar_sym"></span> Terdapat Huruf Kapital</li>
                                <li id="LoChar"><span id="LoChar_sym"></span> Terdapat Huruf Kecil</li>
                                <li id="NumChar"><span id="NumChar_sym"></span> Terdapat Angka</li>
                                <li id="SysChar"><span id="SysChar_sym"></span> Terdapat Simbol</li>
                            </ul>
                        </div>
                        <div class="mb-6">
                            <input type="password" placeholder="Ketik Ulang Password" id="repassword" name="repassword" class="w-full rounded-md border bordder-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-body-color placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-primary transition" />
                            <p class="form-help text-sm py-1 text-left" style="padding-top: 10px" id="repassStatus">Harap Ketik Kembali Password</p>
                        </div>
                        <div class="mb-10">
                            <button id="addUser_btn" class="w-full rounded-md border bordder-primary py-3 px-5 bg-primary text-base text-white cursor-pointer hover:shadow-md transition duration-300 ease-in-out" />Daftar</button>
                        </div>
                    </form>
                    <script>
                        var upperCase = new RegExp('[A-Z]');
                        var lowerCase = new RegExp('[a-z]');
                        var numbers = new RegExp('[0-9]');
                        var crossEntity = '&#10060;';
                        var greenMarkEntity = '&#9989;';
                        var specialChar = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
                        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                        $('#email').on('input',function(){
                            if( !emailReg.test($('#email').val()) ) {
                                $('#email').css('border-color','red');
                                $('#emailStatus').css('color','red');
                                $('#emailStatus').html('Email Tidak Terdeteksi');
                            } else {
                                $('#email').css('border-color','#00d26a');
                                $('#emailStatus').css('color','black');
                                $('#emailStatus').html('Email Valid Terdeteksi');
                            }
                        })
                        $('#nama').on('input',function(){
                            if( $('#nama').val().length < 8 ) {
                                $('#nama').css('border-color','red');
                                $('#nameStatus').css('color','red');
                                $('#nameStatus').html(crossEntity+' minimal 8 karakter');
                            } else {
                                $('#nama').css('border-color','#00d26a');
                                $('#nameStatus').css('color','black');
                                $('#nameStatus').html(greenMarkEntity+' minimal 8 karakter');
                            }
                        })
                        $('#repassword').on('input',function(){
                            if ($('#repassword').val() != $('#password').val()){
                                $('#repassword').css('border-color','red');
                                $('#repassStatus').css('color','red');
                                $('#repassStatus').html('Password Belum Sama');
                            } else {
                                $('#repassword').css('border-color','#00d26a');
                                $('#repassStatus').css('color','black');
                                $('#repassStatus').html('Password Telah Sesuai');
                            }
                        });

                        $('#password').on('input', function(){
                            if ($('#password').val().length < 8){
                                $('#EChar').css('color','red');
                                $('#EChar_sym').html(crossEntity);
                            } else {
                                $('#EChar').css('color','black');
                                $('#EChar_sym').html(greenMarkEntity);
                            }

                            if (!$('#password').val().match(upperCase)){
                                $('#UpChar').css('color','red');
                                $('#UpChar_sym').html(crossEntity);
                            } else {
                                $('#UpChar').css('color','black');
                                $('#UpChar_sym').html(greenMarkEntity);
                            }

                            if (!$('#password').val().match(lowerCase)){
                                $('#LoChar').css('color','red');
                                $('#LoChar_sym').html(crossEntity);
                            } else {
                                $('#LoChar').css('color','black');
                                $('#LoChar_sym').html(greenMarkEntity);
                            }

                            if (!$('#password').val().match(numbers)){
                                $('#NumChar').css('color','red');
                                $('#NumChar_sym').html(crossEntity);
                            } else {
                                $('#NumChar').css('color','black');
                                $('#NumChar_sym').html(greenMarkEntity);
                            }

                            if (!$('#password').val().match(specialChar)){
                                $('#SysChar').css('color','red');
                                $('#SysChar_sym').html(crossEntity);
                            } else {
                                $('#SysChar').css('color','black');
                                $('#SysChar_sym').html(greenMarkEntity);
                            }

                        })
                        $('#addUser_btn').click(function(event){
                            event.preventDefault();
                            if ($('#password').val().length < 8 || !$('#password').val().match(upperCase) || !$('#password').val().match(lowerCase) || !$('#password').val().match(numbers) || !$('#password').val().match(specialChar) || $('#repassword').val() != $('#password').val() || $('#nama').val().length < 8 || !emailReg.test($('#email').val()) ){
                                Swal.fire({
                                    title: "Oops!",
                                    text: "Harap cek kembali data, sepertinya ada yang salah disana",
                                    icon: "error",
                                    confirmButtonText: "Baiklah",
                                    buttons: !0,
                                    dangerMode: !0,
                                })
                            } else {
                                Swal.fire({
                                    title: "Apakah Data Yang Diisi Sudah Sesuai?",
                                    text: "Harap pastikan informasi yang dimasukan benar dan kamu harus mengingatnya",
                                    icon: "warning",
                                    showCancelButton: !0,
                                    confirmButtonText: "Sudah, Lanjutkan",
                                    cancelButtonText: "Batal, Cek Kembali",
                                    buttons: !0,
                                    dangerMode: !0,
                                }).then((event) => {
                                    event.isConfirmed && $("#new_user_form").submit();
                                });
                            }
                        })

                    </script>
                    <p class="text-base text-[#adadad]">
                        Sudah punya akun?
                        <a href="signin.html" class="text-primary hover:underline">
                          Masuk Sekarang
                        </a>
                      </p>
                    <div>
                        <span class="absolute top-1 right-1">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="1.39737" cy="38.6026" r="1.39737" transform="rotate(-90 1.39737 38.6026)" fill="#3056D3" />
                                <circle cx="1.39737" cy="1.99122" r="1.39737" transform="rotate(-90 1.39737 1.99122)" fill="#3056D3" />
                                <circle cx="13.6943" cy="38.6026" r="1.39737" transform="rotate(-90 13.6943 38.6026)" fill="#3056D3" />
                                <circle cx="13.6943" cy="1.99122" r="1.39737" transform="rotate(-90 13.6943 1.99122)" fill="#3056D3" />
                                <circle cx="25.9911" cy="38.6026" r="1.39737" transform="rotate(-90 25.9911 38.6026)" fill="#3056D3" />
                                <circle cx="25.9911" cy="1.99122" r="1.39737" transform="rotate(-90 25.9911 1.99122)" fill="#3056D3" />
                                <circle cx="38.288" cy="38.6026" r="1.39737" transform="rotate(-90 38.288 38.6026)" fill="#3056D3" />
                                <circle cx="38.288" cy="1.99122" r="1.39737" transform="rotate(-90 38.288 1.99122)" fill="#3056D3" />
                                <circle cx="1.39737" cy="26.3057" r="1.39737" transform="rotate(-90 1.39737 26.3057)" fill="#3056D3" />
                                <circle cx="13.6943" cy="26.3057" r="1.39737" transform="rotate(-90 13.6943 26.3057)" fill="#3056D3" />
                                <circle cx="25.9911" cy="26.3057" r="1.39737" transform="rotate(-90 25.9911 26.3057)" fill="#3056D3" />
                                <circle cx="38.288" cy="26.3057" r="1.39737" transform="rotate(-90 38.288 26.3057)" fill="#3056D3" />
                                <circle cx="1.39737" cy="14.0086" r="1.39737" transform="rotate(-90 1.39737 14.0086)" fill="#3056D3" />
                                <circle cx="13.6943" cy="14.0086" r="1.39737" transform="rotate(-90 13.6943 14.0086)" fill="#3056D3" />
                                <circle cx="25.9911" cy="14.0086" r="1.39737" transform="rotate(-90 25.9911 14.0086)" fill="#3056D3" />
                                <circle cx="38.288" cy="14.0086" r="1.39737" transform="rotate(-90 38.288 14.0086)" fill="#3056D3" />
                            </svg>
                        </span>
                        <span class="absolute left-1 bottom-1">
                            <svg width="29" height="40" viewBox="0 0 29 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="2.288" cy="25.9912" r="1.39737" transform="rotate(-90 2.288 25.9912)" fill="#3056D3" />
                                <circle cx="14.5849" cy="25.9911" r="1.39737" transform="rotate(-90 14.5849 25.9911)" fill="#3056D3" />
                                <circle cx="26.7216" cy="25.9911" r="1.39737" transform="rotate(-90 26.7216 25.9911)" fill="#3056D3" />
                                <circle cx="2.288" cy="13.6944" r="1.39737" transform="rotate(-90 2.288 13.6944)" fill="#3056D3" />
                                <circle cx="14.5849" cy="13.6943" r="1.39737" transform="rotate(-90 14.5849 13.6943)" fill="#3056D3" />
                                <circle cx="26.7216" cy="13.6943" r="1.39737" transform="rotate(-90 26.7216 13.6943)" fill="#3056D3" />
                                <circle cx="2.288" cy="38.0087" r="1.39737" transform="rotate(-90 2.288 38.0087)" fill="#3056D3" />
                                <circle cx="2.288" cy="1.39739" r="1.39737" transform="rotate(-90 2.288 1.39739)" fill="#3056D3" />
                                <circle cx="14.5849" cy="38.0089" r="1.39737" transform="rotate(-90 14.5849 38.0089)" fill="#3056D3" />
                                <circle cx="26.7216" cy="38.0089" r="1.39737" transform="rotate(-90 26.7216 38.0089)" fill="#3056D3" />
                                <circle cx="14.5849" cy="1.39761" r="1.39737" transform="rotate(-90 14.5849 1.39761)" fill="#3056D3" />
                                <circle cx="26.7216" cy="1.39761" r="1.39737" transform="rotate(-90 26.7216 1.39761)" fill="#3056D3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection