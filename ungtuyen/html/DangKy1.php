
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Link ic đầu website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- link css framework thẻ hover-min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- link css cuối trang web  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/topandbottom.css">
    <!-- Link css đăng ký của giao diện đăng ký  -->
    <!-- <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/DangKy.css"> -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/DangKy1.css">
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
    <!-- Phần đăng ký dành cho ứng viên -->
    <div class="container">
        <div class="box-shadown">
            <h2 style=" margin-top:50px; text-align: center; ">
                <b> Đăng ký dành cho ứng viên</b>
            </h2>
            <div class="row">
                <!-- Giới thiệu sơ về việc làm  -->
                <div class="col-md-6" style="background-color:beige; margin-top: 30px;">
                    <div class="card text-white bg-primary mb-3 " style="max-width:100%; margin-top: 50px; margin-left: 10px;">
                        <div class="card-header hvr-wobble-vertical"><img src="/PROJECT_JOB/PROJECT_JOB/image/HinhAnhWEB/i1.png" alt=""></div>
                        <div class="card-body hvr-box-shadow-outset">
                            <h5 class="card-title"><b>THÔNG BÁO VIỆC LÀM</b></h5>
                            <p class="card-text">Được cập nhật các cơ hội việc làm mới nhất từ nhiều công ty hàng đầu
                            </p>
                        </div>
                    </div>
                    <div class="card text-white bg-danger mb-3" style="max-width: 100%; margin-top: 50px; margin-left: 10px;">
                        <div class="card-header hvr-wobble-vertical"><img src="/PROJECT_JOB/image/HinhAnhWEB/i2.png" alt=""></div>
                        <div class="card-body hvr-box-shadow-outset">
                            <h5 class="card-title"><b>KIẾM VIỆC DỄ DÀNG</b></h5>
                            <p class="card-text">Tìm được công việc bạn yêu thích phù hợp với kỹ năng và tiêu chí bạn quan tâm</p>
                        </div>
                    </div>
                    <div class="card text-white bg-warning mb-3" style="max-width:100%; margin-top: 50px; margin-left: 10px;">
                        <div class="card-header hvr-wobble-vertical"><img src="/PROJECT_JOB/image/HinhAnhWEB/i3.png" alt=""></div>
                        <div class="card-body hvr-box-shadow-outset">
                            <h5 class="card-title"><b>ỨNG TUYỂN NHANH CHÓNG</b></h5>
                            <p class="card-text">Dễ dàng ứng tuyển nhiều vị trí mà không cần mất nhiều thời gian</p>
                        </div>
                    </div>
                </div>
                <!-- Form đăng nhập  -->
                <div class="col-md-6" style="background-color: gainsboro;margin-top: 30px;">
                    <!-- Đăng nhập bằng facebook or google  -->
                    <div class="row">
                        <h5>Đăng nhập bằng </h5>
                        <div class="btn btn-group">
                            <div class="row" id="row_img">
                                <div class="col-md">
                                    <a href="#" id="img" class="btn - btn-primary hvr-buzz">
                                        <img src="/PROJECT_JOB/image/HinhAnhWEB/facebook.png" alt="">
                                        <b>Facebook</b>
                                    </a>
                                    <a href="#" id="img" class="btn - btn-danger hvr-buzz">
                                        <img src="/PROJECT_JOB/image/HinhAnhWEB/google.png" alt="">
                                        <b>Google</b>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form đăng ký   -->
                    <h5 style="text-align: center;">Hoặc</h5>

                    <form action="" method="POST">
                        <h2><b>Đăng Ký</b></h2>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="">Tên</label>
                                    <input type="text" class="form-control" placeholder="Tên của bạn" required name="user_ten">
                                </div>
                                <div class="col">
                                    <label for="">Họ</label>
                                    <input type="text" class="form-control" placeholder="Họ của bạn" required name="user_ho">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Email của bạn" required name="user_email">
                        </div>
                        <div class="form-group">
                            <label for="">Mật Khẩu</label>
                            <input type="password" class="form-control" placeholder="Passwork của bạn" required name="user_password">
                        </div>
                        <div class="form-group">
                            <label for=""> Điện Thoại</label>
                            <input type="text" class="form-control" placeholder="Điện thoại của bạn" required name="user_phone">
                        </div>
                        <div class="form-group">
                            <label for=""> Giới Tính :</label>
                            <div class="row" data-toggle="buttons">
                                <div class="col">
                                    <label for="" class="btn btn-outline-secondary"> Nam
                                        <input type="radio" name="gender" value="Nam">
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="" class="btn btn-outline-secondary"> Nữ
                                        <input type="radio" name="gender" value="Nữ">
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="" class="btn btn-outline-secondary"> Khác
                                        <input type="radio" name="gender" value="Khác">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Nơi sống</label>
                            <select name="city" class="form-control" id="">
                                <option selected>Nơi sống của bạn</option>
                                <option value="Quảng Nam">Quảng Nam</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="TP.Hồ Chí Minh">TP.Hồ Chí Minh</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <div class="form-group" style="margin-top: 20px;">
                            <input type="checkbox" name="check_html" required id="">
                            <label for="">Tôi đồng ý điều khoản sử dụng</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" id="button_green" class="btn btn-success" placeholder="Đăng Ký" value="Đăng Ký"> Đăng Ký </button>
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