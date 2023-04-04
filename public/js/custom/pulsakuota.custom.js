// initialize the select2 form when all script was loaded 
$(document).ready(function () {
    $("#metodeBayar-p").select2();
    $("#metodeBayar-k").select2();
});

// a variable that store current active tab 
let active_tab = "Pulsa"; // Default tab: Pulsa

// Change tab mechanism 
function tab(a, t) {
    active_tab = a == "beli-pulsa" ? "Pulsa" : "Kuota";
    // Show the tab on the argument a 
    $("#" + a).css("display", "block");
    $("#" + a + "-btn").css("background", "#3056d3");
    $("#" + a + "-btn").css("color", "white");
    // Hide the tab on the argument t
    $("#" + t).css("display", "none");
    $("#" + t + "-btn").css("background", "white");
    $("#" + t + "-btn").css("color", "black");
}

// List of existing operator code in indonesia
const operator_code = [
    ["0895","0896","0897","0898","0899"], //Three
    ["0811","0812","0813","0821","0822","0853","0852"], //Telkomsel
    ["0878","0877","0859","0819","0818","0817"], //XL Axiata
    ["0858","0857","0856","0855","0816","0815","0814"], //Indosat
    ["0833","0832","0831","0838"], //Axis
    ["0881","0882","0883","0884","0885","0886","0887","0888","0889"], //Smartfren
    ["0851"] //Byu
]

// Function to change list operator when its called 
function change_list(operator) { 
    // clear the list 
    $("#jumlah" + active_tab).empty();
    // Change the list based on function argument 
    switch (operator){
        // List if the number was invalid 
        case "invalid":
            $("#jumlah" + active_tab).append("<option>No HP Tidak valid</option>");
            break;
        // List if the number was incomplete 
        case "incomplete":
            $("#jumlah" + active_tab).append("<option>No HP Belum lengkap</option>");
            break;
        // list if the function has another arguments 
        default:
            // Call the internal API to get all list of mobile recharge 
            $.ajax({
                type: "get",
                url: "http://localhost/pulsa-kuota/get-list-" + active_tab.toLowerCase() +"/" + operator,
                dataType: "html",
                success: function (response) {
                    // Append the response to the list 
                    $("#jumlah" + active_tab).append(response);
                }
            });
            break;
    }
    // Select2 form initialization 
    $("." + active_tab.toLowerCase() + "Selector").select2();
}

// Check the number operator when the user is inputing the number 
["pulsa","kuota"].forEach((el) => {
    $('#hp-' + el).on("input",function() {
        // get the first 4 number of the input
        let noHP = $('#hp-' + el).val().toString().slice(0,4);
        // Match the number to the constant 
        if (operator_code[0].some(op_code =>  noHP.includes(op_code))){ // Check if the number is Three 
            $('#operator-' + el).val('Three')
            change_list("TRI")
        } else if (operator_code[1].some(op_code =>  noHP.includes(op_code))){ // Check if the number is Telkomesel 
            $('#operator-' + el).val('Telkomsel')
            change_list("TELKOM")
        } else if (operator_code[2].some(op_code =>  noHP.includes(op_code))){ // Check if the number is XL 
            $('#operator-' + el).val('XL Axiata')
            change_list("XL")
        } else if (operator_code[3].some(op_code =>  noHP.includes(op_code))){ // Check if the number is Indosat
            $('#operator-' + el).val('Indosat')
            change_list("ISAT")
        } else if (operator_code[4].some(op_code =>  noHP.includes(op_code))){ // Check if the number is Axis
            $('#operator-' + el).val('Axis')
            change_list("AXIS")
        } else if (operator_code[5].some(op_code =>  noHP.includes(op_code))){ // Check if the number is Smartfren
            $('#operator-' + el).val('Smartfren')
            change_list("SMART")
        } else if (operator_code[6].some(op_code =>  noHP.includes(op_code))){ // Check if the number is By U
            $('#operator-' + el).val('ByU by Telkomsel')
            change_list("BYU")
        } else {
            $('#operator-' + el).val('Operator Sim')
            if (noHP.length < 4){ 
                change_list("incomplete") //Happens if the number < 4
            } else {
                change_list("invalid") //Happens if the number has no matches with the operator code
            }
        }
    })
})

// Add the click listener to the Beli Pulsa button 
$("#konfirmasi_pulsa").click(function (a) {
    a.preventDefault(); //Prevent default action of the button inside the from
    // Fire the confirmation dialog 
    Swal.fire({
        title: "Apakah Data Yang Diisi Sudah Sesuai?",
        text: "Harap periksa kembali data yang sudah diisi",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Sudah, Lanjutkan",
        cancelButtonText: "Batal, Cek Kembali",
        buttons: !0,
        dangerMode: !0,
    }).then((a) => {
        // submit the form if all is good 
        a.isConfirmed && $("#pulsa_form").submit();
    });
})

// Add the click listener to the Beli Pulsa button 
$("#konfirmasi_kuota").click(function (a) {
    a.preventDefault(); //Prevent default action of the button inside the from
    // Fire the confirmation dialog 
    Swal.fire({
        title: "Apakah Data Yang Diisi Sudah Sesuai?",
        text: "Harap periksa kembali data yang sudah diisi",
        icon: "warning",
        showCancelButton: !0,
        confirmButtonText: "Sudah, Lanjutkan",
        cancelButtonText: "Batal, Cek Kembali",
        buttons: !0,
        dangerMode: !0,
    }).then((a) => {
        // submit the form if all is good 
        a.isConfirmed && $("#kuota_form").submit();
    });
})
