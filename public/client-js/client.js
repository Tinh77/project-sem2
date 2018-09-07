$(document).ready(function () {
    $("input[name=group100]").click(function () {
        $("form#searchForm").submit();
    })
});

$(document).ready(function informSubmit(id, gift_id) {
    $.ajax({
        url: '/client/gift/' + gift_id + '/inform',
        type: 'POST',
        data: {
            'id': id,
            'gift_id': gift_id
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (response) => {
            if (response.status == 0) {
                console.log("okay");
            } else if (response.status == 'fraud') {
                console.log("fraud");
            } else {
                console.log(response.status);
            }
        },
        error: (response) => console.log("fail")
    });
});



