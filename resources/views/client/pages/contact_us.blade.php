@extends('client.layout.master')
@section('content')
    <body class="hidden-sn white-skin animated">
    <!-- /.Navigation -->

    <section>
        <div class="mdb-map">
            <div id="map-container" class="z-depth-1-half map-container" style="height: 450px;"></div>
        </div>
    </section>

    <!--Main Layout-->
    <main>

        <div class="container-fluid mb-5">

            <!--Grid row-->
            <div class="row" style="margin-top: -140px;">

                <!--Grid column-->
                <div class="col-md-12">
                    <div class="card pb-5">
                        <div class="card-body">

                            <div class="container">

                                <!-- Section: Contact v.3 -->
                                <section class="contact-section my-5">

                                    <!-- Form with header -->
                                    <div class="card">

                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-lg-8">

                                                <div class="card-body form">

                                                    <!-- Header -->
                                                    <h3 class="mt-4"><i class="fa fa-envelope pr-2"></i>Viết thư cho chúng tôi:</h3>

                                                    <!-- Grid row -->
                                                    <div class="row">

                                                        <!-- Grid column -->
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="form-contact-name" class="form-control">
                                                                <label for="form-contact-name" class="">Họ và tên</label>
                                                            </div>
                                                        </div>
                                                        <!-- Grid column -->

                                                        <!-- Grid column -->
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="form-contact-email" class="form-control">
                                                                <label for="form-contact-email" class="">Email</label>
                                                            </div>
                                                        </div>
                                                        <!-- Grid column -->

                                                    </div>
                                                    <!-- Grid row -->

                                                    <!-- Grid row -->
                                                    <div class="row">

                                                        <!-- Grid column -->
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="form-contact-phone" class="form-control">
                                                                <label for="form-contact-phone" class="">Số điện thoại</label>
                                                            </div>
                                                        </div>
                                                        <!-- Grid column -->

                                                        <!-- Grid column -->
                                                        <div class="col-md-6">
                                                            <div class="md-form mb-0">
                                                                <input type="text" id="form-contact-company" class="form-control">
                                                                <label for="form-contact-company" class="">Địa chỉ</label>
                                                            </div>
                                                        </div>
                                                        <!-- Grid column -->

                                                    </div>
                                                    <!-- Grid row -->

                                                    <!-- Grid row -->
                                                    <div class="row">

                                                        <!-- Grid column -->
                                                        <div class="col-md-12">
                                                            <div class="md-form mb-0">
                                                                <textarea type="text" id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                                                                <label for="form-contact-message">Tin nhắn</label>
                                                                <a class="btn-floating btn-lg blue">
                                                                    <i class="fa fa-send-o"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!-- Grid column -->

                                                    </div>
                                                    <!-- Grid row -->

                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4">

                                                <div class="card-body contact text-center h-100 white-text">

                                                    <h3 class="my-4 pb-2">Thông tin liên hệ</h3>
                                                    <ul class="text-lg-left list-unstyled ml-4">
                                                        <li>
                                                            <p><i class="fa fa-map-marker pr-2 mb-4"></i>8A, Tôn Thất Huyết, Mỹ Đình, Hà Nội</p>
                                                        </li>
                                                        <li>
                                                            <p><i class="fa fa-phone pr-2 mb-4"></i>+ 01 6877 775 63</p>
                                                        </li>
                                                        <li>
                                                            <p><i class="fa fa-envelope pr-2"></i>monquaynghia@gmail.com</p>
                                                        </li>
                                                    </ul>
                                                    <hr class="hr-light my-4">
                                                    <ul class="list-inline text-center list-unstyled">
                                                        <li class="list-inline-item">
                                                            <a class="p-2 fa-lg tw-ic">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a class="p-2 fa-lg li-ic">
                                                                <i class="fa fa-linkedin"> </i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a class="p-2 fa-lg ins-ic">
                                                                <i class="fa fa-instagram"> </i>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->

                                    </div>
                                    <!-- Form with header -->

                                </section>
                                <!-- Section: Contact v.3 -->

                            </div>

                        </div>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </main>
    <!--Main Layout-->
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../../js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../../js/mdb.min.js"></script>

    <script src="https://maps.google.com/maps/api/js"></script>
    <script type="text/javascript">
        /* WOW.js init */
        new WOW().init();

        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });
    </script>
    <script>
        function init_map() {

            var var_location = new google.maps.LatLng(40.725118, -73.997699);

            var var_mapoptions = {
                center: var_location,

                zoom: 14
            };

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var_marker.setMap(var_map);

        }

        google.maps.event.addDomListener(window, 'load', init_map);
    </script>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();
    </script>
    </body>
@endsection
