$(document).ready(function () {
    $("input[name=group100]").click(function () {
        $("form#searchForm").submit();
    })
    $('.btn-cf').click(function () {
        var user_id = $(this).attr('data-user-id');
        var transaction_id = $(this).attr('data-transaction-id');
        $.ajax({
            url: '/client/gift/' + transaction_id + '/confirm ',
            type: 'POST',
            data: {
                'id': user_id,
                'transaction_id': transaction_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (response) => {
                if (response.status == 0) {
                    window.location.href = 'http://127.0.0.1:8000/client/transaction';
                } else if (response.status == 'fraud') {
                    console.log("fraud");
                } else {
                    console.log(response.status);
                }
            },
            error: (response) => console.log("fail")
        });
    })
    $('.btn-confirm-status').click(function () {
        var id = $(this).attr('data-gift-id');
        var transaction_id = $(this).attr('data-transaction-id');
        $.ajax({
            url: '/client/transaction/confirm',
            type: 'POST',
            data: {
                'transaction_id': transaction_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (response) => {
                if (response.status == 1) {
                    window.location.href = 'http://127.0.0.1:8000/client/transaction';
                } else if (response.status == 'fraud') {
                    console.log("fraud");
                } else {
                    console.log(response.status);
                }
            },
            error: (response) => console.log("fail")
        });
    })

    $('.btn-refresh-status').click(function () {
        var id = $(this).attr('data-gift-id');
        var transaction_id = $(this).attr('data-transaction-id');
        $.ajax({
            url: '/client/transaction/refresh',
            type: 'POST',
            data: {
                'transaction_id': transaction_id
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (response) => {
                if (response.status == 1) {
                    window.location.href = 'http://127.0.0.1:8000/client/transaction';
                } else if (response.status == 'fraud') {
                    console.log("fraud");
                } else {
                    console.log(response.status);
                }
            },
            error: (response) => console.log("fail")
        });
    })
});



