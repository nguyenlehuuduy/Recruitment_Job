<?php
session_start();
require 'db_connection.php';

if (isset($_POST['user_tieude']) && isset($_POST['user_dienthoai']) && isset($_POST['user_email']) && isset($_POST['user_chucdanh'])  && isset($_POST['user_tencongty']) && isset($_POST['user_mota']) && isset($_POST['user_diadiem'])  && isset($_POST['user_dangtuyen']) && isset($_POST['user_noidung']) && isset($_POST['user_dongy'])) {


    if (!empty(trim($_POST['user_tieude']))  && !empty(trim($_POST['user_dienthoai'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_chucdanh']) && !empty(trim($_POST['user_tencongty'])) && !empty(trim($_POST['user_mota'])) && !empty($_POST['user_diadiem']) && !empty(trim($_POST['user_dangtuyen'])) && !empty(trim($_POST['user_noidung'])) && !empty($_POST['user_dongy'])) {

        $user_tieude = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_tieude']));
        $user_dienthoai = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_dienthoai']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
        $user_chucdanh = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_chucdanh']));
        $user_tencongty = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_tencongty']));
        $user_mota = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_mota']));
        $user_diadiem = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_diadiem']));
        $user_dangtuyen = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_dangtuyen']));
        $user_noidung = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_noidung']));
        $user_dongy = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_dongy']));

        $insert_user = mysqli_query($db_connection, "INSERT INTO `baidang` (user_tieude,user_dienthoai,user_email,user_chucdanh,user_tencongty,user_mota,user_diadiem,user_dangtuyen,user_noidung,user_dongy)
                                              VALUES ('$user_tieude','$user_dienthoai', '$user_email', '$user_chucdanh','$user_tencongty', '$user_mota', '$user_diadiem','$user_dangtuyen', '$user_noidung', '$user_dongy')");
        if ($insert_user === TRUE) {
            $success_message = "Cảm ơn! Bạn đã gửi thông tin thành công.";
        } else {
            $error_message = "Giáo sư! Có gì đó không đúng.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quản Lí Hồ Sơ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- link ic ảnh đầu website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- link css library hover-min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/hover-min.css">
    <!-- Link css cuối website  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/topandbottom.css">
    <!-- link css Quản lí hồ sơ chính của trang quảng lí hồ sơ  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/QuanLiHoSo.css">
    <!-- Script Biểu đồ thống kê -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <!-- Thống kê Số lượng người gửi đơn xin việc Năm 2021 -->
    <script src="/PROJECT_JOB/javascrip/js/nhatuyendung/quanlihoso.js"></script>
    <script src="/PROJECT_JOB/javascrip/js/nhatuyendung/ThongKe1.js"></script>
    <!--Thống kê Kinh nghiệm của người đăng ký -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/style.css">
    <!-- link css button  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/job/css/button.css">

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
                <!-- <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="DangKyChoNhaTuyenDung.php" style="color: rgb(84, 122, 163); ">
                        <button class="btn btn-outline-light hvr-curl-top-left">Đăng Ký</button>
                    </a>
                </li>
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="DangNhapDanhChoNhaTuyenDung.php" style="color: rgb(84, 122, 163);">
                        <button class="btn btn-outline-light hvr-curl-top-left">Đăng Nhập</button>
                    </a>
                </li> -->
                <li class="nav-item" id="fan">
                    <a class="nav-link animate__animated animate__fadeInDown" href="logout.php" style="color: rgb(84, 122, 163); ">
                        <button class="btn btn-outline-light hvr-curl-top-left">Đăng xuất</button>
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

    <!-- Phần giữa -->
    <div class="container" style="margin-top: 20px;">
        <!-- Tab Thống Kê Và Đăng tuyển dụng -->
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <!-- Thống Kê -->
            <li class="nav-item" role="presentation">
                <button class="nav-link hvr-icon-forward" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><b>
                        Thống Kê <i class="fa fa-chevron-circle-right hvr-icon"></i></b></button>
            </li>
            <!-- Đăng tuyển dụng -->
            <li class="nav-item" role="presentation">
                <button class="nav-link active  hvr-icon-back" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><b> <i class="fa fa-chevron-circle-left hvr-icon"></i>Đăng Tuyển Dụng</b></button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- Form đăng tuyển dụng -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-12 col-8">
                        <form method="post" class="row" style="margin-top: 50px;" action="">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Tiêu đề</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Nhập tiêu đề" name="user_tieude">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Điện Thoại</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nhập số điện thoại" name="user_dienthoai">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Nhập Email của bạn" name="user_email">
                            </div>
                            <div class="col-md-4">
                                <label for="inputAddress2" class="form-label">Chức Danh Của Bạn</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Chức Danh" name="user_chucdanh">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Tên Công Ty</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Tên Công Ty Của Bạn" name="user_tencongty">
                            </div>
                            <div class="col-md-10">
                                <label for="inputCity" class="form-label">Mô Tả Công Ty</label>
                                <div class="form-floating">
                                    <textarea name="user_mota" class="form-control" placeholder="Mô Tả Công Ty" id="floatingTextarea2" style="height: 100px;"></textarea>
                                    <label for="floatingTextarea2"></label>
                                </div>
                            </div>
                            <div class="col-md-4" style="margin-top: 10px;">
                                <label for="inputState" class="form-label">Địa điểm</label>
                                <select id="inputState" name="user_diadiem" class="form-select">
                                    <option selected>Chọn Địa Điểm</option>
                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                    <option value="Hà Nội">Hà Nội</option>
                                    <option value="Quảng Nam">Quảng Nam</option>
                                    <option value="Thái Bình">Thái Bình</option>
                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                    <option value="Khác...">Khác...</option>
                                </select>
                            </div>
                            <div class="col-md-6" style="margin-top: 10px;">
                                <label for="inputState" class="form-label">Sản Phẩm Dịch Vụ Quý Khách Quan Tâm</label>
                                <select id="inputState" name="user_dangtuyen" class="form-select">
                                    <option selected>Đăng Tuyển Dụng</option>
                                    <option value="Đăng Tuyển Dụng">Đăng Tuyển Dụng</option>
                                    <option value="Tìm Hồ Sơ Ứng Viên">Tìm Hồ Sơ Ứng Viên</option>
                                    <option value="Quảng Cáo Tuyển Dụng">Quảng Cáo Tuyển Dụng</option>
                                    <option value="Khác...">Khác...</option>
                                </select>
                            </div>
                            <div class="col-md-10" style="margin-top: 10px;">
                                <label for="inputCity" class="form-label text-dark">Nội Dung</label>
                                <div class="form-floating">
                                    <textarea name="user_noidung" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
                                    <label for="floatingTextarea2"></label>
                                </div>
                            </div>
                            <div class="col-12" style="margin-top: 10px;">
                                <div class="form-check">
                                    <input name="user_dongy" class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" style="color: rgb(0, 8, 8);" for="gridCheck">
                                        Đồng ý đăng tuyển
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="button_green" type="submit"> Đăng tuyển </button>
                            </div>
                        </form>
                        <?php
                        if (isset($success_message)) {
                            echo '<div class="success_message">' . $success_message . '</div>';
                        }
                        if (isset($error_message)) {
                            echo '<div class="error_message">' . $error_message . '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Thống kê  -->
            <div class="tab-pane fade text-center" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <!-- Thống kê theo số người gửi đơn xin việc -->
                <div class="row" style="margin-top: 20px;">
                    <h2><b><b>Số lượng người gửi đơn xin việc Năm 2021</b></b>
                    </h2>
                    <div id="chartdiv1"></div>
                </div>
                <!-- Thống kê theo kinh nghiệm của ngươi đăng kí -->
                <div class="row">
                    <h2><b><b>Kinh nghiệm của người đăng ký</b></b>
                    </h2>
                    <div id="chartdiv"></div>
                </div>
                <!-- Gợi ý cũ -->
                <!-- <div class="row text-center" style="margin-top: 50px;">
                    <h2><b><b>Kinh nghiệm của người đăng ký</b></b>
                    </h2>
                    <div class="col-md-12">
                        <div class="progress-title">
                            <h3 style="color: blue;">Chưa Có kinh nghiệm</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 35%; background-color:blue;">
                                    <div class="progress-value">
                                        35%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: chartreuse;">Đã có kinh nghiệm 1 năm</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 25%; background-color:chartreuse;">
                                    <div class="progress-value">
                                        25%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: brown;">Đã có kinh nghiệm 3 năm</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%; background-color:brown;">
                                    <div class="progress-value">
                                        20%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: crimson;">Đã có kinh nghiệp 5 năm</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%; background-color:crimson;">
                                    <div class="progress-value">
                                        10%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="progress-title">
                            <h3 style="color: red;">Kinh nghiệm trên 5 năm</h3>
                            <div class="progress">
                                <div class="progress-bar" style="width: 5%; background-color:red;">
                                    <div class="progress-value">
                                        5%
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Cuối Trang Web  -->
    <div class="container-fluid bg-dark text-white" style="margin-top: 50px;">
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
    <!-- Thư viện AOS  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--------- Nhúng JS của Bootstrap -------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>