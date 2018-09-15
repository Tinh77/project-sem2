<footer class="page-footer pt-4 mt-4 text-center text-md-left mdb-color lighten-2">

    <!--Footer Links-->
    <!--/.Footer Links-->
@guest
    <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">Tạo tài khoản chỉ mất vài giây</h5>
            </li>
            <li class="list-inline-item">
                <a href="{{ route('register') }}"
                   class="btn btn-outline-white btn-rounded">Tạo tài khoản ngay</a>
            </li>
        </ul>
        <!-- Call to action -->
@else
    <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">Đăng món quà của bạn chỉ mất vài giây</h5>
            </li>
            <li class="list-inline-item">
                <a href="/client/gift/create" class="btn btn-outline-white btn-rounded">Đăng món quà</a>
            </li>
        </ul>
        <!-- Call to action -->
    @endif
    <hr>

    <!--Social buttons-->
    <div class="social-section text-center">
        <ul class="list-unstyled list-inline">

            <li class="list-inline-item">
                <a target="_blank" href="https://www.facebook.com/Meaning-Gift-310835612807616" class="btn-floating btn-fb">
                    <i class="fa fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a target="_blank" href="https://twitter.com/PhiTun1?lang=vi" class="btn-floating btn-tw">
                    <i class="fa fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a target="_blank" href="https://plus.google.com/113927897194476709320?hl=vi" class="btn-floating btn-gplus">
                    <i class="fa fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li">
                    <i class="fa fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble">
                    <i class="fa fa-dribbble"> </i>
                </a>
            </li>

        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            Copyright &copy; 2018 by
            <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> Meaning_gift </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
