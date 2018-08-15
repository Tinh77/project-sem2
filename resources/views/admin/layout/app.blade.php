<!doctype html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link href="/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/css/flag-icon.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/pace.min.css" rel="stylesheet">
</head>
<body class="pace-done sidebar-lg-show">
@include('../elements/header')
<div class="app-body">
    <div class="sidebar">
        @include('../elements/siderbar')
    </div>
    <main class="main">
        {{--@include('../admin.product.list')--}}
        @section('content')
        @show
    </main>
</div>
@include('../elements/footer')
<script src="/js/jquery.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/pace.min.js"></script>
<script src="/js/perfect-scrollbar.min.js"></script>
<script src="/js/coreui.min.js"></script>
<script>
    $('#ui-view').ajaxLoad();
    $(document).ajaxComplete(function () {
        Pace.restart()
    });
</script>
</body>
</html>