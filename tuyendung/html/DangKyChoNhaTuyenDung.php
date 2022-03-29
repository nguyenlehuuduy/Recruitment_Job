<?php
session_start();
require 'db_connection.php';
require 'insert_user.php';
// IF USER LOGGED IN
if (isset($_SESSION['user_email'])) {
    header('Location: TrangChuNhaTuyenDung1.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Đăng Ký</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link nhúng css boostrap vào website  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Link ic logo đầu web site  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- link css library hover-min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/hover-min.css">
    <!-- link css cuối trang web  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/topandbottom.css">
    <!-- Link css đăng ký cho nhà tuyển dụng  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/DangKyChoNhaTuyenDungg.css">
    <!-- link css button  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/job/css/button.css">
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/style.css">
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
    <!-- Thông tin đăng ký dành cho nhà tuyển dụng -->
    <div class="container-fluid">
        <div class="row text-center" style="margin-top: 70px; color: rgb(12, 12, 243);">
            <h2><b>Đăng ký tài khoản Nhà Tuyển Dụng</b> </h2>
        </div>
    </div>
    <div class="container" id="ThongTinDangNhap">
        <div class="row" id="formtop" style="margin-top: 50px;">
            <div class="col-md-6" style="background-color: white;">
                <!-- Thông tin đăng nhập -->
                <div class="DangNhap" style="margin-top: 20px; color: blue;">
                    <h4>
                        <b>
                            <u>
                                Thông tin đăng nhập :
                            </u>
                        </b>
                    </h4>
                </div>
                <!-- Form đăng ký dành cho nhà tuyển dụng -->
                <form action="" method="post">
                    <div class="form-group" style="margin-top: 20px; ">
                        <p>Quý khách sử dụng thông tin tài khoản này để đăng nhập vào nguyenlehuuduy.vn</p>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Họ Tên</label>
                                <input type="text" class="form-control" placeholder="Họ tên của bạn" required name="user_ten">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for=""> Email</label>
                                <input type="email" class="form-control" placeholder="Email của bạn" required name="user_email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Passwork của bạn" required name="user_password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="form-control" placeholder="Số điện thoại của bạn" required name="user_phone">
                            </div>
                        </div>
                    </div>
                    <div class="DangNhap" style="margin-top: 20px; color: blue;">
                        <h4>
                            <b>
                                <u>
                                    Thông tin công ty :
                                </u>
                            </b>
                        </h4>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Tên công ty</label>
                                <input type="text" class="form-control" placeholder="Tên công ty của bạn" required name="user_namecongty">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Chọn số nhân viên</label>
                                <select name="user_nhanvien" class="form-control" id="">
                                    <option selected>Chọn số nhân viên</option>
                                    <option value="Ít hơn 10 nhân viên">Ít hơn 10 nhân viên</option>
                                    <option value="Từ 10 - 20 nhân viên">Từ 10 - 20 nhân viên </option>
                                    <option value="Từ 25 - 100 nhân viên">Từ 25 - 100 nhân viên </option>
                                    <option value="Từ 150 - 500 nhân viên">Từ 150 - 500 nhân viên</option>
                                    <option value="Từ 500 - 1000 nhân viên">Từ 500 - 1000 nhân viên</option>
                                    <option value="Từ 1500 - 5000 nhân viên">Từ 1500 - 5000 nhân viên</option>
                                    <option value="Từ 5000 - 10000 nhân viên">Từ 5000 - 10000 nhân viên</option>
                                    <option value="Từ 10000 nhân viên trở lên">Từ 10000 nhân viên trở lên</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Sơ lược về công ty</label>
                                <textarea name="user_soluot" id="" cols="60" rows="5"></textarea>
                                <p style="font-size: 10px; text-align: center;">Từ 50 đến 500 kí tư</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Địa chỉ công Ty</label>
                                <input type="text" class="form-control" placeholder="Địa chỉ công ty của bạn" required name="user_diachi">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tỉnh / Thành Phố</label>
                                <select name="user_thanhpho" class="form-control" id="">
                                    <option value="An Giang" selected>Chọn Tỉnh/TP
                                    <option value="An Giang">An Giang
                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                    <option value="Bắc Giang">Bắc Giang
                                    <option value="Bắc Kạn">Bắc Kạn
                                    <option value="Bạc Liêu">Bạc Liêu
                                    <option value="Bắc Ninh">Bắc Ninh
                                    <option value="Bến Tre">Bến Tre
                                    <option value="Bình Định">Bình Định
                                    <option value="Bình Dương">Bình Dương
                                    <option value="Bình Phước">Bình Phước
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Bình Thuận">Bình Thuận
                                    <option value="Cà Mau">Cà Mau
                                    <option value="Cao Bằng">Cao Bằng
                                    <option value="Đắk Lắk">Đắk Lắk
                                    <option value="Đắk Nông">Đắk Nông
                                    <option value="Điện Biên">Điện Biên
                                    <option value="Đồng Nai">Đồng Nai
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Đồng Tháp">Đồng Tháp
                                    <option value="Gia Lai">Gia Lai
                                    <option value="Hà Giang">Hà Giang
                                    <option value="Hà Nam">Hà Nam
                                    <option value="Hà Tĩnh">Hà Tĩnh
                                    <option value="Hải Dương">Hải Dương
                                    <option value="Hậu Giang">Hậu Giang
                                    <option value="Hòa Bình">Hòa Bình
                                    <option value="Hưng Yên">Hưng Yên
                                    <option value="Khánh Hòa">Khánh Hòa
                                    <option value="Kiên Giang">Kiên Giang
                                    <option value="Kon Tum">Kon Tum
                                    <option value="Lai Châu">Lai Châu
                                    <option value="Lâm Đồng">Lâm Đồng
                                    <option value="Lạng Sơn">Lạng Sơn
                                    <option value="Lào Cai">Lào Cai
                                    <option value="Long An">Long An
                                    <option value="Nam Định">Nam Định
                                    <option value="Nghệ An">Nghệ An
                                    <option value="Ninh Bình">Ninh Bình
                                    <option value="Ninh Thuận">Ninh Thuận
                                    <option value="Phú Thọ">Phú Thọ
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Bình">Quảng Bình
                                    <option value="Quảng Ngãi">Quảng Ngãi
                                    <option value="Quảng Ninh">Quảng Ninh
                                    <option value="Quảng Trị">Quảng Trị
                                    <option value="Sóc Trăng">Sóc Trăng
                                    <option value="Sơn La">Sơn La
                                    <option value="Tây Ninh">Tây Ninh
                                    <option value="Thái Bình">Thái Bình
                                    <option value="Thái Nguyên">Thái Nguyên
                                    <option value="Thanh Hóa">Thanh Hóa
                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                    <option value="Tiền Giang">Tiền Giang
                                    <option value="Trà Vinh">Trà Vinh
                                    <option value="Tuyên Quang">Tuyên Quang
                                    <option value="Vĩnh Long">Vĩnh Long
                                    <option value="Vĩnh Phúc">Vĩnh Phúc
                                    <option value="Yên Bái">Yên Bái
                                    <option value="Phú Yên">Phú Yên
                                    <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                    <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                    <option value="Tp.Hà Nội">Tp.Hà Nội
                                    <option value="TP  HCM">TP HCM
                                </select>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Tên Người Liên Hệ</label>
                                <input type="text" class="form-control" placeholder="Tên Người Liên Hệ" required name="user_lienhe">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Quốc Gia</label>
                                <select name="user_quocgia" class="form-control" id="">
                                    <option selected>Việt Nam</option>
                                    <option value="Việt Nam">Việt Nam</option>
                                    <option value="Mỹ">Mỹ</option>
                                    <option value="Thái Lan">Thái Lan </option>
                                    <option value="Nhật Bản">Nhật Bản</option>
                                    <option value="Hàn Quốc">Hàn Quốc</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" class="form-control" placeholder="Số điện thoại" required name="user_sodienthoai">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center" style="margin-top: 30px;">
                        <p>Bằng việc nhấp vào "Đăng Ký Ngay!"</p>
                    </div>
                    <div class="row">
                        <button type="submit" name="submit" class="btn btn-success" id="button_green"> Đăng Ký </button>
                        <?php
                        if (isset($success_message)) {
                            echo '<div class="success_message">' . $success_message . '</div>';
                        }
                        if (isset($error_message)) {
                            echo '<div class="error_message">' . $error_message . '</div>';
                        }
                        ?>
                    </div>
                </form>
            </div>
            <!-- HÌnh ảnh giới thiệu  -->
            <div class="col-md-5" style="margin-top: 10px;">
                <div class="row">
                    <div class="col-sm">
                        <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/TUYENDUNG.png" alt="" class="nhatuyendung">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/TUYENDUNG1.png" alt="" class="nhatuyendung">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/TUYENDUNG2.png" alt="" class="nhatuyendung">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cuối trang website -->
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