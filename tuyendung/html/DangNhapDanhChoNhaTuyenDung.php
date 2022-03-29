<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if (isset($_SESSION['user_email'])) {
    header('Location: TrangChuNhaTuyenDung1.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link nhúng css boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome  -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- link logo ic đầu website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- link library hover-min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/hover-min.css">
    <!-- Link css cuối wbsite  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/topandbottom.css">
    <!-- Link css chính dành cho đăng nhập - nhà tuyển dụng -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/DangNhapDanhChoNhaTuyenDung.css">
</head>

<body>
    <!-- Thanh Menu điều khiển Đăng Ký - Đăng Nhập - Dành cho ứng viên  -->
    <div class="container-fluid">
        <!--------------thanh hỗ trợ-------------->
        <nav class="navbar fixed-top animate__animated animate__fadeInDown bg-dark" id="hotro1">
            <a class="nav nav-link disabled animate__animated animate__fadeInDown" id="pic1" href="#" tabindex="-1" aria-disabled="true">
                <i class="fas fa-phone-alt text-white"></i>
                <b>035 865 0975 Liên hệ</b>
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="DangKyChoNhaTuyenDung.php" style="color: rgb(84, 122, 163); ">
                        <button class="btn btn-outline-light hvr-curl-top-left">Đăng Ký</button>
                    </a>
                </li>
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="DangNhapDanhChoNhaTuyenDung.php" style="color: rgb(84, 122, 163);">
                        <button class="btn btn-outline-light hvr-curl-top-left">Đăng Nhập</button>
                    </a>
                </li>
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="/PROJECT_JOB/ungtuyen/html/TrangChu.php" style="color: rgb(84, 122, 163);">
                        <button class="btn btn-success hvr-curl-top-left">Dành cho ứng viên</button>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- Thanh điều khiển các liên kết tới Trang chủ - đăng tuyển dụng - quản lí tuyển dụng  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container" style="margin-top: 9vh;">
            <a class="navbar-brand " href="TrangChuNhaTuyenDung.php"><img src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" alt="" style="width: 200px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>

                <ul class="nav me-auto mb-2 mb-lg-0 justify-content-end">
                    <li class="nav-item ">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="TrangChuNhaTuyenDung.php">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="DangTinVaTimUngVien.php">
                            Đăng Tuyển & Tìm Ứng Viên
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="QuanLiHoSo.php">
                            Quản Lí Tuyển Dụng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Phần giữa website  -->
    <div class="container-fluid bg">
        <div class="row" id="apple">
            <!-- Video background -->
            <video autoplay="autoplay" loop="loop" width="100%" id="video_background">
                <source src="/PROJECT_JOB/image/JOB/BG_LOGIN_nice.mp4" type="video/mp4">
            </video>
            <!-- Form đăng nhập  -->
            <form class="form" id="form_tuyendung" action="" method="post">
                <h1 style="text-align: center;" id="vanban">Đăng Nhập</h1>
                <div class="form-group">
                    <label for="email" id="vanban">Địa chỉ Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Nhập Email" name="user_email">
                    <p class="emailError"></p>
                </div>
                <div class="form-group">
                    <label for="password" class="label" id="vanban">Mật Khẩu</label>
                    <input type="password" class="form-control" id="password" placeholder="Mật Khẩu" name="user_password">
                    <p class="passwordError"></p>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe" id="vanban">Đồng ý đăng nhập</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" placeholder="Đăng Nhập" value="Đăng Nhập" id="button"> Đăng Nhập</button>
                </div>
                <?php
                if (isset($success_message)) {
                    echo '<div class="success_message">' . $success_message . '</div>';
                }
                if (isset($error_message)) {
                    echo '<div class="error_message">' . $error_message . '</div>';
                }
                ?>
            </form>
        </div>
    </div>
    <!-- cuối website -->
    <div class="container-fluid bg-dark text-white">
        <section class="top-footer cb-section cb-section-border-bottom">
            <div class="row">
                <div class="col-lg-12 logo"><img class="lazy-bg" src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" height="100px" width="200px" style="float: left; margin-top: 10px;" alt="Tuyển dụng &amp; Tìm kiếm việc làm nhanh"></div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>Dành Cho Ứng Viên</h3>
                        <ul>
                            <li><a target="_blank" href="#">Việc làm mới nhất</a></li>
                            <li><a target="_blank" href="#">CV Hay</a></li>
                            <li><a target="_blank" href="#">Lương</a></li>
                            <li><a target="_blank" href="#">Cẩm Nang</a></li>
                            <li><a target="_blank" href="#">IT Blogs</a></li>
                            <li><a target="_blank" href="#">Sơ Đồ Trang Web</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>Nhà Tuyển Dụng</h3>
                        <ul>
                            <li><a target="_blank" href="#">Đăng Tuyển Dụng</a></li>
                            <li><a target="_blank" href="#">Tìm Hồ Sơ</a></li>
                            <li><a target="_blank" href="#">Giải Pháp</a></li>
                            <li><a target="_blank" href="#">Sản Phẩm Dịch Vụ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>Trung tâm trợ giúp</h3>
                        <ul>
                            <li><a target="_blank" href="#">Về nguyenlehuuduy.vn</a></li>
                            <li><a target="_blank" href="#">Chính Sách BV Thông Tin</a></li>
                            <li><a target="_blank" href="#">Chính sách GDPR</a></li>
                            <li><a target="_blank" href="#">Quy chế sàn giao dịch</a></li>
                            <li><a target="_blank" href="#">Thỏa thuận sử dụng</a></li>
                            <li><a target="_blank" href="#">Quy định bảo mật</a></li>
                            <li><a target="_blank" href="#">QT Giải Quyết Tranh Chấp</a></li>
                            <li><a target="_blank" href="#">Trợ giúp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="footer-links">
                        <h3>Website Đối Tác</h3>
                        <ul>
                            <li><a target="_blank" href="#">NguyenLeHuuDuy</a></li>
                            <li><a target="_blank" href="#">Vieclam.Tuoitre.vn</a></li>
                            <li><a target="_blank" href="#">Vieclam.Vietnamnet.vn</a></li>
                            <li><a target="_blank" href="#">Vieclam.Thanhnien.vn</a></li>
                            <li><a target="_blank" href="#">VieclamIT.vn</a></li>
                            <li><a target="_blank" href="#">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="footer-app-links">
                        <h3>Tìm Kiếm Mọi Lúc Mọi Nơi</h3>
                        <div class="app-links">
                            <a href="#" target="_blank" style="float: left;">
                                <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/apple.png" alt="app"> </a>
                            <a href="#" target="_blank">
                                <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/android.png" alt="app"> </a>
                        </div>
                    </div>
                    <div class="footer-social-links">
                        <h3>Kết nối với nguyenlehuuduy.vn</h3>
                        <ul>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/facebook.png" alt="" height="30px" width="30px">
                                <b>Facebook.com</b>
                            </li><br>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/instagram.png" alt="" height="30px" width="30px"><b>Instagram</b></li><br>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/zalo.png" alt="" height="30px" width="30px"><b>Zalo</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-footer">
            <div class="left-bottom-footer">
                <p>Trụ Sở Chính : 470 Trần Đại Nghĩa - Trường Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt - Hàn - Quận Ngũ Hành Sơn</p>
                <p>Văn Phòng : Ký Túc Xá Trường Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt - Hàn </p>
                <p>Email : nlhduy.20it7@vku.udn.vn</p>
                <p>Số Điện Thoại : 0358650975</p>
                <p>Mọi Thông Tin Chi Tiết Xin Vui Lòng Liên Hệ Cho Chúng Tôi .</p>
            </div>
            <div class="right-bottom-footer">
                <a target="_blank" href="#">
                    <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/dk.png" alt="bct" style="float: right; margin-top: -100px; margin-right: 100px;">
                </a>
            </div>
        </section>

    </div>
    <!--------- Nhúng JS của Bootstrap -------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>