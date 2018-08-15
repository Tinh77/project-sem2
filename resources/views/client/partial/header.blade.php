<style>
    .item-menu {
        overflow: auto;
        white-space: nowrap;
    }

</style>
<header>
    <div class="header">
        <div class="bg-white">
            <div class="logo">
                <img class="mb-0 mt-5" src="{{URL::asset('/client-image/Logo1.png')}}"/>
            </div>
            <nav class="scroll-menu text-center mb-3 ml-3">
                <a class=" text-dark mr-5 item-menu font-text" href="#">Trang chủ</a>
                <a class=" text-dark mr-5 item-menu font-text" href="#">Trang chủ</a>
                <a class=" text-dark mr-5 item-menu font-text" href="#">Trang chủ</a>
                <a class=" text-dark mr-5 item-menu font-text" href="#">Trang chủ</a>
                <a class=" text-dark mr-5 item-menu font-text" data-toggle="modal"
                   data-target="#exampleModalCenter" href="#">Đăng nhập</a>

            </nav>
        </div>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
             aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered font-text" role="document">
                <div class="modal-content w-100">
                    <div class="login-wrap">
                        <div class="login-html">
                            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                                                                                                     class="tab">Đăng
                                nhập</label>
                            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Đăng
                                ký</label>
                            <div class="login-form">
                                <div class="sign-in-htm">
                                    <div class="group">
                                        <label for="user" class="label">Username</label>
                                        <input id="user" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label">Password</label>
                                        <input id="pass" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="Sign In">
                                    </div>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <a href="#forgot">Forgot Password?</a>
                                    </div>
                                </div>
                                <div class="sign-up-htm">
                                    <div class="group">
                                        <label for="user" class="label text-white">Username</label>
                                        <input id="user" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label text-white">Password</label>
                                        <input id="pass" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label text-white">Repeat Password</label>
                                        <input id="pass" type="password" class="input" data-type="password">
                                    </div>
                                    <div class="group">
                                        <label for="pass" class="label text-white">Email Address</label>
                                        <input id="pass" type="text" class="input">
                                    </div>
                                    <div class="group">
                                        <input type="submit" class="button" value="Sign Up">
                                    </div>
                                    <label for="tab-1">Already Member?</label>
                                    <div class="hr"></div>
                                    <div class="foot-lnk">
                                        <label for="tab-1">Already Member?</label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
