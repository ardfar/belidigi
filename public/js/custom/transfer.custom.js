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
$("#konfirmasi_data").click(function (e) {
    if (
        1e4 <= $("#jumlahTransfer").val() &&
        $("#jumlahTransfer").val() <= 2e6
    ) {
        // Fire confirmation dialog 
        e.preventDefault(); //Prevent default action of the button
        Swal.fire({
            title: "Apakah Data Yang Diisi Sudah Sesuai?",
            text: "Harap periksa kembali data yang sudah diisi",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Sudah, Lanjutkan",
            cancelButtonText: "Batal, Cek Kembali",
            buttons: !0,
            dangerMode: !0,
        }).then((e) => {
            e.isConfirmed && $("#data_form").submit();
        });
    } else {
        // Fire error dialog (Reason: Minimum transfer isnt reached)
        e.preventDefault(); //Prevent default action of the button
        $("#jumlahTransfer").val() < 1e4
            ? Swal.fire({
                  title: "Perhatian!",
                  text: "Minimal Transfer Rp. 10.000",
                  icon: "warning",
                  showDenyButton: !0,
                  showConfirmButton: !1,
                  denyButtonText: "Kembali",
                  buttons: !0,
                  dangerMode: !0,
              })
        // Fire error dialog (Reason: reached one time transaction limit)
            : Swal.fire({
                  title: "Perhatian!",
                  text: "Maksimal Transfer Rp. 2.000.000",
                  icon: "warning",
                  showDenyButton: !0,
                  showConfirmButton: !1,
                  denyButtonText: "Kembali",
                  buttons: !0,
                  dangerMode: !0,
              });
    }
});

