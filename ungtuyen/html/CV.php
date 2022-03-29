<!DOCTYPE html>
<html lang="en">

<head>
    <title>CV</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link css boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- link ic đầu website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css thẻ hover - min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- link css cuối trang web  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/topandbottom.css">
    <!-- Link css CV chính của website  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/CV1.css">

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
                    </ul>
                    <ul class="nav justify-content-end">
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

    <!-- Giới thiệu về Tự thiết kế CV -->
    <div class="container-fluid">
        <!-- Backfround bằng image đầu website -->
        <div class="row">
            <img src="/PROJECT_JOB/image/CV/vc1.png" alt="">
        </div>
        <div class="row" style="margin-top: 80px;">
            <div class="text-h2 text-center">
                <h2><b>Tự thiết kế CV chuyên nghiệp cùng <br>
                        <b style="color: red;">WEBSITE của chúng tôi</b></b>
                </h2> <br>
                <p><b>
                       WEBSITE  www.nguyenlehuuduy.com là công cụ hỗ trợ các ứng viên tự thiết kế những bản CV đẹp mắt, chuyên
                        nghiệp chỉ trong 3 bước và hoàn toàn miễn phí
                        !</b></p>
            </div>
        </div>
    </div>
    <!-- Các bước để có 1 CV tốt -->
    <div class="container" style="margin-top: 30px;">
        <div class="row" id="padding3buoc">
            <!-- Bước 1  -->
            <div class="col-md-4 justify-content-center">
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success">
                        <img src="/PROJECT_JOB/image/CV/icon1.png" alt="" id="icon">
                    </div>
                    <div class="card-body1 text-success">
                        <h5 class="card-title">Tạo ấn tượng tốt với nhà tuyển dụng</h5>
                        <p class="card-text">Luôn luôn để ấn tượng tốt nhất có thể đối với nhà tuyển dụng</p>
                    </div>
                    <div class="card-footer bg-transparent text-center border-success"><b>Bước 1</b></div>
                </div>
            </div>
            <!-- Bước 2 -->
            <div class="col-md-4 justify-content-center">
                <div class="card border-success mb-3" style="max-width: 18rem; ">
                    <div class="card-header bg-transparent border-success">
                        <img src="/PROJECT_JOB/image/CV/icon2.png" alt="" id="icon">
                    </div>
                    <div class="card-body1 text-success">
                        <h5 class="card-title">Tùy chỉnh CV</h5>
                        <p class="card-text">Tùy chỉnh CV theo gu cá nhân mà bản thân cảm thấy ưng ý nhất có thể để đạt được hiệu quả cao.</p>
                    </div>
                    <div class="card-footer bg-transparent text-center border-success"><b>Bước 2</b></div>
                </div>
            </div>
            <!-- Bước 3  -->
            <div class="col-md-4 justify-content-center">
                <div class="card border-success mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-transparent border-success">
                        <img src="/PROJECT_JOB/image/CV/icon3.png" alt="" id="icon">
                    </div>
                    <div class="card-body1 text-success">
                        <h5 class="card-title">Kết Quả</h5>
                        <p class="card-text">Được cập nhật các cơ hội phù hợp với CV <br>.</p>
                    </div>
                    <div class="card-footer bg-transparent text-center border-success"><b>Bước 3</b></div>
                </div>
            </div>
        </div>
        <div class="row text-center" style="margin-top: 40px;">
            <h2><b><b style="color: red;">Một số mẫu CV nổi bậc hiện nay </b></b>
            </h2>
        </div>
    </div>
    <!-- Giới thiệu về các mẫu CV nổi bậc hiện nay -->
    <div class="container-fluid" style="margin-top: 100px;" id="Card_CV">
        <div class="row">
            <!-- Mẫu CV bán hàng  -->
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvbanhang.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV xin việc Bán hàng</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mẫu CV nhẹ nhàng -->
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvnhanvienkinhdoanh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Nhẹ Nhàng</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mẫu CV tuyệt vời  -->
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvantuong.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV xin việc Tuyệt Vời</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mẫu CV Cao Cấp  -->
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvcaocap.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Cao Cấp</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mẫu CV cá tính  -->
        <div class="row">
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvcatinh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Cá tính</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvchuyenghiep.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Chuyên Nghiệp</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvcodien.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Cổ Điển</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvdocdao.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Độc Đáo</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mẫu CV đơn giãn  -->
        <div class="row">
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvdongian.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Đơn Giãn</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvhiendai.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Hiện Đại</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvhopmenh.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Hợp Mệnh</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvketoan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Kế Toán</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mẫu CV Phá Cách  -->
        <div class="row">
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvphacach.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Phá Cách</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvsangtap.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Sáng Tạo</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvthanhlich.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Thanh Lịch</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvtieuchuan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Tiêu Chuẩn</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mẫu CV Tinh tế  -->
        <div class="row">
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvtinhte.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Tinh Tế</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/cvtruyenthong.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="">
                                    <b>Mẫu CV Truyền Thống</b>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Giới thiệu 1 số mẫu CV được sử dụng nhiều nhất  -->
    <div class="container" style="margin-top: 70px;">
        <!-- Giới thiệu các mẫu CV sử dụng nhiều  -->
        <div class="row text-center">
            <h2><b><b><b>Một số mẫu CV được sử dụng nhiều nhất</b></b>
                </b>
            </h2>
            <div class="col-sm-4" style="margin-top: 80px;">
                <img src="/PROJECT_JOB/image/CV/SLIDECV.jpg" alt="" >
            </div>
            <div class="col-sm-4" style="margin-top: 80px;">
                <img src="/PROJECT_JOB/image/CV/SLIDECV1.jpg" alt="">
            </div>
            <div class="col-sm-4" style="margin-top: 80px;">
                <img src="/PROJECT_JOB/image/CV/SLIDECV2.jpg" alt="" >
            </div>
            <div class="col-sm" style="margin-top: 70px;">
                <img src="/PROJECT_JOB/image/CV/SLIDECV3.jpg" alt="" >
            </div>
            <div class="col-sm" style="margin-top: 70px;">
                <img src="/PROJECT_JOB/image/CV/SLIDECV4.jpg" alt="" >
            </div>
        </div>
        <!-- Bí Quyết tạo CV ấn tượng -->
        <div class="row text-center" style="margin-top: 80px;">
            <h2 class="row-h2" style="color: green;"><b>Bí Quyết Tạo CV Ấn Tượng</b></h2>
        </div>
        <div class="row">
            <div class="col-md-3" style="margin-top: 30px;">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/BIQUYET1.jpg" class="card-img-top1" alt="...">
                        <div class="card-body1 hvr-box-shadow-outset">
                            <h6 class="card-title text-dark">
                                <a href="">
                                    <b>Viết vào CV của bạn</b>
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 30px;">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/BIQUYET2.png" class="card-img-top1" alt="...">
                        <div class="card-body1 hvr-box-shadow-outset">
                            <h6 class="card-title text-dark">
                                <a href="">
                                    <b>Nhận Lời Phỏng Vấn</b>
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 30px;">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/BIQUYET3.png" class="card-img-top1" alt="...">
                        <div class="card-body1 hvr-box-shadow-outset">
                            <h6 class="card-title text-dark">
                                <a href="">
                                    <b>Tự Tin Trong Mọi Tình Huống</b>
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="margin-top: 30px;">
                <div class="col-sm text-center">
                    <div class="card" style="width: 20rem;">
                        <img src="/PROJECT_JOB/image/CV/BIQUYET4.jpg" class="card-img-top1" alt="...">
                        <div class="card-body1 hvr-box-shadow-outset">
                            <h6 class="card-title text-dark">
                                <a href="">
                                    <b>CV mới</b>
                                </a>
                            </h6>
                        </div>
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
                            <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/zalo.png" alt="" height="30px" width="30px"><b>Zalo</b></li>
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