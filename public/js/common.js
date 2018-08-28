$(document).ready(function () {
    $("#quantamaction").click(function () {
        var giftId = $(this).attr("data-gif-id");
        var buyer_id = $(this).attr("data-user-id");
        $.ajax({
            type : 'GET',
            dataType : 'Json',
            url : "/gift/quantam",
            data : {
                giftId : giftId,
                buyer_id : buyer_id
            },
            beforeSend(data) {
                  $("#quantamaction i").css("display", "block");
            },
            success(data) {
                $("#quantamaction i").css("display", "none");
                alert("Bạn đã đăng ký thành công");
            }
        })
    })
})