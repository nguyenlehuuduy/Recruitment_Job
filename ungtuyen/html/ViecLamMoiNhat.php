<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Việc Làm Mới Nhất</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Liên kết CSS thẻ hovemin -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- Liên kết CSS cuối trang web -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/topandbottom.css">
    <!-- Liên kết CSS Việc làm mới nhất -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/ViecLamMoiNhat.css">

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
                            <a class="nav-link active hvr-curl-top-left" aria-current="page" href="DangKy.php">
                                Đăng Ký
                            </a>
                        </li>
                    </ul> -->
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

    <!-- Thanh Tìm Kiếm Việc Làm -->
    <div class="container" style="margin-top: 40px;">
        <div class="row">
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Chức danh , kỹ năng , tên công ty" required name="">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="Tất cả ngành nghề" required name="">
            </div>
            <div class="col-sm-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Tất cả địa điểm" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-success" type="button" id="button-addon2">Tìm Kiếm</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 40px;">
        <!-- Hàng công việc row 1 -->
        <div class="row">
            <!-- Công việc  SIXTYFOUR-->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGOV-SIXTYFOUR.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/job_job_V-SIXTYFOUR.php">CÔNG TY CỔ PHẦN V-SIXTYFOUR</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Trưởng Phòng Maketing</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src=".VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 10 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công việc  CTTNHHFITMED -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTTNHHFITMED.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_FITMED.php">CÔNG TY TNHH FITMED</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Điều Dưỡng </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 10 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công việc  FPT -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-FPT.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_FPTTELECOM.php">FPT TELECOM</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Nhân Viên Kỹ Thuật </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 20 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hàng công việc row 2 -->

        <div class="row">
            <!-- Công việc  Chứng khoán-->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CHUNGKHOANG.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_TANVIET.php">CÔNG TY CỔ PHẦN CHỨNG KHOÁN TÂN VIỆT</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Nhân Viên Vận Hành Hỗ Trợ (IT Support) </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 30 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công việc  Tuyên quang-->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTCPDIenQuang.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_DIENQUANG.php">CÔNG TY CỔ PHẦN BÓNG ĐÈN ĐIỆN QUANG</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> FIMRWARE DEVELOPER (GOOD JOB) </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 15 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc An Việt  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTTNHHAnVIet.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_ANVIETPHAT.php">CÔNG TY TNHH MTV NĂNG LƯỢNG AN VIỆT PHÁT</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Phó Giám Đốc Hành chính - Nhân sự
                        </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 1 tháng </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hàng công việc row 3 -->
        <div class="row">
            <!-- Công Việc Hoàng Phúc  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTHOANGPHUC.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_HOANGPHUC.php">CÔNG TY ĐẦU TƯ HOÀNG PHÚC QUỐC TẾ</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b>FASHION PHOTOGRAPHER</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 18 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc SunJin  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-SỤNin.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_SUNJIN.php">CÔNG TY TNHH SUNJIN VINA</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Nhân Viên Kinh Doanh Thực Phẩm (Thịt Heo) </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 24 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc Wacontre  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-Wacontre.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_WACONTRE.php">CÔNG TY TNHH MTV WACONTRE</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> IT Business Application Specialist (Logistics)_EDI project </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 8 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hàng công việc row 4 -->
        <div class="row">
            <!-- Công Việc Naman  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-NAMAN.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_NAMANMAKET.php">NAM AN MARKET</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b>Nhân Viên Giao Nhận</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 18 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc ĐPM -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-DAIPHUMY.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_DAIPHUMY.php">CÔNG TY CỔ PHẦN ĐẠI PHÚ MỸ</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Kỹ sư thiết kế MEP </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 24 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Coogn Việc Lixil  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-LIXIL.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_LIXIL.php">LIXIL GLOBAL MANUFACTURING</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Quản Lý Line Sản Xuất</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 8 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hàng công việc row 5 -->
        <div class="row">
            <!-- Công việc  SIXTYFOUR-->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGOV-SIXTYFOUR.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/job_job_V-SIXTYFOUR.php">CÔNG TY CỔ PHẦN V-SIXTYFOUR</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Trưởng Phòng Maketing</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src=".VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 10 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công việc  CTTNHHFITMED -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTTNHHFITMED.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_FITMED.php">CÔNG TY TNHH FITMED</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Điều Dưỡng </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 10 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công việc  FPT -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-FPT.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_FPTTELECOM.php">FPT TELECOM</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Nhân Viên Kỹ Thuật </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 20 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hàng công việc row 6 -->

        <div class="row">
            <!-- Công việc  Chứng khoán-->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CHUNGKHOANG.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_TANVIET.php">CÔNG TY CỔ PHẦN CHỨNG KHOÁN TÂN VIỆT</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Nhân Viên Vận Hành Hỗ Trợ (IT Support) </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 30 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công việc  Tuyên quang-->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTCPDIenQuang.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_DIENQUANG.php">CÔNG TY CỔ PHẦN BÓNG ĐÈN ĐIỆN QUANG</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> FIMRWARE DEVELOPER (GOOD JOB) </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 15 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc An Việt  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTTNHHAnVIet.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_ANVIETPHAT.php">CÔNG TY TNHH MTV NĂNG LƯỢNG AN VIỆT PHÁT</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Phó Giám Đốc Hành chính - Nhân sự
                        </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 1 tháng </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hàng công việc row 7 -->
        <div class="row">
            <!-- Công Việc Hoàng Phúc  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTHOANGPHUC.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_HOANGPHUC.php">CÔNG TY ĐẦU TƯ HOÀNG PHÚC QUỐC TẾ</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b>FASHION PHOTOGRAPHER</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 18 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc SunJin  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-SỤNin.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_SUNJIN.php">CÔNG TY TNHH SUNJIN VINA</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Nhân Viên Kinh Doanh Thực Phẩm (Thịt Heo) </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 24 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc Wacontre  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-Wacontre.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_WACONTRE.php">CÔNG TY TNHH MTV WACONTRE</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> IT Business Application Specialist (Logistics)_EDI project </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 8 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hàng công việc row 8 -->
        <div class="row">
            <!-- Công Việc Naman  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-NAMAN.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">NAM AN MARKET</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b>Nhân Viên Giao Nhận</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 18 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Công Việc ĐPM -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-DAIPHUMY.png"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_DAIPHUMY.php">CÔNG TY CỔ PHẦN ĐẠI PHÚ MỸ</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Kỹ sư thiết kế MEP </p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 24 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Coogn Việc Lixil  -->
            <div class="col-md-4">
                <div class="blog-card blog-card-blog">
                    <div class="blog-card-image">
                        <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-LIXIL.jpg"> </a>
                        <div class="ripple-cont"></div>
                    </div>
                    <div class="blog-table">
                        <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News</h6>
                        <h4 class="blog-card-caption">
                            <a href="job/html/JOB_LIXIL.php">LIXIL GLOBAL MANUFACTURING</a>
                        </h4>
                        <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Quản Lý Line Sản Xuất</p>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Lương <br>
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/map.png" alt=""> Đà Nẵng &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/baohiem.png" alt=""> Bảo Hiểm &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/lich.png" alt=""> Lịch &emsp;&emsp;
                        <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/Tien.png" alt=""> Chế độ thưởng
                        <div class="ftr">
                            <div class="author">
                                <img src="/PROJECT_JOB/image/VIECLAMMOINHAT/love.png" alt=""> Lưu Việc Làm
                            </div>
                            <div class="stats"> <i class="far fa-clock"></i> 8 ngày trước </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Cuối trang web  -->


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
    <!-- Parallax khi Hover với Tilt.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.1.20/dest/tilt.jquery.min.js"></script>

    <!--------- Nhúng JS của Bootstrap -------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>