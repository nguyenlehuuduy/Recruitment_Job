<?php
session_start();
require 'db_connection.php';

if (isset($_POST['user_ten']) && isset($_POST['user_ho']) && isset($_POST['user_email']) && isset($_POST['user_phone'])) {


    if (!empty(trim($_POST['user_ten']))  && !empty(trim($_POST['user_ho'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_phone'])) {
        $user_ten = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ten']));
        $user_ho = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ho']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
        $user_phone = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_phone']));
        $insert_user = mysqli_query($db_connection, "INSERT INTO `dichvu` (user_ten,user_ho,user_email,user_phone) VALUES ('$user_ten','$user_ho', '$user_email', '$user_phone')");

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
    <title>Trang Chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Link ic trang chủ website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css của framework hovermin  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/hover-min.css">
    <!-- Link css của cuối trang web  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/topandbottom.css">
    <!-- Link css chính của Trang chủ  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/TrangChuNhaTuyenDung.css">
    <!-- link css button  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/job/css/button.css">
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/style.css">
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
    <!-- Phần giữa trang web  -->
    <div class="container-fluid">
        <!-- background video Trang chủ  -->
        <div class="row hvr-glow">
            <video autoplay="autoplay" loop="loop" width="100%">
                <source src="/PROJECT_JOB/image/LOGOVIECLAM/VIDEOJOB/TRANGCHU_GREAT.mp4" type="video/mp4">
            </video>
        </div>
        <!-- Phần giới thiệu trang chủ  -->
        <section id="team">
            <!-- 4 phần -->
            <div class="container my-3 py-5 text-center" id="TrangGiua">
                <!-- Đăng tuyển dụng và tìm hồ sơ ứng viên -->
                <div class="row">
                    <!--1 Đăng tuyển dụng -->
                    <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class=" card hvr-pulse-shrink">
                            <div class="card-body ">
                                <h3><b>Đăng tuyển dụng</b></h3>
                                <p><b>Xây dựng đội ngũ nhân tài cho doanh nghiệp</b></p>
                                <p>Thông tin đăng tuyển của bạn sẽ hiển thị trực tuyến trên nguyenlehuuduy.vn và các trang đối tác của chúng tôi trong vòng 30 ngày.</p>
                            </div>
                            <div class="btn ">
                                <button class="btn btn-outline-light text-danger ">Xem thêm -></button>
                            </div>
                        </div>
                    </div>
                    <!--2 Tìm hồ sơ ứng viên -->
                    <div class="col-md-6" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="card hvr-pulse-shrink">
                            <div class="card-body ">
                                <h3><b>Tìm hồ sơ ứng viên</b></h3>
                                <p><b>Không bỏ lỡ nhân tài</b></p>
                                <p>Truy cập vào hàng trăm ngàn hồ sơ hoàn chỉnh và được cập nhật mới thường xuyên để tìm kiếm những ứng viên phù hợp nhất với vị trí tuyển dụng.</p>
                            </div>
                            <div class="btn">
                                <button class="btn btn-light ">Tìm hồ sơ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row " style="margin-top: 50px; ">
                    <!--3 Giải Pháp Tài Năng -->
                    <div class="col-md-6" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="card hvr-pulse-shrink">
                            <div class="card-body ">
                                <h3><b>Giải pháp tài năng</b></h3>
                                <p><b>Kết nối, tuyển dụng & quản lý nhân tài</b></p>
                                <p>Talent Solution là một Giải Pháp Kết Nối - Tuyển Dụng & Quản Lý Nhân Tài toàn diện được sáng tạo độc quyền cho từng doanh nghiệp, ứng dụng công nghệ kỹ thuật tiên tiến nhất để thu hút ứng viên trên mọi nguồn, mọi thiết
                                    bị.
                                </p>
                            </div>
                            <div class="btn ">
                                <button class="btn btn-outline-light text-danger ">Xem thêm -></button>
                            </div>
                        </div>
                    </div>
                    <!--4 Quảng cáo tuyển dụng -->
                    <div class="col-md-6" data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <div class="card hvr-pulse-shrink">
                            <div class="card-body ">
                                <h3><b>Quảng cáo tuyển dụng</b></h3>
                                <p><b>Xây dựng thương hiệu tuyển dụng ấn tượng trong mắt ứng viên</b></p>
                                <p>Quảng cáo tuyển dụng có thể thu hút sự chú ý của các ứng viên tài năng nhờ gắn liên kết trực tiếp đến thông tin tuyển dụng của bạn trên Logo hoặc Banner.Đây là 1 ý tưởng hay</p>
                            </div>
                            <div class="btn ">
                                <button class="btn btn-outline-light text-danger ">Xem thêm -></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Giới thiệu dịch vụ -->
    <div class="container ">
        <div class="text-h2 text-center ">
            <h1><b>Dịch vụ của chúng tôi</b></h1>
            <p><b>Chúng tôi cung cấp nhiều dịch vụ giúp nhà tuyển dụng kết nối với nhiều nhân tài hơn, để họ có thể kết nối với ứng cử viên nhanh hơn</b></p>
        </div>
        <!-- Giới thiệu dịch vụ đăng tuyển -->
        <div class="row " style="margin-top: 100px; ">
            <!-- Ảnh giới thiệu phần đăng tuyển -->
            <div class="col-md-6 " data-aos="zoom-in" data-aos-duration="2000">
                <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/IMAGE.svg " alt=" " width="100% ">
            </div>
            <!-- Thông tin chính phần đăng tuyển -->
            <div class="col-md-6 ">
                <div class="Text-IMAGE ">
                    <h2 class="h2 "><b>Đăng Tuyển</b></h2>
                    <ul class="ul-image " style="margin-top: 30px; ">
                        <li class="li-image ">
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" "> Đảm bảo hài lòng 100%</p>
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" "> Đăng tuyển nhanh chóng và nhận hồ sơ ngay lập tức</p>
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" "> Quản lý hồ sơ trực tuyến của bạn dễ dàng
                            </p>
                            <p>Giảm giá 10% đến cuối tháng, có điều kiện áp dụng. Chỉ áp dụng cho đơn hàng trực tuyến và không áp dụng với các chương trình khuyến mãi khác.</p>
                        </li>
                    </ul>
                    <!-- Form mua dịch vụ của đăng tuyển -->
                    <div class="col-sm-6" id="model">
                        <button id="button_buy" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <b>Mua Ngay -></b>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dịch vụ của chúng tôi</h5><br>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <span><i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i></span> -->
                                        <div class="alert alert-danger" role="alert">
                                            <i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i>
                                        </div>
                                        <hr>
                                        <form class="row g-3" action="" method="post">
                                            <div class="col-sm-12 text-center">
                                                <h6>Chào mừng bạn sử dụng dịch vụ của chúng tôi</h6>
                                                <p style="font-size: 12px;">(Chúng tôi sẽ sớm kết nối với bạn qua Gmail để giúp bạn hiểu chi tiết về mục này)</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputAddress" class="form-label">Tên </label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Nhập tên của bạn" name="user_ten">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNảm" class="form-label">Họ</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nhập họ của bạn" name="user_ho">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Nhập Email của bạn" name="user_email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Số điện thoại</label>
                                                <input type="tel" class="form-control" id="inputnumber" placeholder="Nhập số điện thoại của bạn" name="user_phone">
                                            </div>
                                            <div class="modal-footer">
                                                <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;"> Gửi</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Giới thiệu dịch vụ Tìm Hồ Sơ -->
        <div class="row " style="margin-top: 100px; ">
            <!-- Thông tin chính của phần tìm hồ sơ -->
            <div class="col-md-6 ">
                <div class="Text-IMAGE ">
                    <h2><b>Tìm hồ sơ</b></h2>
                    <ul class="ul-image " style="margin-top: 30px; ">
                        <li class="li-image ">
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" "> 30 ngày truy cập không giới hạn hệ thống dữ liệu chuyên nghiệp</p>
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" "> Tìm ứng viên hiệu quả và nhanh chóng
                            </p>
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" ">Chủ động tìm kiếm ứng viên ngay hôm nay
                            </p>
                        </li>
                    </ul>
                    <!--Form dịch vụ tìm hồ sơ -->
                    <div class="col-sm-6" id="model">
                        <button id="button_buy" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <b>Mua Ngay -></b>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dịch vụ của chúng tôi</h5><br>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <span><i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i></span> -->
                                        <div class="alert alert-danger" role="alert">
                                            <i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i>
                                        </div>
                                        <hr>
                                        <form class="row g-3" action="" method="post">
                                            <div class="col-sm-12 text-center">
                                                <h6>Chào mừng bạn sử dụng dịch vụ của chúng tôi</h6>
                                                <p style="font-size: 12px;">(Chúng tôi sẽ sớm kết nối với bạn qua Gmail để giúp bạn hiểu chi tiết về mục này)</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputAddress" class="form-label">Tên </label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Nhập tên của bạn" name="user_ten">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNảm" class="form-label">Họ</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nhập họ của bạn" name="user_ho">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Nhập Email của bạn" name="user_email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Số điện thoại</label>
                                                <input type="tel" class="form-control" id="inputnumber" placeholder="Nhập số điện thoại của bạn" name="user_phone">
                                            </div>
                                            <div class="modal-footer">
                                                <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;"> Gửi</button>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ảnh giới thiệu phần tìm hồ sơ -->
            <div class="col-md-6 " data-aos="zoom-in" data-aos-duration="2000">
                <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/IMAGE1.svg " alt=" " width="100% ">
            </div>
        </div>
        <!-- Giới thiệu phần quảng bá thương hiệu -->
        <div class="row " style="margin-top: 100px; ">
            <!-- Ảnh giới thiệu phần quảng bá thương hiệu -->
            <div class="col-md-6 " data-aos="zoom-in" data-aos-duration="2000">
                <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/IMAGE2.svg " alt=" " width="100% ">
            </div>
            <!-- Thông tin chính phần quảng bá thương hiệu -->
            <div class="col-md-6 ">
                <div class="Text-IMAGE">
                    <h2><b>Quảng bá thương hiệu</b></h2>
                    <ul class="ul-image " style="margin-top: 30px;">
                        <li class="li-image ">
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" "> Trang chủ nguyenlehuuduy.vn ước tính dạt 1000 lượt truy cập mỗi tháng từ các ứng viên và chuyên gia giỏi nhất tại Việt Nam
                            </p>
                            <p><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg " alt=" "> Đặt Logo và Banner tại trang chủ sẽ là vị trí chiến lược để thu hút nhân tài/p>
                        </li>
                    </ul>
                    <!-- form dịch vụ của quảng bá thương hiệu -->
                    <div class="col-sm-6" id="model">
                        <button id="button_buy" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <b>Mua Ngay -></b>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Dịch vụ của chúng tôi</h5><br>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <span><i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i></span> -->
                                        <div class="alert alert-danger" role="alert">
                                            <i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i>
                                        </div>
                                        <hr>
                                        <form class="row g-3" action="" method="post">
                                            <div class="col-sm-12 text-center">
                                                <h6>Chào mừng bạn sử dụng dịch vụ của chúng tôi</h6>
                                                <p style="font-size: 12px;">(Chúng tôi sẽ sớm kết nối với bạn qua Gmail để giúp bạn hiểu chi tiết về mục này)</p>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputAddress" class="form-label">Tên </label>
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Nhập tên của bạn" name="user_ten">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputNảm" class="form-label">Họ</label>
                                                <input type="text" class="form-control" id="inputPassword4" placeholder="Nhập họ của bạn" name="user_ho">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="Nhập Email của bạn" name="user_email">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmail4" class="form-label">Số điện thoại</label>
                                                <input type="tel" class="form-control" id="inputnumber" placeholder="Nhập số điện thoại của bạn" name="user_phone">
                                            </div>
                                            <div class="modal-footer">
                                                <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;"> Gửi</button>
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Đăng tuyển gợi ý  -->
    <div class="container " style="margin-top: 50px; ">
        <div class="row ">
            <div class="text-dangtuyen text-center ">
                <h3><b>
                        <b>Bạn có muốn đăng tuyển ngay hôm nay ?</b>
                    </b>
                </h3>
                <input id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;" value="Đăng tuyển" width="20%">
            </div>
        </div>
    </div>
    <!-- Cuối Trang Web  -->
    <div class="container-fluid bg-dark text-white " style="margin-top: 50px; ">
        <section class="top-footer cb-section cb-section-border-bottom ">
            <div class="row ">
                <div class="col-lg-12 logo "><img class="lazy-bg " src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png " height="100px " width="200px " style="float: left; margin-top: 10px; " alt="Tuyển dụng &amp; Tìm kiếm việc làm nhanh "></div>
                <div class="col-lg-2 col-sm-6 ">
                    <div class="footer-links ">
                        <h3>Dành Cho Ứng Viên</h3>
                        <ul>
                            <li><a target="_blank " href="# ">Việc làm mới nhất</a></li>
                            <li><a target="_blank " href="# ">CV Hay</a></li>
                            <li><a target="_blank " href="# ">Lương</a></li>
                            <li><a target="_blank " href="# ">Cẩm Nang</a></li>
                            <li><a target="_blank " href="# ">IT Blogs</a></li>
                            <li><a target="_blank " href="# ">Sơ Đồ Trang Web</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 ">
                    <div class="footer-links ">
                        <h3>Nhà Tuyển Dụng</h3>
                        <ul>
                            <li><a target="_blank " href="# ">Đăng Tuyển Dụng</a></li>
                            <li><a target="_blank " href="# ">Tìm Hồ Sơ</a></li>
                            <li><a target="_blank " href="# ">Giải Pháp</a></li>
                            <li><a target="_blank " href="# ">Sản Phẩm Dịch Vụ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 ">
                    <div class="footer-links ">
                        <h3>Trung tâm trợ giúp</h3>
                        <ul>
                            <li><a target="_blank " href="# ">Về nguyenlehuuduy.vn</a></li>
                            <li><a target="_blank " href="# ">Chính Sách BV Thông Tin</a></li>
                            <li><a target="_blank " href="# ">Chính sách GDPR</a></li>
                            <li><a target="_blank " href="# ">Quy chế sàn giao dịch</a></li>
                            <li><a target="_blank " href="# ">Thỏa thuận sử dụng</a></li>
                            <li><a target="_blank " href="# ">Quy định bảo mật</a></li>
                            <li><a target="_blank " href="# ">QT Giải Quyết Tranh Chấp</a></li>
                            <li><a target="_blank " href="# ">Trợ giúp</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 ">
                    <div class="footer-links ">
                        <h3>Website Đối Tác</h3>
                        <ul>
                            <li><a target="_blank " href="# ">NguyenLeHuuDuy</a></li>
                            <li><a target="_blank " href="# ">Vieclam.Tuoitre.vn</a></li>
                            <li><a target="_blank " href="# ">Vieclam.Vietnamnet.vn</a></li>
                            <li><a target="_blank " href="# ">Vieclam.Thanhnien.vn</a></li>
                            <li><a target="_blank " href="# ">VieclamIT.vn</a></li>
                            <li><a target="_blank " href="# ">Liên Hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-12 ">
                    <div class="footer-app-links ">
                        <h3>Tìm Kiếm Mọi Lúc Mọi Nơi</h3>
                        <div class="app-links ">
                            <a href="# " target="_blank " style="float: left; ">
                                <img class="lazy-bg " src="/PROJECT_JOB/image/HinhAnhWEB/apple.png " alt="app "> </a>
                            <a href="# " target="_blank ">
                                <img class="lazy-bg " src="/PROJECT_JOB/image/HinhAnhWEB/android.png " alt="app "> </a>
                        </div>
                    </div>
                    <div class="footer-social-links ">
                        <h3>Kết nối với nguyenlehuuduy.vn</h3>
                        <ul>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/facebook.png " alt=" " height="30px " width="30px ">
                                <b>Facebook.com</b>
                            </li><br>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/instagram.png " alt=" " height="30px " width="30px "><b>Instagram</b></li><br>
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/zalo.png " alt=" " height="30px " width="30px "><b>Zalo</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="bottom-footer ">
            <div class="left-bottom-footer ">
                <p>Trụ Sở Chính : 470 Trần Đại Nghĩa - Trường Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt - Hàn - Quận Ngũ Hành Sơn</p>
                <p>Văn Phòng : Ký Túc Xá Trường Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt - Hàn </p>
                <p>Email : nlhduy.20it7@vku.udn.vn</p>
                <p>Số Điện Thoại : 0358650975</p>
                <p>Mọi Thông Tin Chi Tiết Xin Vui Lòng Liên Hệ Cho Chúng Tôi .</p>
            </div>
            <div class="right-bottom-footer ">
                <a target="_blank " href="# ">
                    <img class="lazy-bg " src="/PROJECT_JOB/image/HinhAnhWEB/dk.png " alt="bct " style="float: right; margin-top: -100px; margin-right: 100px; ">
                </a>
            </div>
        </section>

    </div>
    <!-- Thư viện AOS  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js "></script>
    <script>
        AOS.init();
    </script>
    <!--------- Nhúng JS của Bootstrap -------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js " integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js " integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc " crossorigin="anonymous "></script>
</body>

</html>