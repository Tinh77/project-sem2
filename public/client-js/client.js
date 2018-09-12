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
                    setTimeout(function () {
                        window.location.href = 'http://127.0.0.1:8000/client/transaction';
                    },2000)
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
                swal("Good job!", "Bạn đã xác nhận thành công!", "success");
                if (response.status == 1) {
                    $('.btn-action-p[data-transaction-id='+transaction_id+']').hide();
                    setTimeout(function () {
                        window.location.href = 'http://127.0.0.1:8000/client/transaction';
                    },2000)
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
                swal("Good job!", "Bạn đã hủy giao dịch thành công!", "success");
                if (response.status == 1) {
                    $('.btn-action-p[data-transaction-id='+transaction_id+']').hide();
                    setTimeout(function () {
                        window.location.href = 'http://127.0.0.1:8000/client/transaction';
                    },2000)
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





