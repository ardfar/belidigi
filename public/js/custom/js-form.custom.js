$(document).ready(function () {
    // initialize the select2 form 
    $("#jenisLayanan").select2();
    $("#metodeBayar").select2();
    // change the input jumlahJasa with value 1 
    $("#jumlahJasa").val(1);
    // Append additional form based on user selection
    fieldAppender();
    // Change total price preview
    gantiHarga();
});
// create variables to store the price 
let previewHarga = 0;
// variable that stores form for post link custom comment 
let customField = `
    <div id="optional-form">
    <div class="text-gray-700 py-5" id="optional-form">
        <label class="block mb-1 text-base py-2" for="linkPost">Link Konten*</label>
        <input id="linkPost" name="linkPost" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Masukan Link Postingan Kalian">
        <div class="form-help text-sm py-1">Link target konten.</div>
    </div>
    <label class="block mb-1 text-base py-2" for="kustomKomentar">Kustom Komentar*</label>
    <textarea rows="5" id="kustomKomentar"  name="kustomKomentar" class="w-full px-3 text-lg placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Contoh Komentar: &#10;Wah keren banget videonya, &#10;Sumpah ini postingannya bermutu, &#10;Postingannya berbobot &#10;Pisahkan Setiap Komentar dengan enter"></textarea>
    <div class="form-help text-sm py-1">Tulis komentar kustom kamu.</div>
    </div>
`
// variable that stores form for post link 
let linkPost = `
<div class="text-gray-700 py-5" id="optional-form">
    <label class="block mb-1 text-base py-2" for="linkPost">Link Konten*</label>
    <input id="linkPost" name="linkPost" class="w-full h-10 px-3 text-lg placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" placeholder="Masukan Link Postingan Kalian">
    <div class="form-help text-sm py-1">Link target konten.</div>
</div>           
`
// Change the previewHarga based on user selection 
function tentuHarga() {
    previewHarga = $("#INSTA-FOLL-RANDOM").is(":selected")
        ? 4e3
        : $("#INSTA-FOLL-LOKAL").is(":selected")
        ? 4100
        : $("#INSTA-VIEW-LOKAL").is(":selected")
        ? 400
        : $("#INSTA-LIKE-LOKAL").is(":selected")
        ? 3500
        : $("#INSTA-COM-CUSTOM").is(":selected")
        ? 1e4
        : $("#YT-SUBS-RANDOM").is(":selected")
        ? 7600
        : $("#YT-COM-CUSTOM").is(":selected")
        ? 5e3
        : $("#YT-VIEWS-RANDOM").is(":selected")
        ? 4e3
        : $("#YT-LIKES").is(":selected")
        ? 2e3
        : $("#TIKTOK-FOLL-RANDOM").is(":selected")
        ? 9e3
        : $("#TIKTOK-SHARE-LOKAL").is(":selected")
        ? 4e3
        : $("#TIKTOK-VIEW-RANDOM").is(":selected") ||
          $("#TIKTOK-LIKES-LOKAL").is(":selected")
        ? 4500
        : $("#TIKTOK-COM-CUSTOM").is(":selected")
        ? 3500
        : 0;
}
// Change input totalHarga based on user selection and the quantity 
function gantiHarga() {
    tentuHarga();
    previewHarga *= $("#jumlahJasa").val(); // Preview price
    $("#totalHarga").val(previewHarga); // Set the result to input
}

// Append the defined custom field to the form 
function fieldAppender() {
    if ($("#INSTA-COM-CUSTOM").is(":selected") || $("#YT-COM-CUSTOM").is(":selected") || $("#TIKTOK-COM-CUSTOM").is(":selected")) {
        $("#optional-form").remove();
        $("#optional-wrapper").append(customField);
    } else if (
        $("#INSTA-VIEW-LOKAL").is(":selected") ||
        $("#INSTA-LIKE-LOKAL").is(":selected") ||
        $("#YT-VIEWS-RANDOM").is(":selected") ||
        $("#YT-LIKES").is(":selected") ||
        $("#TIKTOK-SHARE-LOKAL").is(":selected") ||
        $("#TIKTOK-VIEW-RANDOM").is(":selected") ||
        $("#TIKTOK-LIKES-LOKAL").is(":selected")
    ) {
        $("#optional-form").remove();
        $("#optional-wrapper").append(linkPost);
    } else $("#optional-form").remove();
}

// Defined function to fire error dialog 
function warnPop(customMessage) {
    Swal.fire({
        title: "Perhatian!",
        text: customMessage,
        icon: "warning",
        showDenyButton: !0,
        showConfirmButton: !1,
        denyButtonText: "Kembali",
        buttons: !0,
        dangerMode: !0
    });
}

// Defined function to fire confirmation dialog 
function proceedPop() {
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
        e.isConfirmed && $("#jasaSosmed_form").submit();
    });
}

// Call the functions if user change their selection 
$("#jasa-sosmed").change(function () {
    fieldAppender();
    gantiHarga();
});

// Update the preview price when the QTY changes 
$("#jumlahJasa").change(gantiHarga);

// add event listener to to confirm button with certain error prevention
$("#konfirmasi_data").click(function (e) {
    e.preventDefault();
    if ($('#INSTA-FOLL-LOKAL').is(':selected') || $('#INSTA-FOLL-RANDOM').is(':selected')) {
        if (0 != $("#jumlahJasa").val() && '' != $("#username").val()) {
            proceedPop()
        } else {
            if (0 == $("#jumlahJasa").val()) {
                warnPop('Harap Masukan Jumlah Pesanan')
            } else {
                warnPop('Harap Tuliskan Username-mu')
            }
        }
    } else {
        if ($('#linkPost').length != 0 && $('#kustomKomentar').length == 0) {
            if ($('#linkPost').val() != 0) {
                if (0 != $("#jumlahJasa").val()) {
                    proceedPop()
                } else {
                    warnPop('Harap Masukan Jumlah Pesanan')
                }
            } else {
                warnPop('Harap Masukan Link Konten')
            }
        } else if ($('#linkPost').length != 0 && $('#kustomKomentar').length != 0) {
            if ($('#linkPost').val() != 0) {
                if ($('#kustomKomentar').val() != 0) {
                    proceedPop()
                } else {
                    warnPop('Harap Tuliskan Kustom Komentar')
                }
            } else {
                if ($('#kustomKomentar').val() != 0) {
                    warnPop('Harap Masukan Link Konten')
                } else {
                    warnPop('Harap Tuliskan Kustom Komentar dan Link Konten')
                }
            }
        } else {
            console.log('WTF!')
        }
    }
});
