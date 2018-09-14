@if(session('success'))

    <script>
        toastr.options = {
            "closeButon": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 30000,
            "extendedTimeOut": 5000,
            "showEasing": "swing",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        toastr["success"]("{{ session('success')}} ");
    </script>
@endif