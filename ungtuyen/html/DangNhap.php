<?php
session_start();
require 'db_connection.php';
require 'login.php';
// IF USER LOGGED IN
if (isset($_SESSION['user_email'])) {
    header('Location: TrangChu1.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- link ic đầu của website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css framework  hover min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- Link css cuối trang web  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/topandbottom.css">
    <!-- Link css chính của Giao diện đăng nhập  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/DangNhap.css">
</head>

<body>
    <!-- Thanh NAVBAR Điều khiển liên kết trong website -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="TrangChu.php"><img src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" alt="" style="width: 200px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="TrangChu.php">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link hvr-curl-top-left" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tìm kiếm việc làm
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item hvr-grow-shadow" href="ViecLamMoiNhat.php">Việc làm mới
                                    nhất</a></li>
                            <li><a class="dropdown-item hvr-grow-shadow" href="NganhNgheDiaDiem.php">Ngành nghề / Địa
                                    điểm</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="CV.php">
                            CV Hay
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="LoTrinhNgheNghiep.php">
                            Bản đồ nghề nghiệp
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="LUONG.php">
                            Hồ sơ cá nhân
                        </a>
                    </li> -->


                </ul>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="DangKy.php">
                            Đăng Ký
                        </a>
                    </li>
                </ul>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="DangNhap.php">
                            Đăng Nhập
                        </a>
                    </li>
                </ul>
                <ul class="nav justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link btn-success hvr-curl-top-left" href="../../tuyendung/html/TrangChuNhaTuyenDung.php" id="navbarDropdown" role="button" aria-expanded="false">
                            Dành cho nhà tuyển dụng
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <!-- <li><a class="dropdown-item hvr-grow-shadow" href="/tuyendung/html/DangNhapDanhChoNhaTuyenDung.php">Đăng nhập</a>
                                </li> -->
                            <li><a class="dropdown-item hvr-grow-shadow" href="../../tuyendung/html/DangNhapDanhChoNhaTuyenDung.php">Đăng nhập</a>
                            </li>

                            <li><a class="dropdown-item hvr-grow-shadow" href="../../tuyendung/html/DangTinVaTimUngVien.php">Tuyển
                                    dụng</a></li>

                            <li><a class="dropdown-item hvr-grow-shadow" href="../../tuyendung/html/QuanLiHoSo.php">Quản Lí Ứng
                                    Viên</a></li>

                            <li><a class="dropdown-item hvr-grow-shadow" href="../../tuyendung/html/QuanLiHoSo.php">Quản Lí
                                    Hồ Sơ</a>
                            </li>
                        </ul>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Phần thân đăng nhập  -->
    <div class="container-fluid bg">
        <div class="row" id="apple">
            <!-- Video background website  -->
            <video autoplay="autoplay" loop="loop" width="100%" id="video_background">
                <source src="/PROJECT_JOB/image/JOB/BG_LOGIN_nice.mp4" type="video/mp4">
            </video>
            <!-- form đăng nhập  -->
            <form class="form" id="form_tuyendung" method="POST">
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
                    <input type="submit" class="btn btn-success" placeholder="Đăng Nhập" value="Đăng Nhập" id="button">
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
    <!-- Phần Trang web -->
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