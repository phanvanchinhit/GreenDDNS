
<html>

<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Camera DDNS || LOGIN</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<header>
    <div class="wrap_login_header">
        <a href="login.php"><img align="center" src="./images/cameraddns.png"></a>
        <img align="right" src="./images/logo.png">

        <p><span><FONT size="4"><i>Dịch vụ DDNS của GREENVISION Việt Nam</i></FONT></span></p>
        </BR>
    </div>
</header>

<section style="background: url(images/newLoginBg_hc.jpg) no-repeat; background-size: auto;">

    <div>
        <div class="wrap_login">

            <div class="login">
                <div class="navi">
                    <span rel="login" class="active"><STRONG>Đăng nhập tài khoản</STRONG></span>
                    <span rel="register" class=""><STRONG>Đăng ký tài khoản</STRONG></span>
                </div>
                <form rel="login" class="redirect frm_login active" action="" method="POST">
                    <ul>
                        <li>
                            <label>Username</label>
                            <input type="text" class="w_100" name="txt_username" value=""
                                   placeholder="Xin vui lòng nhập username" required="required">
                        </li>
                        <li>
                            <label>Mật khẩu</label>
                            <input type="password" class="w_100" name="txt_password" value=""
                                   placeholder="Xin vui lòng nhập mật khẩu" required="required">
                        </li>
                        <li>
                            <input type="submit" name="btn_login" class="w_30_btn" value="Đăng nhập"> &nbsp; &nbsp;
                            &nbsp; &nbsp; <FONT size=2> <a href=forgotpass.php target=_blank> Quên mật khẩu? </a>
                            </FONT>
                        </li>
                    </ul>
                </form>


                <form rel="register" class="redirect frm_register " action="" method="POST">
                    <ul>
                        <li>
                            <label>Username</label> <input type="text" class="w_100" name="txt_username" value=""
                                                           placeholder="Xin vui lòng nhập username" required="required">
                            * Chỉ chứa các ký tự: 'a-z', hoặc '0-9', hoặc dấu '-', tối đa 25 ký tự
                        </li>
                        <li>
                            <label>Mật khẩu</label>
                            <input type="password" class="w_100" name="txt_password" value=""
                                   placeholder="Xin vui lòng nhập mật khẩu" required="required">
                        </li>
                        <li>
                            <label>Xác nhận mật khẩu</label>
                            <input type="password" class="w_100" name="txt_cf_password" value=""
                                   placeholder="Xin vui lòng nhập mật khẩu" required="required">
                        </li>
                        <li>
                            <label>Email</label>
                            <input type="email" class="w_100" name="txt_email" value=""
                                   placeholder="Xin vui lòng nhập Email" required="required">
                        </li>
                        <li>
                            <label>Họ tên</label>
                            <input type="text" class="w_100" name="txt_fullname" value=""
                                   placeholder="Xin vui lòng nhập họ tên" required="">
                        </li>
                        <li>
                            <label>Điện thoại</label>
                            <input type="text" class="w_100" name="txt_tel" value=""
                                   placeholder="Xin vui lòng nhập điện thoại" required="">
                        </li>
                        <li>
                            <input type="submit" class="w_30_btn" name="btn_register" value="Đăng ký">
                        </li>
                    </ul>
                </form>
            </div>


        </div>
    </div>


    <div class="footerBox_login">
        <FONT size="2"> Copyright © 2021 GREENVISION </FONT>
    </div>
</section>


</body>

</html>
 