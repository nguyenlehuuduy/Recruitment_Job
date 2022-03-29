<?php
session_start();
require 'db_connection.php';
if (isset($_POST['user_ten']) && isset($_POST['user_ho']) && isset($_POST['user_email']) && isset($_POST['user_phone'])) {
    if (!empty(trim($_POST['user_ten']))  && !empty(trim($_POST['user_ho'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_phone'])) {

        $user_ten = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ten']));
        $user_ho = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ho']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
        $user_phone = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_phone']));

        $insert_user = mysqli_query($db_connection, "INSERT INTO `job` (user_ten,user_ho,user_email,user_phone) VALUES ('$user_ten','$user_ho', '$user_email', '$user_phone')");

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
    <title>FITMED</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css liên kết boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Link css ic đầu website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css thẻ hover min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- Link css chính của công việc -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/job/css/job_V-SIXTYFOUR.css">
    <!-- link css button  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/job/css/button.css">
</head>

<body>
    <!-- Thanh NAVBAR Điều khiển liên kết trong website -->

    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/PROJECT_JOB/ungtuyen/html/TrangChu.php"><img src="/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" alt="" style="width: 200px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="/PROJECT_JOB/ungtuyen/html/TrangChu.php">
                            Trang chủ
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link hvr-curl-top-left" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tìm kiếm việc làm
                        </a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item hvr-grow-shadow" href="/PROJECT_JOB/ungtuyen/html/ViecLamMoiNhat.php">Việc làm mới
                                    nhất</a></li>
                            <li><a class="dropdown-item hvr-grow-shadow" href="/PROJECT_JOB/ungtuyen/html/NganhNgheDiaDiem.php">Ngành nghề / Địa
                                    điểm</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="/PROJECT_JOB/ungtuyen/html/CV.php">
                            CV Hay
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="/PROJECT_JOB/ungtuyen/html/LoTrinhNgheNghiep.php">
                            Bản đồ nghề nghiệp
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="/PROJECT_JOB/ungtuyen/html/LUONG.php">
                            Hồ sơ cá nhân
                        </a>
                    </li>


                </ul>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="/PROJECT_JOB/ungtuyen/html/DangNhap.php">
                            Đăng Xuất
                        </a>
                    </li>
                </ul>
                <!-- <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active hvr-curl-top-left" aria-current="page" href="../../DangNhap.php">
                            Đăng Nhập
                        </a>
                    </li>
                </ul> -->
                <ul class="nav justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link btn-success hvr-curl-top-left" href="/PROJECT_JOB/tuyendung/html/TrangChuNhaTuyenDung.php" id="navbarDropdown" role="button" aria-expanded="false">
                            Dành cho nhà tuyển dụng
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <!-- <li><a class="dropdown-item hvr-grow-shadow" href="/tuyendung/html/DangNhapDanhChoNhaTuyenDung.php">Đăng nhập</a>
                                </li> -->
                            <li><a class="dropdown-item hvr-grow-shadow" href="/PROJECT_JOB/tuyendung/html/DangNhapDanhChoNhaTuyenDung.php">Đăng nhập</a>
                            </li>

                            <li><a class="dropdown-item hvr-grow-shadow" href="/PROJECT_JOB/tuyendung/html/DangTinVaTimUngVien.php">Tuyển
                                    dụng</a></li>

                            <li><a class="dropdown-item hvr-grow-shadow" href="/PROJECT_JOB/tuyendung/html/QuanLiHoSo.php">Quản Lí Ứng
                                    Viên</a></li>

                            <li><a class="dropdown-item hvr-grow-shadow" href="/PROJECT_JOB/tuyendung/html/QuanLiHoSo.php">Quản Lí
                                    Hồ Sơ</a>
                            </li>
                        </ul>
                </ul>
                </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Giữa Trang web  -->
    <div class="container-fluid">
        <div class="container-fluid">
            <!-- Background video  -->
            <div class="row">
                <video autoplay="autoplay" loop="loop" width="100%" height="240">
                    <source src="/PROJECT_JOB/image/VIDEO_MP4/FITMET.mp4" type="video/mp4" />
                </video>
            </div>
            <!-- Thông Tin Công Việc  -->
            <div class="row myjob_favorites">
                <div class="col-sm-4">
                    <img src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTTNHHFITMED.jpg" alt="">
                </div>
                <div class="col-sm-8">
                    <h2 style="font-weight: bold; text-align: center;">CÔNG TY TNHH FITMED</h2>
                    <p>
                        <b>Địa điểm :</b> <br>
                        <span>470 Trần Đại Nghĩa - Trường Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt Hàn</span>
                    </p>
                    <p>
                        <b>Thông Tin Công Ty :</b> <br>
                        <i class="fa fa-address-card" aria-hidden="true">Quy mô công ty: 1.000 - 5000</i> <br>
                        <i class="fa fa-alarm-plus" aria-hidden="true">Loại hình hoạt động : Công Ty Cổ Phần</i> <br>
                        <i class="fa fa-angle-double-up" aria-hidden="true">Website: https://www.nguyenlehuuduy.vn</i>
                    </p>
                </div>
            </div>
            <!-- Image miêu tả sương sương việc làm -->
            <div class="row">
                <img class="Image_result" src="/PROJECT_JOB/image/JOB/on-the-office-animate.svg" alt="">
            </div>
            <!-- Đây là phần Nộp đơn ứng tuyển bằng model -->
            <div class="container" style="border: 1px solid white;">
                <div class="row" id="UngTuyen">
                    <div class="col-sm-6" id="row">
                        <a href="#">
                            <img id="image_ungtuyen" src="../../../../image/VIECLAMMOINHAT/love.png" alt="">
                            <span>Lưu Việc Làm</span>
                        </a>
                        <a href="#">
                            <img id="image_ungtuyen" src="../../../../image/VIECLAMMOINHAT/gmail.png" alt="">
                            <span>Gửi Gmail đến cho chúng tôi</span>
                        </a>
                        <a href="#">
                            <img id="image_ungtuyen" src="../../../../image/VIECLAMMOINHAT/report.png" alt="">
                            <span>Gửi báo cáo</span>
                        </a>
                    </div>
                    <!-- Nộp đơn ứng tuyển -->
                    <div class="col-sm-2" id="model">
                        <button id="button_green" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <b>Nộp đơn ứng tuyển</b>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Nộp đơn ứng tuyển</h5><br>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <span><i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i></span> -->
                                        <div class="alert alert-danger" role="alert">
                                            <i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i>
                                        </div>
                                        <hr>
                                        <form class="row g-3" action="" method="post">
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
                                                <label for="inputAddress2" class="form-label">Số điện thoại</label>
                                                <input type="text" class="form-control" id="inputAddress2" placeholder="Nhập Số Điện Thoại Của Bạn" name="user_phone">
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                                    <label class="form-check-label" for="gridCheck">
                                                        Kiểm tra tôi
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;"> Gửi </button>
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
                            </div>
                        </div>
                    </div>
                    &emsp;&emsp;
                    <div class="col-sm-2" id="model1">
                        <button id="button_green" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <b>Gửi CV</b>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Gửi CV của bạn </h5><br>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- <span><i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i></span> -->
                                        <div class="alert alert-danger" role="alert">
                                            <i> <u>Lưu ý :</u> Gửi đúng theo yêu cầu nhé !!!</i>
                                        </div>
                                        <hr>
                                        <form method="POST" action="JOB_FITMED.php" enctype="multipart/form-data">
                                            <input type="hidden" name="size" value="1000000">
                                            <input type="file" name="image" width="100%"> <br>
                                            <hr>
                                            <button style="width: 100%;" id="button_green" type="submit" name="upload">POST</button>
                                            <?php require "xuly.php" ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Giới thiệu việc làm đang tuyển  -->
        <div class="container">
            <h1 style="font-weight: bold; font-size: 30px;">VIỆC LÀM ĐANG TUYỂN</h1>
            <div class="row">
                <div class="col-sm-6 col_job">
                    <span style="font-weight: bold;color: red;">(Mới)</span>
                    <h5>Chuyên viên kỹ thuật phần mềm</h5>
                    <ul style="text-decoration: none; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                        <li>CÔNG TY CỔ PHẦN V-SIXTYFOUR</li>
                        <li><b>$</b> Cạnh tranh</li>
                        <li>TP.Đà Nẵng</li>
                    </ul>
                </div>
                <div class="col-sm-6 col_job">
                    <span style="font-weight: bold;color: red;">(Mới)</span>
                    <h5>Chuyên viên đảm bảo hệ thống WEBSITE</h5>
                    <ul style="text-decoration: none; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                        <li>CÔNG TY CỔ PHẦN V-SIXTYFOUR</li>
                        <li><b>$</b> Cạnh tranh</li>
                        <li>TP.Đà Nẵng</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col_job">
                    <span style="font-weight: bold;color: red;">(Mới)</span>
                    <h5>Chuyên viên JAVA WEB</h5>
                    <ul style="text-decoration: none; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                        <li>CÔNG TY CỔ PHẦN V-SIXTYFOUR</li>
                        <li><b>$</b> Cạnh tranh</li>
                        <li>TP.Đà Nẵng</li>
                    </ul>
                </div>
                <div class="col-sm-6 col_job">
                    <span style="font-weight: bold;color: red;">(Mới)</span>
                    <h5>Chuyên viên đảm bảo oan toàn thông tin</h5>
                    <ul style="text-decoration: none; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                        <li>CÔNG TY CỔ PHẦN V-SIXTYFOUR</li>
                        <li><b>$</b> Cạnh tranh</li>
                        <li>TP.Đà Nẵng</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col_job">
                    <span style="font-weight: bold;color: red;">(Mới)</span>
                    <h5>CHuyên viên Tester</h5>
                    <ul style="text-decoration: none; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                        <li>CÔNG TY CỔ PHẦN V-SIXTYFOUR</li>
                        <li><b>$</b> Cạnh tranh</li>
                        <li>TP.Đà Nẵng</li>
                    </ul>
                </div>
                <div class="col-sm-6 col_job">
                    <span style="font-weight: bold;color: red;">(Mới)</span>
                    <h5>Chuyên viên Makerting</h5>
                    <ul style="text-decoration: none; font-size: 18px; font-family: Arial, Helvetica, sans-serif;">
                        <li>CÔNG TY CỔ PHẦN V-SIXTYFOUR</li>
                        <li><b>$</b> Cạnh tranh</li>
                        <li>TP.Đà Nẵng</li>
                    </ul>
                </div>
            </div>
            <h1 style="font-weight: bold; font-size: 30px; margin-top: 80px;">GIỚI THIỆU VỀ CÔNG TY</h1>
            <div class="row gioithieu">
                <h5 style="margin-top: 30px;">Lời nói đầu :</h5>
                <p>Trong bối cảnh phát triển ngày càng lớn mạnh của Samsung và các Vendor, nhu cầu liên kết với các đối tác cung cấp dịch vụ của nhà máy Samsung là rất lớn và rất đa dạng. Trong khi đó, các công ty hiện tại chỉ cung cấp một mảng dịch vụ nhất
                    định gây khó khăn cho công tác quản lý tổng thể của khách hàng. Vì vậy, chúng tôi, một đội ngũ lãnh đạo thuộc các công ty cung cấp các dịch vụ khác nhau đã liên minh lại và đồng sáng lập ra Ánh Dương Vina nhằm cung cấp tổng hợp các dịch
                    vụ.
                </p>
                <h5 style="margin-top: 30px;">Tầm nhìn:</h5>
                <p>Trong 5 năm tới, Ánh Dương Vina sẽ trở thành thương hiệu hàng đầu cung cấp dịch vụ trọn gói cho các khu công nghiệp tại Bắc Ninh. Trong 10 năm tới, Ánh Dương Vina sẽ là một trong 3 công ty lớn nhất cả nước cung cấp các dịch vụ trọn gói cho
                    các công ty khu vực có vốn đầu tư nước ngoài tại Việt Nam
                </p>
                <h5 style="margin-top: 30px;">Sứ mệnh:</h5>
                <p>Trong 5 năm tới, Ánh Dương Vina sẽ trở thành thương hiệu hàng đầu cung cấp dịch vụ trọn gói cho các khu công nghiệp tại Bắc Ninh. Trong 10 năm tới, Ánh Dương Vina sẽ là một trong 3 công ty lớn nhất cả nước cung cấp các dịch vụ trọn gói cho
                    các công ty khu vực có vốn đầu tư nước ngoài tại Việt Nam
                </p>
                <p>Đối với người lao động: Là cầu nối giữa người lao động và doanh nghiệp, giúp người lao động có công việc ổn định, nâng cao thu nhập, đặc biệt Ánh Dương Vina luôn chú trọng nâng cao chất lượng lao động thông qua đào tạo to be aperformed Directory
                    Development.
                </p>
                <p>
                    Đối với xã hội: Các dịch vụ của Ánh Dương Vina hỗ trợ giải quyết các vấn đề thất bại cho người lao động, xây dựng cơ sở hạ tầng, kết nối nguồn cung cấp và yêu cầu phát triển sản xuất cho nền kinh tế Việt Nam.
                </p>
                <p>
                    Tầm nhìn và sứ mệnh đó luôn là kim chỉ nam cho các hoạt động của Ánh Dương Vina. Chúng tôi luôn cần cù, sáng tạo trong công việc, cuộn dây, đối tác và không ngừng nâng cấp máy tính, thiết bị cũng như hệ thống chất lượng theo hướng hiện đại, hiệu quả và
                    an toàn. ”
                </p>
            </div>
        </div>
        <!-- Video thông điệp về công việc -->
        <div class="container-fluid">
            <div class="row">
                <video class="video" autoplay="autoplay" loop="loop" width="100%">
                    <source src="/PROJECT_JOB/image/JOB/BOTTOM_VIDEO.mp4" type="video/mp4">
                </video>
            </div>
        </div>
        <!-- Cuối trang website  -->
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
        <!--------- Nhúng JS của Bootstrap -------------->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>