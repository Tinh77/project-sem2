var slider = $("#calculatorSlider");
var developerBtn = $("#developerBtn");
var corporateBtn = $("#corporateBtn");
var privateBtn = $("#privateBtn");
var reseller = $("#resellerEarnings");
var client = $("#clientPrice");
// var percentageBonus = 30; // = 30%
var license = {
    corpo: {
        active: true,
        price: 319,
    },
    dev: {
        active: false,
        price: 149,
    },
    priv: {
        active: false,
        price: 79,
    }
}

function calculate(price, value) {
    client.text((Math.round((price - (value / 100 * price)))) + '$');
    reseller.text((Math.round(((percentageBonus - value) / 100 * price))) + '$')
}

function reset(price) {
    slider.val(0);
    client.text(price + '$');
    reseller.text((Math.round((percentageBonus / 100 * price))) + '$');
}
developerBtn.on('click', function (e) {
    license.dev.active = true;
    license.corpo.active = false;
    license.priv.active = false;
    reset(license.dev.price)
});
privateBtn.on('click', function (e) {
    license.dev.active = false;
    license.corpo.active = false;
    license.priv.active = true;
    reset(license.priv.price);
});
corporateBtn.on('click', function (e) {
    license.dev.active = false;
    license.corpo.active = true;
    license.priv.active = false;
    reset(license.corpo.price);
});
slider.on("input change", function (e) {
    if (license.priv.active) {
        calculate(license.priv.price, $(this).val());
    } else if (license.corpo.active) {
        calculate(license.corpo.price, $(this).val());
    } else if (license.dev.active) {
        calculate(license.dev.price, $(this).val());
    }
})

$(document).ready(function () {
    $('.mdb-select').material_select();
});

$(".button-collapse").sideNav();

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(document).ready(function () {
    $('.mdb-select').material_select();
})

$(function () {
    $("#mdb-lightbox-ui").load("../../mdb-addons/mdb-lightbox-ui.html");
});

// $(document).ready(function () {
//     $("input[name=group100]").click(function () {
//         $("form#searchForm").submit();
//     })
//     $('.btn-cf').click(function () {
//         var user_id = $(this).attr('data-user-id');
//         var transaction_id = $(this).attr('data-transaction-id');
//         $.ajax({
//             url: '/client/gift/'+transaction_id+'/confirm ',
//             type: 'POST',
//             data: {
//                 'id': user_id,
//                 'transaction_id': transaction_id
//             },
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             },
//             success: (response) => {
//                 if (response.status == 0) {
//                     window.location.href= 'http://127.0.0.1:8000/client/transaction' ;
//                 } else if (response.status == 'fraud') {
//                     console.log("fraud");
//                 } else {
//                     console.log(response.status);
//                 }
//             },
//             error: (response) => console.log("fail")
//         });
//     })
// });

// facebook

