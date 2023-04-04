// Wait until all script were loaded 
$(document).ready(function () {
    $(".bankSelector").select2();
    $(".methodSelector").select2();
});

// initialize the sliding form 
var form_swiper = new Swiper("#form-swiper", {
    speed: 400,
    direction: "horizontal",
    simulateTouch: false,
    navigation: {
        nextEl: "#next-swiper-btn",
        prevEl: "#previous-swiper-btn",
    },
});

// Change the button state when the slide at the end slide 
form_swiper.on("slideChangeTransitionEnd", function () { 
    if (form_swiper.isEnd){
        $("#konfirmasi_data").removeAttr("disabled");
        $("#konfirmasi_data").removeClass(["bg-black/70", "cursor-not-allowed"]).addClass(["bg-black", "cursor-pointer"]);
    } else {
        $("#konfirmasi_data").attr("disabled","disabled");
        $("#konfirmasi_data").removeClass(["bg-black", "cursor-pointer"]).addClass(["bg-black/70", "cursor-not-allowed"]);
    }
 })

// Fire confirmation dialog 
$("#konfirmasi_data").click(function (t) {
    if (1e4 <= $("#jumlahBayar").val()) {
        // Fire confirmation dialog 
        t.preventDefault(); //Prevent default action of the button
        Swal.fire({
            title: "Apakah Data Yang Diisi Sudah Sesuai?",
            text: "Harap periksa kembali data yang sudah diisi",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sudah, Lanjutkan",
            cancelButtonText: "Batal, Cek Kembali",
            buttons: !0,
            dangerMode: !0,
        }).then((t) => {
            t.isConfirmed && $("#data_form").submit();
        });
    } else {
        // Fire error dialog (Reason: Minimum transfer isnt reached)
        t.preventDefault(); //Prevent default action of the button
        Swal.fire({
            title: "Perhatian!",
            text: "Minimal Bayar Virtual Account Rp. 10.000",
            icon: "warning",
            showDenyButton: !0,
            showConfirmButton: !1,
            denyButtonText: "Kembali",
            buttons: !0,
            dangerMode: !0,
        });
    }
});


