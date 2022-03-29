<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hồ sơ cá nhân</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- link logo ic đầu  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css thẻ hovermin  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- Link css cuối trang website  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/topandbottom.css">
    <!-- Link css liên kết chính -->
    <!-- <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/LUONG.css"> -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/LUONG.css">
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/bangtinhluong.css">
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
    <!-- Phần giữa -->

    <div class="container-fluid">
        <div class="container" style="margin-top: 20px;">
            <!-- Thanh điều khiển trong hồ sơ cá nhân -->
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active hvr-shutter-out-horizontal" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><b>Tài
                            Khoản Cá
                            Nhân</b></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link hvr-shutter-out-horizontal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><b>Hồ Sơ Xin
                            Việc</b></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link hvr-shutter-out-horizontal" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false"><b>Việc Làm Phù
                            Hợp</b></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link hvr-shutter-out-horizontal" id="contact-tab1" data-bs-toggle="tab" data-bs-target="#contact1" type="button" role="tab" aria-controls="contact" aria-selected="false"><b>Việc Làm Đã Ứng
                            Tuyển</b></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link hvr-shutter-out-horizontal" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact3" type="button" role="tab" aria-controls="contact" aria-selected="false"><b>Việc Làm Đã
                            Lưu</b></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link hvr-shutter-out-horizontal" id="contact-tab4" data-bs-toggle="tab" data-bs-target="#contact4" type="button" role="tab" aria-controls="contact" aria-selected="false"><b>Tính
                            Lương</b></button>
                </li>
            </ul>
            <!-- các danh mục được điều khiển -->
            <div class="tab-content" id="myTabContent">
                <!-- Tài Khoản Cá Nhân  -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="container" style="margin-top: 50px;">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="/PROJECT_JOB/image/CV/cvdocdao.jpg" class="card-img-top" alt="...">
                                    <div class="card-body justify-content-center">
                                        <a href="#" class="btn btn-primary">Chọn Ảnh</a>
                                        <a href="#" class="btn btn-primary">Chỉnh Sửa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 ">
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4" class="form-label">Mật Khẩu</label>
                                        <input type="password" class="form-control" id="inputPassword4">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress" class="form-label">Địa Chỉ Hiện Tại</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Địa Chỉ Hiện Tại">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Địa Chỉ Công Ty</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Địa Chỉ Công Ty">

                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">Thành Phố</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="number" class="form-label">Số Điện Thoại</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label bt" for="gridCheck">
                                                Đồng ý chỉnh sửa
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                <div class="col-12 bto">
                                    <button type="submit" class="btn btn-primary">Chỉnh Sửa</button>
                                </div>
                            </div>
                        </div>
                        <div class="row mb" style="margin-top: 50px;">
                            <div class="card border-primary mb-3" style="max-width: 80%;">
                                <div class="card-header text-center"><b><b>Thông Tin Cá Nhân</b></b>
                                </div>
                                <div class="card-body text-primary">
                                    <p class="text-b"><b><b>Họ Tên :</b></b> Nguyễn Lê Hữu Duy</p>
                                    <p class="text-b"><b><b>Số Điện Thoại :</b></b> 0358650975</p>
                                    <p class="text-b"><b><b>Thư Điện Tử :</b></b> nlhduy.20IT7@vku.udn.vn</p>
                                    <p class="text-b"><b><b>Ngày Sinh :</b></b> 09/09/2002</p>
                                    <p class="text-b"><b><b>Giới Tính :</b></b> Nam</p>
                                    <p class="text-b"><b><b>Chỗ ở hiện tại:</b></b>KTX Việt - Hàn</p>
                                    <p class="text-b"><b><b>Tỉnh/Thành Phố:</b></b>Đà Nẵng</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hồ Sơ Xin Việc -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row">
                        <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/HOSO/0001.jpg" alt="">
                    </div>

                </div>
                <!-- Việc Làm Phù Hợp -->
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row" style="margin-top: 30px;">
                        <div class="col-md-4">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-CTHOANGPHUC.jpg"> </a>
                                    <div class="ripple-cont"></div>
                                </div>
                                <div class="blog-table">
                                    <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News
                                    </h6>
                                    <h4 class="blog-card-caption">
                                        <a href="#">Công Ty Đầu Tư Hoàng Phúc Quốc Tế</a>
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
                        <div class="col-md-4">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-SỤNin.jpg"> </a>
                                    <div class="ripple-cont"></div>
                                </div>
                                <div class="blog-table">
                                    <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News
                                    </h6>
                                    <h4 class="blog-card-caption">
                                        <a href="#">Công Ty TNHH Sunjin Vina</a>
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
                        <div class="col-md-4">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-Wacontre.jpg">
                                    </a>
                                    <div class="ripple-cont"></div>
                                </div>
                                <div class="blog-table">
                                    <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News
                                    </h6>
                                    <h4 class="blog-card-caption">
                                        <a href="#">Công Ty TNHH MTV Wacontre</a>
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


                    <div class="row">
                        <div class="col-md-4">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-NAMAN.png"> </a>
                                    <div class="ripple-cont"></div>
                                </div>
                                <div class="blog-table">
                                    <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News
                                    </h6>
                                    <h4 class="blog-card-caption">
                                        <a href="#">Nam An Market</a>
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
                        <div class="col-md-4">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-DAIPHUMY.png">
                                    </a>
                                    <div class="ripple-cont"></div>
                                </div>
                                <div class="blog-table">
                                    <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News
                                    </h6>
                                    <h4 class="blog-card-caption">
                                        <a href="#">Công ty Cổ Phần Đại Phú Mỹ</a>
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
                        <div class="col-md-4">
                            <div class="blog-card blog-card-blog">
                                <div class="blog-card-image">
                                    <a href="#"> <img class="img" src="/PROJECT_JOB/image/LOGOVIECLAM/LOGOVLMN/LOGO-LIXIL.jpg"> </a>
                                    <div class="ripple-cont"></div>
                                </div>
                                <div class="blog-table">
                                    <h6 class="blog-category blog-text-success"><i class="far fa-newspaper"></i> News
                                    </h6>
                                    <h4 class="blog-card-caption">
                                        <a href="#">LIXIL Global Manufacturing Vietnam</a>
                                    </h4>
                                    <p class="blog-card-description"><b><u>Tuyển Dụng : </u></b> Quản Lý Line Sản Xuất
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
                                        <div class="stats"> <i class="far fa-clock"></i> 8 ngày trước </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Việc Làm Đã Ứng Tuyển -->
                <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
                    <div class="list-group">
                        <!-- Trang 2 -->
                        <a href="#" class="list-group-item list-group-item-action hvr-bounce-to-right">
                            <div class="d-flex w-100 justify-content-between">
                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo29.png" alt="">
                                <h5 class="mb-11">Điều phối trạm giao nhận Hà Nội</h5> <br>
                                <small>
                                    <img src="/PROJECT_JOB/image/OGOVIECLAM/vip.png" alt="">
                                </small>
                            </div>
                            <p class="mb-1">NinjaVan Việt Nam</p>
                            <span class="Luong">
                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương Từ
                                    1000$</span>
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
                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương Từ
                                    1000$</span>
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
                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương Từ
                                    1000$</span>
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
                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương Từ
                                    1000$</span>
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
                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương Từ
                                    1000$</span>
                            </span> <br>
                            <span class="Map">
                                <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                Hà Nội
                            </span>
                        </a>
                    </div>
                </div>
                <!-- Việc Làm Đã Lưu -->
                <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                    <div class="row">
                        <div class="col-6">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                        <h5 class="mb-11">Nhơ Thạch Đồng Nai</h5> <br>
                                        <small>3 tháng trước</small>
                                    </div>
                                    <p class="mb-1">Công TY Nhơn Thạch Đồng Nai</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương
                                            Từ
                                            18 Triệu - 100
                                            Triệu</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                        Đồng Nai
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="../LOGOVIECLAM/logo38.png" alt="">
                                        <h5 class="mb-11">Sản Xuất - Xuất Khẩu Thủy Hải Sản </h5> <br>
                                        <small>24 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương
                                            thỏa thuận</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                        Đà Nẵng
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                        <h5 class="mb-11">Thiết Kế WebSite </h5> <br>
                                        <small>12 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty Thiết Kế Phần Mềm MSV</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương
                                            từ
                                            20 triệu - 40
                                            triệu</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                        Đà Nẵng
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo16.png" alt="">
                                        <h5 class="mb-11"> Sản xuất vật liệu xây dụng </h5> <br>
                                        <small>21 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty TNHH Xi Măng - Cốt Thép</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương
                                            từ
                                            15 triệu-20
                                            triệu</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                        TP. Hồ Chí Minh
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo27.png" alt="">
                                        <h5 class="mb-11">Giảng Viên EngLish</h5> <br>
                                        <small>11 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Trung Tâm Anh ngữ Quốc Tế</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương
                                            Từ
                                            18 Triệu - 50
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
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo1.png" alt="">
                                        <h5 class="mb-11">Điều phối Quản Lí Hệ Thống</h5> <br>
                                        <small>12 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty Thành Phần Duyên</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương
                                            Từ
                                            18 Triệu - 30
                                            Triệu</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                        Quy Nhơn
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo18.png" alt="">
                                        <h5 class="mb-11"> Chuyên cung cấp Thủy - Hải Sản </h5><br>
                                        <small>23 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty TNHH Nông Lâm Nghiệp</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/Tien.png" alt="NO"> <span style="color: red;">Lương
                                            thỏa thuận</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/map.png" alt="Co">
                                        Đà Nẵng
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image/LOGOVIECLAM/logo19.png" alt="">
                                        <h5 class="mb-11">Chuyên Viên Tư Vấn Khách Hàng </h5> <br>
                                        <small>31 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty TNHH Cổ Phần Dầu Khí</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/Tien.png" alt="NO"> <span
                                            style="color: red;">Lương 30
                                            Triệu</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/map.png" alt="Co">
                                        Quảng Nam
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/logo20.png" alt="">
                                        <h5 class="mb-11"> Phim Ảnh Truyền Thông</h5> <br>
                                        <small>31 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty TNHH Nhíp Ảnh</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/Tien.png" alt="NO"> <span
                                            style="color: red;">Lương từ
                                            10 triệu-40
                                            triệu</span>
                                    </span> <br>
                                    <span class="Map" style="font-weight: bold;">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/map.png" alt="Co">
                                        Đà Nẵng
                                    </span>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/logo21.png" alt="">
                                        <h5 class="mb-11"> Kỹ Năng Bán Hàng</h5> <br>
                                        <small>13 ngày trước</small>
                                    </div>
                                    <p class="mb-1">Công Ty Thanh Lý</p>
                                    <span class="Luong">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/Tien.png" alt="NO"> <span
                                            style="color: red;">Lương Từ
                                            18 Triệu - 100
                                            Triệu</span>
                                    </span> <br>
                                    <span class="Map">
                                        <img src="/PROJECT_JOB/image//LOGOVIECLAM/map.png" alt="Co">
                                        Hà Nội
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                    <!-- Bảng tính lương -->
                    <div class="container" id="group">
                        <div class="text-h2" style="margin-top: 50px;">
                            <h2><b>Bảng Tính Lương Mẫu</b></h2>
                        </div>
                        <div class="row" style="margin-top: 40px;">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="row" data-toggle="buttons">
                                        <div class="col">
                                            <label for="" class="btn btn-outline-primary"><b>VNĐ</b>
                                                <input type="radio" name="GioiTinh" value="VND">
                                            </label>
                                        </div>
                                        <div class="col">
                                            <label for="" class="btn btn-outline-primary"><b>USD</b>
                                                <input type="radio" name="GioiTinh" value="USD">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Tổng Lương
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="Nhập mức lương tổng - VNĐ" required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Trợ cấp
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="Nhận trợ cấp" required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px; color: rgb(13, 109, 109);">
                            <h5>
                                <b>
                                    Bảo Hiểm
                                </b>
                            </h5>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <div class="row" data-toggle="buttons">
                                        <div class="col">
                                            <label for="" class="btn btn-outline-primary"><b>Trên Lương Chính Thức</b>
                                                <input type="radio" name="GioiTinh" value="VND">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="row" data-toggle="buttons">
                                        <div class="col">
                                            <label for="" class="btn btn-outline-primary"><b>Khác</b>
                                                <input type="radio" name="GioiTinh" value="VND">
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Khác" required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Lao động
                            </div>
                            <div class="col-md-8">
                                <select name="" class="form-control" id="">
                                    <option selected>Lao động</option>
                                    <option value="">Đã qua đào tạo</option>
                                    <option value="">Chưa qua đào tạo</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Bảo Hiểm Xã Hội
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="8.0%" disabled required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Bảo Hiểm Y Tế
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="1.5%" disabled required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Thất nghiệp
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="1.0%" disabled required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Vùng
                            </div>
                            <div class="col-md-8">
                                <select name="" class="form-control" id="">
                                    <option selected>Vùng 1</option>
                                    <option value="">Vùng 1</option>
                                    <option value="">Vùng 2</option>
                                    <option value="">Vùng 3</option>
                                    <option value="">Vùng 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Giá Trị Tối Thiểu Của Vùng
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="4,420,000 VNĐ" disabled required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Mức trần BHTN
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="88,400,000 VNĐ" disabled required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Giảm trừ cá nhân
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="11,000,000 VNĐ" disabled required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px; color: rgb(13, 109, 109);">
                            <h5>
                                <b>
                                    Giảm Trừ Gia Cảnh
                                </b>
                            </h5>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Số người phụ thuộc
                            </div>
                            <div class="col-md-8">
                                <select name="" class="form-control" id="">
                                    <option selected>0</option>
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                    <option value="">6</option>
                                    <option value="">7</option>
                                    <option value="">8</option>
                                    <option value="">9</option>
                                    <option value="">10 </option>
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-2">
                                Giảm trừ Gia Cảnh
                            </div>
                            <div class="col-md-8">
                                <input type="email" class="form-control" placeholder="0 VNĐ" disabled required name="">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 50px;">
                            <div class="form-group tinhluong">
                                <button class="btn btn-outline-success" type="submit">
                                    <b>Tính Lương Ngay</b>
                                </button>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px; margin-left: 50px;">
                            <div class="ghichu">
                                <h6 style="color: red;">
                                    <u><b>Ghi chú :</b></u>
                                </h6>
                                <p>
                                    - Những số này chỉ là ước tính thu nhập tạm thời hàng tháng.
                                </p>
                                <p>
                                    - Đơn vị tiền tệ tính bằng VNĐ (Việt Nam Đồng).
                                </p>
                                <p>
                                    - Không áp dụng cho người nước ngoài đang công tác tại Việt Nam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Một số tin tưc về Lương -->
                    <div class="container">
                        <div class="row" style="margin-top: 30px;">
                            <div>
                                <h2><b>Tin Đàm Phán Lương</b></h2>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/LUONG.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Những kịch bản đàm phán lương phổ biến</h5>
                                        </a>
                                        <p class="card-text">
                                            Bất kỳ ứng viên hoặc người đi làm nào khi nhắc đến vấn đề lương thưởng đều thường có chung một phản ứng là "Tôi chắc chắn muốn thương lượng chứ nhưng tôi lại chẳng biết phải nói cách nào cho đúng". Chiến lược đàm phán lương phù hợp trong mỗi tình huống
                                            là rất quan trọng để bạn có thể nắm được lợi thế và đảm bảo mình đang nhận được chi trả xứng đáng.
                                        </p>
                                        <a href="">
                                            <p class="card-text"><small class="text-muted">xem thêm -> </small></p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/LUONG1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Quên ngay việc nói dối mức lương cũ khi đàm phán công việc mới</h5>
                                        </a>
                                        <p class="card-text">
                                            Quá trình đàm phán lương luôn có nhiều tình huống thử thách đối với ứng viên, kể cả những ứng viên giàu kinh nghiệm. Điều này khiến ứng viên thấy thật bối rối bởi đôi khi khoảng cách giữa mức lương cũ và mức lương mong đợi là khá xa và họ e ngại nhà tuyển
                                            dụng sẽ khó chấp nhận. Vậy nên, ứng viên thường chọn cách "nâng giá" bản thân lên bằng cách nói dối về mức lương cũ.
                                        </p>
                                        <a href="">
                                            <p class="card-text"><small class="text-muted">xem thêm -> </small></p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/LUONG2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <a href="">
                                            <h5 class="card-title">Khi phỏng vấn viên không hề nhắc đến vấn đề lương thưởng
                                            </h5>
                                        </a>
                                        <p class="card-text">
                                            Bạn đến tham dự phỏng vấn, mọi thứ diễn ra theo quy trình, thậm chí bạn đã vượt qua vòng 2 hoặc 3 rồi nhưng tuyệt nhiên phỏng vấn viên không hề nhắc chút thông tin gì về vấn đề lương thưởng. Bạn bắt đầu thấy bối rối và cũng có đôi chút không thoải mái
                                            khi cảm giác dường như việc chi trả cho vị trí đang ứng tuyển cố tình bị ngó lơ.
                                        </p>
                                        <a href="">
                                            <p class="card-text"><small class="text-muted">xem thêm -> </small></p>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- CUỐI TRANG WEB  -->

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