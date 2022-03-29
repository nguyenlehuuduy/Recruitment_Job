<?php
session_start();
require 'db_connection.php';
if (isset($_SESSION['user_email']) && !empty($_SESSION['user_email'])) {

    $user_email = $_SESSION['user_email'];
    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_email = '$user_email'");
    $userData =  mysqli_fetch_assoc($get_user_data);
} else {
    header('Location: logout.php');
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang Chủ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Link ic website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css của Trang chủ -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/Trangchu.css">
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Link css library hover min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- Thư viện AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Liên kết CSS cuối trang web -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/topandbottom.css">
</head>

<body>
    <!-- Thanh NAVBAR Điều khiển liên kết trong website -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="TrangChu1.php"><img src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" alt="" style="width: 200px;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link active hvr-curl-top-left" aria-current="page" href="TrangChu1.php">
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
                        <li class="nav-item">
                            <a class="nav-link active hvr-curl-top-left" aria-current="page" href="LUONG.php">
                                Hồ sơ cá nhân
                            </a>
                        </li>


                    </ul>
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active hvr-curl-top-left" aria-current="page" href="logout.php">
                               Đăng Xuất
                            </a>
                        </li>
                    </ul>
                    <!-- <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link active hvr-curl-top-left" aria-current="page" href="DangNhap.php">
                                Đăng Nhập
                            </a>
                        </li>
                    </ul> -->
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
    <!-- Giữa Trang Web  -->
    <!-- Video intro Trang chủ -->
    <div class="container-fluid">
        <video autoplay="autoplay" loop="loop" width="100%">
            <source src="/PROJECT_JOB/image/VIDEO_MP4/backgroundnguyeduy.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="row">
            <h2 class="h2-text">Nhà Tuyển Dụng Hàng Đầu</h2>
        </div>
    </div>
    <!-- Giới thiệu 6 nhà tuyển dụng -->
    <div class="container-fluid TUYENDUNG" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-2 text-center colnhatuyendung hvr-pulse-shrink">
                <img src="/PROJECT_JOB/image/HinhAnhWEB/nhatuyendung1.gif" alt="" class="img">
            </div>
            <div class="col-sm-2 text-center colnhatuyendung hvr-pulse-shrink">
                <img src="/PROJECT_JOB/image/HinhAnhWEB/nhatuyendung2.jpg" alt="" class="img">
            </div>
            <div class="col-sm-2 text-center colnhatuyendung hvr-pulse-shrink">
                <img src="/PROJECT_JOB/image/HinhAnhWEB/nhatuyendung3.gif" alt="" class="img">
            </div>
            <div class="col-sm-2 text-center colnhatuyendung hvr-pulse-shrink">
                <img src="/PROJECT_JOB/image/HinhAnhWEB/nhatuyendung4.gif" alt="" class="img">
            </div>
            <div class="col-sm-2 text-center colnhatuyendung hvr-pulse-shrink">
                <img src="/PROJECT_JOB/image/HinhAnhWEB/nhatuyendung5.gif" alt="" class="img">
            </div>
            <div class="col-sm-2 text-center colnhatuyendung hvr-pulse-shrink">
                <img src="/PROJECT_JOB/image/HinhAnhWEB/nhatuyendung6.gif" alt="" class="img">
            </div>
        </div>
    </div>
    <!-- Phần logo Quảng Cáo cho website  -->
    <div class="container" style="margin-top: 30px; ">
        <div class="row">
            <div class="col-sm-6">
                <img src="/PROJECT_JOB/image/IMAGEVIECLAM/LOGOQUANGCAO.jpg" style="width: 100%; height: 400px;" alt="" id="haqc" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            </div>
            <div class="col-sm-6">
                <img src="/PROJECT_JOB/image/IMAGEVIECLAM/LOGOQUANGCAO1.jpg" style="width: 100%; height: 400px;" alt="" id="haqc" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            </div>
        </div>
    </div>
    <!-- 2 Thẻ Nav cho phần Việc làm   -->
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-top: 40px;">
        <li class="nav-item" role="presentation">
            <a class="nav-link active hvr-bounce-out" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                <h2>Việc làm nổi bật</h2>
            </a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link hvr-bounce-out" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                <h2>Việc Làm Vip (1000$)</h2>
            </a>
        </li>
    </ul>

    <!-- Phần Việc làm -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div id="carouselExampleIndicators1" class="carousel slide">
                <!-- Thanh điều khiển  -->
                <div class="carousel-indicators">
                    <div class="show">
                        <button id="button"><b data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1">1</b></button>
                        <button id="button"><b data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1"
                                aria-label="Slide 2">2</b></button>
                        <button id="button"><b data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2"
                                aria-label="Slide 3">3</b></button>
                        <button id="button"><b data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="3"
                                aria-label="Slide 4">4</b></button>
                    </div>
                </div>

                <!-- Thanh Việc làm  nổi bậc-->
                <div class="carousel-inner" style=" height: 800px;">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">
                                    <!-- Trang 1 -->
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between ">
                                            <img src="/PROJECT_JOB/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Điều phối trạm giao nhận Hà Nội</h5> <br>
                                            <small>20 ngày trước</small>
                                        </div>
                                        <p class="mb-1">NinjaVan Việt Nam</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span>Lương Từ 8 Triệu
                                                - 10
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng</span>
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo9.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>3 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span>Lương thỏa
                                                thuận</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Tuyển Dụng </h5> <br>
                                            <small>2 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Thành Phố Đà Nẵng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo34.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>23 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 10 triệu-20
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo38.png" alt="">
                                            <h5 class="mb-11">Giảng Viên Kỹ Năng Mềm</h5> <br>
                                            <small>31 ngày trước</small>
                                        </div>
                                        <p class="mb-1">HDBank</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 8 Triệu - 10
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">
                                    <!-- Trang 2 -->
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo38.png" alt="">
                                            <h5 class="mb-11">Điều phối trạm giao nhận Hà Nội</h5> <br>
                                            <small>2 ngày trước</small>
                                        </div>
                                        <p class="mb-1">NinjaVan Việt Nam</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 8 Triệu - 10
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo16.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>3 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo11.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Tuyển Dụng </h5> <br>
                                            <small>24 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Thành Phố Đà Nẵng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo12.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>30 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 10 triệu-20
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo40.png" alt="">
                                            <h5 class="mb-11">Chuyên Gia Kỹ Năng Mềm</h5> <br>
                                            <small>2 ngày trước</small>
                                        </div>
                                        <p class="mb-1">HDBank</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 8 Triệu - 10
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 3  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Nhơ Thạch Đồng Nai</h5> <br>
                                            <small>3 tháng trước</small>
                                        </div>
                                        <p class="mb-1">Công TY Nhơn Thạch Đồng Nai</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 18 Triệu - 100
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đồng Nai
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo38.png" alt="">
                                            <h5 class="mb-11">Sản Xuất - Xuất Khẩu Thủy Hải Sản </h5> <br>
                                            <small>24 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Thiết Kế WebSite </h5> <br>
                                            <small>12 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Thiết Kế Phần Mềm MSV</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 20 triệu - 40
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo16.png" alt="">
                                            <h5 class="mb-11"> Sản xuất vật liệu xây dụng </h5> <br>
                                            <small>21 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Xi Măng - Cốt Thép</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 15 triệu-20
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            TP. Hồ Chí Minh
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo27.png" alt="">
                                            <h5 class="mb-11">Giảng Viên EngLish</h5> <br>
                                            <small>11 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Trung Tâm Anh ngữ Quốc Tế</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 18 Triệu - 50
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">
                                    <!-- Trang 4 -->
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Điều phối Quản Lí Hệ Thống</h5> <br>
                                            <small>12 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Thành Phần Duyên</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 18 Triệu - 30
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Quy Nhơn
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo18.png" alt="">
                                            <h5 class="mb-11"> Chuyên cung cấp Thủy - Hải Sản </h5><br>
                                            <small>23 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo19.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Tư Vấn Khách Hàng </h5> <br>
                                            <small>31 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Cổ Phần Dầu Khí</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 30 Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Quảng Nam
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo20.png" alt="">
                                            <h5 class="mb-11"> Phim Ảnh Truyền Thông</h5> <br>
                                            <small>31 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nhíp Ảnh</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 10 triệu-40
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo21.png" alt="">
                                            <h5 class="mb-11"> Kỹ Năng Bán Hàng</h5> <br>
                                            <small>13 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Thanh Lý</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 18 Triệu - 100
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 5  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo25.png" alt="">
                                            <h5 class="mb-11"> Quản Trị Viên</h5> <br>
                                            <small>3 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Kỹ Năng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 18 Triệu - 30
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo32.png" alt="">
                                            <h5 class="mb-11">Bảo Vệ Cao Cấp </h5><br>
                                            <small>21 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Vệ Sĩ Chuyên Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 30 Triệu - 50
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo24.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Kỹ Thuật Phầm Mềm </h5> <br>
                                            <small>11 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Một Thành Viên</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 30 Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo25.png" alt="">
                                            <h5 class="mb-11"> Thời Sự - Ký Sự</h5> <br>
                                            <small>3 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Phóng Viên Chuyên Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 30 triệu-40
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo26.png" alt="">
                                            <h5 class="mb-11"> Kỹ Thuật Marketing</h5> <br>
                                            <small>13 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Quảng Cáo Sản Phẩm</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 6  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo27.png" alt="">
                                            <h5 class="mb-11"> Nhân Khẩu Hệ Thống</h5> <br>
                                            <small>21 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Phần Mềm</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 128 Triệu - 300
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo24.png" alt="">
                                            <h5 class="mb-11">Nhân Duyên Tiền Định </h5><br>
                                            <small>32 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Duyên Phận</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Thỏa Thuận</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo29.png" alt="">
                                            <h5 class="mb-11">Yêu Thú Cưng </h5> <br>
                                            <small>3 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Chăm Sóc Và Bảo Vệ</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 30 Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo29.png" alt="">
                                            <h5 class="mb-11"> Bảo Mật Facebook</h5> <br>
                                            <small>13 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Bảo mật Cấp cao</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 25 triệu-40
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo30.png" alt="">
                                            <h5 class="mb-11"> Bán Hàng Online</h5> <br>
                                            <small>23 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Tìm Kiếm Nhân Sự</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Bắc Giang
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 6  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo26.png" alt="">
                                            <h5 class="mb-11"> Quản Lí Nhân Sự </h5> <br>
                                            <small>31 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Kỹ Năng Vip</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 30 Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo32.png" alt="">
                                            <h5 class="mb-11">Sống Khỏe Sống Đẹp </h5><br>
                                            <small>25 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Bảo Vệ Môi Trường</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 30 Triệu - 50
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo33.png" alt="">
                                            <h5 class="mb-11">Đường Phố Xanh Sạch Đẹp</h5> <br>
                                            <small>31 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Môi Trường</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 50 Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo34.png" alt="">
                                            <h5 class="mb-11"> Báo Nhân Dân</h5> <br>
                                            <small>33 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Truyền Thông - Thông Tin </p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 30 triệu-40
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo2.png" alt="">
                                            <h5 class="mb-11"> Kỹ Thuật Săn Sale Shope</h5> <br>
                                            <small>24 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Săn Sale</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 7  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11"> Bảo Vệ Cộng Đồng </h5> <br>
                                            <small>31 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Môi Trường Truyền Thông</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 50 Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo37.png" alt="">
                                            <h5 class="mb-11"> Thành Phần Xuất Khẩu </h5><br>
                                            <small>13 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Kỹ Năng Người Dùng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 10 Triệu - 30
                                                Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            TP.HỒ Chí Minh
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo11.png" alt="">
                                            <h5 class="mb-11">Tôi Yêu Việt Nam</h5> <br>
                                            <small>33 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Yêu Việt Nam</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương 50 Triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo24.png" alt="">
                                            <h5 class="mb-11"> Báo Cáo Hệ Thống</h5> <br>
                                            <small>43 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Truyền Thông - Thông Tin </p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương từ 30 triệu-40
                                                triệu</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo40.png" alt="">
                                            <h5 class="mb-11"> Duyệt sản phẩm</h5> <br>
                                            <small>32 ngày trước</small>
                                        </div>
                                        <p class="mb-1">Công Ty Duyệt Văn Phòng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương thỏa thuận</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div id="carouselExampleIndicatorss" class="carousel slide">
                <!-- Thanh điều khiển VIệc làm VIP -->
                <div class="carousel-indicators">
                    <div class="show">
                        <button id="button"><b data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1">1</b></button>
                        <button id="button"><b data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="1"
                                aria-label="Slide 2">2</b></button>
                        <button id="button"><b data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="2"
                                aria-label="Slide 3">3</b></button>
                        <button id="button"><b data-bs-target="#carouselExampleIndicatorss" data-bs-slide-to="3"
                                aria-label="Slide 4">4</b></button>
                    </div>
                </div>
                <!-- Thanh việc làm của việc làm ViP -->
                <div class="carousel-inner" style=" height: 800px;">
                    <!-- Trang 1 -->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo26.png" alt="">
                                            <h5 class="mb-11"> Quản Lí Nhân Sự </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Kỹ Năng Vip</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo32.png" alt="">
                                            <h5 class="mb-11">Sống Khỏe Sống Đẹp </h5><br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Bảo Vệ Môi Trường</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo33.png" alt="">
                                            <h5 class="mb-11">Đường Phố Xanh Sạch Đẹp</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Môi Trường</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo34.png" alt="">
                                            <h5 class="mb-11"> Báo Nhân Dân</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Truyền Thông - Thông Tin </p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo2.png" alt="">
                                            <h5 class="mb-11"> Kỹ Thuật Săn Sale Shope</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Săn Sale</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 7  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11"> Bảo Vệ Cộng Đồng </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Môi Trường Truyền Thông</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo37.png" alt="">
                                            <h5 class="mb-11"> Thành Phần Xuất Khẩu </h5><br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Kỹ Năng Người Dùng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            TP.HỒ Chí Minh
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo11.png" alt="">
                                            <h5 class="mb-11">Tôi Yêu Việt Nam</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Yêu Việt Nam</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo24.png" alt="">
                                            <h5 class="mb-11"> Báo Cáo Hệ Thống</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Truyền Thông - Thông Tin </p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo40.png" alt="">
                                            <h5 class="mb-11"> Duyệt sản phẩm</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Duyệt Văn Phòng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 3  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Nhơ Thạch Đồng Nai</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công TY Nhơn Thạch Đồng Nai</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đồng Nai
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo38.png" alt="">
                                            <h5 class="mb-11">Sản Xuất - Xuất Khẩu Thủy Hải Sản </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Thiết Kế WebSite </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Thiết Kế Phần Mềm MSV</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo16.png" alt="">
                                            <h5 class="mb-11"> Sản xuất vật liệu xây dụng </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Xi Măng - Cốt Thép</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            TP. Hồ Chí Minh
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo27.png" alt="">
                                            <h5 class="mb-11">Giảng Viên EngLish</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Trung Tâm Anh ngữ Quốc Tế</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">
                                    <!-- Trang 4 -->
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Điều phối Quản Lí Hệ Thống</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Thành Phần Duyên</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Quy Nhơn
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo18.png" alt="">
                                            <h5 class="mb-11"> Chuyên cung cấp Thủy - Hải Sản </h5><br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo19.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Tư Vấn Khách Hàng </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Cổ Phần Dầu Khí</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Quảng Nam
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo20.png" alt="">
                                            <h5 class="mb-11"> Phim Ảnh Truyền Thông</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nhíp Ảnh</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo21.png" alt="">
                                            <h5 class="mb-11"> Kỹ Năng Bán Hàng</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Thanh Lý</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 5  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo25.png" alt="">
                                            <h5 class="mb-11"> Quản Trị Viên</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Kỹ Năng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo32.png" alt="">
                                            <h5 class="mb-11">Bảo Vệ Cao Cấp </h5><br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Vệ Sĩ Chuyên Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo24.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Kỹ Thuật Phầm Mềm </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Một Thành Viên</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo25.png" alt="">
                                            <h5 class="mb-11"> Thời Sự - Ký Sự</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Phóng Viên Chuyên Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo26.png" alt="">
                                            <h5 class="mb-11"> Kỹ Thuật Marketing</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Quảng Cáo Sản Phẩm</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">

                                    <!-- Trang 6  -->

                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo27.png" alt="">
                                            <h5 class="mb-11"> Nhân Khẩu Hệ Thống</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Phần Mềm</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo24.png" alt="">
                                            <h5 class="mb-11">Nhân Duyên Tiền Định </h5><br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Duyên Phận</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo29.png" alt="">
                                            <h5 class="mb-11">Yêu Thú Cưng </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Chăm Sóc Và Bảo Vệ</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo29.png" alt="">
                                            <h5 class="mb-11"> Bảo Mật Facebook</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Bảo mật Cấp cao</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo30.png" alt="">
                                            <h5 class="mb-11"> Bán Hàng Online</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty Tìm Kiếm Nhân Sự</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Bắc Giang
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-6">
                                <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                            <h5 class="mb-11">Điều phối trạm giao nhận Hà Nội</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">NinjaVan Việt Nam</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo25.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo32.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Tuyển Dụng </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Thành Phố Đà Nẵng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo34.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo38.png" alt="">
                                            <h5 class="mb-11">Giảng Viên Kỹ Năng Mềm</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">HDBank</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="list-group">
                                    <!-- Trang 2 -->
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo29.png" alt="">
                                            <h5 class="mb-11">Điều phối trạm giao nhận Hà Nội</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">NinjaVan Việt Nam</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo16.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo11.png" alt="">
                                            <h5 class="mb-11">Chuyên Viên Tuyển Dụng </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Thành Phố Đà Nẵng</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo12.png" alt="">
                                            <h5 class="mb-11"> Nông Lâm Ngư Nghiệp </h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map" style="font-weight: bold;">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Đà Nẵng
                                        </span>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                                        <div class="d-flex w-100 justify-content-between">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo40.png" alt="">
                                            <h5 class="mb-11">Chuyên Gia Kỹ Năng Mềm</h5> <br>
                                            <small>
                                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/vip.png" alt="">
                                            </small>
                                        </div>
                                        <p class="mb-1">HDBank</p>
                                        <span class="Luong">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span
                                                style="color: red;">Lương Từ 1000$</span>
                                        </span> <br>
                                        <span class="Map">
                                            <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                            Hà Nội
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hình ảnh quảng cáo -->
    <div class="container-fluid" style="margin-top: 50px;">
        <div class="row">
            <div class="col-sm">
                <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QuangCao1.jpg" alt="" width="100%" id="quangcaoxs">
            </div>
        </div>
    </div>
    <!-- Hình ảnh quảng cáo kiểu banner -->
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-3">
                <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOTRUNGTAMA.png" alt="" id="quangcaotrungtam">
            </div>
            <div class="col-md-3">
                <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOTIKI.jpg" alt="" id="quangcaotrungtam">
            </div>
            <div class="col-md-3">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/QUANGCAOTRUNGTAM.jpg" alt="" id="quangcaotrungtam">
            </div>
            <div class="col-md-3">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/QUANGCAOTRUNGTAM2.jpg" alt="" id="quangcaotrungtam">
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <h2>Gia tăng cơ hội nghề nghiệp cùng các doanh nghiệp lớn</h2>
        </div>
    </div>
    <!-- Một số logo của các doanh nghiệp lớn -->
    <div class="container-fluid" style="margin-top: -50px;">
        <div class="row">
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOGIATANG/logo1.png" alt="" class="img">
            </div>
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOGIATANG/logo2.png" alt="" class="img">
            </div>
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOGIATANG/logo3.jpg" alt="" class="img">
            </div>
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/IMAGEVIECLAM/logo4.jpg" alt="" class="img">
            </div>
        </div>
        <div class="row" style="margin-top: -50px;">
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOGIATANG/logo5.png" alt="" class="img">
            </div>
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOGIATANG/logo6.png" alt="" class="img">
            </div>
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOGIATANG/logo7.png" alt="" class="img">
            </div>
            <div class="col-md-3 text-center colnhatuyendung hvr-float-shadow" id="col" data-aos="zoom-in" data-aos-duration="1000">
                <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOGIATANG/logo8.png" alt="" class="img">
            </div>
        </div>
        <div class="row">
            <h1 class="text-center"><b> Cẩm nang làm việc</b></h1>
        </div>
        <div id="camnang" class="row" style="margin: 50px; padding: 20px;">
            <div class="col-md-3 text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="card" style="width: 20rem;" id="teamcard">
                    <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOVIECLAM.jpg" class="card-img-top" alt="..." id="xoay">
                    <div class="card-body">
                        <h5 class="card-title"><b>Phát Triển Bản Thân</b></h5>
                        <p class="card-text text-center"><b>Luôn học hỏi và trao dồi kinh nghiệm làm việc ở mọi lúc mọi
                                nơi</b></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2200">
                <div class="card" style="width: 20rem;">
                    <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOVIECLAM1.jpg" class="card-img-top" alt="..." id="xoay1">
                    <div class="card-body">
                        <h5 class="card-title"><b>Tập trung tối đa</b></h5>
                        <p class="card-text text-center"><b>Sáng tạo và luôn luôn học hỏi những bài học mới</b></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2400">
                <div class="card" style="width: 20rem;">
                    <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOVIECLAM2.jpg" class="card-img-top" alt="..." id="xoay2">
                    <div class="card-body">
                        <h5 class="card-title"><b>Căng thẳng trong công việc</b></h5> <br>
                        <p class="card-text text-center "><b>Tập trung làm việc không sao nhãn </b></p>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2600">
                <div class="card" style="width: 20rem;">
                    <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOVIECLAM3.jpg" class="card-img-top" alt="..." id="xoay3">
                    <div class="card-body">
                        <h5 class="card-title"><b>Vượt Qua Thử Thách</b></h5>
                        <p class="card-text text-center"><b> Luôn hoàn thành công việc được giao một cách hoàn thiện và
                                tốt nhất có
                                thể</b></p>
                    </div>
                </div>
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
    <!-- Thư viện AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--------- Nhúng JS của Bootstrap -------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>