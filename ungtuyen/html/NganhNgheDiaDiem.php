<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ngành Nghề - Địa điểm</title>
    <!-- Link css boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Logo ic  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css hovermin  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/hover-min.css">
    <!-- Link Css cuối website -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/topandbottom.css">
    <!-- Link CSS Liên keets Ngành Nghề địa điểm -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/NganhNgheDiaDiem.css">
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
                        <li class="nav-item">
                            <a class="nav-link active hvr-curl-top-left" aria-current="page" href="logout.php">
                               Đăng Xuất
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


    <!-- Giữa Trang Web  -->

    <!-- Thanh tìm kiếm -->
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
    <div class="container-fluid" style="margin-top: 50px;">
        <div class="row">
            <div class="col-xl-9">
                <!-- Làm việc theo ngành nghề -->
                <div class="cb-title hvr-wobble-bottom">
                    <h2>Tìm Việc Làm Theo Ngành Nghề</h2>
                </div>
                <!-- Việc làm -->
                <div class="row list-of-working-positions">
                    <!-- Tìm Việc Làm Bán Hàng / Tiếp thị -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3">
                            <h4>Tìm việc làm Bán hàng / Tiếp thị</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Tiếp thị /
                                    Marketing</a></li>
                            <li><a href="#">Tiếp thị
                                    trực tuyến</a></li>
                            <li><a href="#">Bán lẻ / Bán
                                    sỉ</a></li>
                            <li><a href="#">Bán hàng /
                                    Kinh doanh</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm dịch vụ -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Dịch vụ</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Tư
                                    vấn</a></li>
                            <li><a href="#">An Ninh / Bảo
                                    Vệ</a></li>
                            <li><a href="#">Luật / Pháp
                                    lý</a></li>
                            <li><a href="#">Dịch vụ khách
                                    hàng</a></li>
                            <li><a href="#">Lao động phổ
                                    thông</a></li>
                            <li><a href="#">Bưu chính
                                    viễn thông</a></li>
                            <li><a href="#">Vận
                                    chuyển / Giao nhận / Kho vận</a></li>
                            <li><a href="#">Phi
                                    chính phủ / Phi lợi nhuận</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm chăm sóc sức khỏe -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Chăm sóc sức khỏe</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Y tế /
                                    Chăm sóc sức khỏe</a></li>
                            <li><a href="#">Dược
                                    phẩm</a></li>
                        </ul>
                    </div>
                    <!-- TÌm việc làm sản xuất -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Sản xuất</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Dệt
                                    may / Da giày / Thời trang</a></li>
                            <li><a href="#">Quản lý
                                    chất lượng (QA/QC)</a></li>
                            <li><a href="#">Thu mua / Vật
                                    tư</a></li>
                            <li><a href="#">An toàn lao
                                    động</a></li>
                            <li><a href="#">Sản
                                    xuất / Vận hành sản xuất</a></li>
                            <li><a href="#">Xuất nhập
                                    khẩu</a></li>
                            <li><a href="#">Đồ gỗ</a>
                            </li>
                            <li><a href="#">In ấn / Xuất
                                    bản</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm hàng tiêu dùng -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Hàng tiêu dùng</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Hàng
                                    gia dụng / Chăm sóc cá nhân</a></li>
                            <li><a href="#">Thực phẩm
                                    &amp; Đồ uống</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm máy tính/ IT -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Máy tính / Công nghệ thông tin</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">CNTT - Phần
                                    mềm</a></li>
                            <li><a href="#">CNTT - Phần
                                    cứng / Mạng</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm hành chính nhân sự -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Hành chánh / Nhân sự</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Nhân
                                    sự</a></li>
                            <li><a href="#">Hành chính /
                                    Thư ký</a></li>
                            <li><a href="#">Biên phiên
                                    dịch</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm kế toán / Tài chính -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Kế toán / Tài chính</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Ngân
                                    hàng</a></li>
                            <li><a href="#">Chứng
                                    khoán</a></li>
                            <li><a href="#">Bảo
                                    hiểm</a></li>
                            <li><a href="#">Tài chính / Đầu
                                    tư</a></li>
                            <li><a href="#">Kế toán / Kiểm
                                    toán</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Tìm Việc Làm Truyền Thông / Media  -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Truyền thông / Media</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Tổ chức sự
                                    kiện</a></li>
                            <li><a href="#">Truyền
                                    hình / Báo chí / Biên tập</a></li>
                            <li><a href="#">Mỹ
                                    thuật / Nghệ thuật / Thiết kế</a></li>
                            <li><a href="#">Quảng
                                    cáo / Đối ngoại / Truyền Thông</a></li>
                            <li><a href="#">Giải
                                    trí</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm xây dựng -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Xây dựng</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Bất động
                                    sản</a></li>
                            <li><a href="#">Nội ngoại
                                    thất</a></li>
                            <li><a href="#">Kiến
                                    trúc</a></li>
                            <li><a href="#">Xây
                                    dựng</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm kỹ  thuật -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Kỹ thuật</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Cơ
                                    khí&nbsp;/ Ô tô&nbsp;/ Tự động hóa</a><span></li>
                            <li><a href="#">Môi
                                    trường</a></li>
                            <li><a href="#">Điện /
                                    Điện tử / Điện lạnh</a></li>
                            <li><a href="#">Hóa
                                    học</a></li>
                            <li><a href="#">Khoáng
                                    sản</a></li>
                            <li><a href="#">Dầu
                                    khí</a></li>
                            <li><a href="#">Bảo trì / Sửa
                                    chữa</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm giáo dục -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Giáo dục / Đào tạo</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Thư
                                    viện</a></li>
                            <li><a href="#">Giáo dục / Đào
                                    tạo</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Khoa học</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Lâm
                                    Nghiệp</a></li>
                            <li><a href="#">Thủy sản / Hải
                                    sản</a></li>
                            <li><a href="#">Công
                                    nghệ thực phẩm / Dinh dưỡng</a></li>
                            <li><a href="#">Thống
                                    kê</a></li>
                            <li><a href="#">Nông
                                    nghiệp</a></li>
                            <li><a href="#">Hàng
                                    hải</a></li>
                            <li><a href="#">Công nghệ
                                    sinh học</a></li>
                            <li><a href="#">Trắc địa / Địa
                                    Chất</a></li>
                            <li><a href="#">Thủy
                                    lợi</a></li>
                            <li><a href="#">Chăn nuôi / Thú
                                    y</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm khách sạn / du lịch -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Khách sạn / Du lịch</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Du
                                    lịch</a></li>
                            <li><a href="#">Nhà hàng /
                                    Khách sạn</a></li>
                            <li><a href="#">Hàng
                                    không</a></li>
                        </ul>
                    </div>
                    <!-- Tìm việc làm nhóm ngành khác  -->
                    <div class="col-md-6 col-lg-4 cus-col">
                        <div class="title-h3 ">
                            <h4>Tìm việc làm Nhóm ngành khác</h4>
                        </div>
                        <ul class="list-jobs">
                            <li><a href="#">Ngành
                                    khác</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <!-- Làm việc theo đối tượng -->
                <div class="main-jobs-by-type">
                    <div class="title-h3 ">
                        <h4>Việc Làm Theo Đối Tượng</h4>
                    </div>
                    <div class="featured"> <a href="#">
                            <h5 style="color: green;">Việc làm nổi bật trong tuần</h5>
                        </a> </div>
                    <ul class="list-featured">
                        <li><a href="#">Việc làm
                                $1000+</a></li>
                        <li><a href="#">Mới tốt
                                nghiệp / Thực tập</a></li>
                        <li><a href="#">Quản lý điều
                                hành</a></li>
                        <li><a href="#">Thời vụ/ Nghề
                                tự do</a></li>

                        <li><a href="#">Tạm thời/ Dự
                                án</a></li>
                    </ul>
                </div>
                <!-- Làm việc Theo Địa điểm -->
                <div class="main-jobs-by-location">
                    <div class="title-h3 ">
                        <h3>Việc Làm Theo Địa Điểm</h3>
                    </div>
                    <div class="jobs-in-country">
                        <div class="title">
                            <h4 style="color: green;">Việc Làm Trong nước</h4>
                        </div>
                        <ul class="list-jobs-by-country" id="listCountry">
                            <li style="display: list-item;"><a href="#">Việc làm tại Hồ Chí
                                    Minh</a></li>
                            <li style="display: list-item;"><a href="">Việc làm tại Hà Nội</a>
                            </li>
                            <li style="display: list-item;"><a href="">Việc làm tại Bình
                                    Dương</a></li>
                            <li style="display: list-item;"><a href="">Việc làm tại Đồng
                                    Nai</a></li>
                            <li style="display: list-item;"><a href="">Việc làm tại Đà
                                    Nẵng</a></li>
                            <li><a href="">Việc làm tại Long An</a>
                            </li>
                            <li><a href="">Việc làm tại Bà
                                    Rịa - Vũng Tàu</a></li>
                        </ul>
                        <div class="overseas-jobs">
                            <div class="title-h3 ">
                                <h3>Việc Làm Nước Ngoài</h3>
                            </div>
                            <ul class="list-overseas-jobs" id="listOverseasJobs">
                                <li style="display: list-item;"><a href="#">Nhật Bản </a></li>
                                <li style="display: list-item;"><a href="#">Hàn Quốc </a></li>
                                <li style="display: list-item;"><a href="#">Malaysia </a></li>
                                <li style="display: list-item;"><a href="#">Campuchia </a></li>
                                <li style="display: list-item;"><a href="#">Lào </a></li>
                                <li><a href="#">Quốc tế </a></li>
                                <li><a href="#">Khác </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cuối Trang Web  -->
        <div class="container-fluid bg-dark text-white" style="margin-top:50px;">
            <section class="top-footer cb-section cb-section-border-bottom">
                <div class="row">
                    <div class="col-lg-12 logo"><img class="lazy-bg"
                            src="/PROJECT_JOB/PROJECT_JOB/image/HatchfulExport-All/facebook_cover_photo_2.png" height="100px" width="200px"
                            style="float: left; margin-top: 10px;" alt="Tuyển dụng &amp; Tìm kiếm việc làm nhanh"></div>
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
                            <div class="app-links"> <a href="#" target="_blank" style="float: left;">
                                    <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/apple.png" alt="app"> </a> <a href="#"
                                    target="_blank">
                                    <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/android.png" alt="app"> </a> </div>
                        </div>
                        <div class="footer-social-links">
                            <h3>Kết nối với nguyenlehuuduy.vn</h3>
                            <ul>
                                <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/facebook.png" alt="" height="30px" width="30px">
                                    <b>Facebook.com</b>
                                </li><br>
                                <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/instagram.png" alt="" height="30px"
                                        width="30px"><b>Instagram</b></li><br>
                                <li> <img src="/PROJECT_JOB/image/HinhAnhWEB/zalo.png" alt="" height="30px" width="30px"><b>Zalo</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bottom-footer">
                <div class="left-bottom-footer">
                    <p>Trụ Sở Chính : 470 Trần Đại Nghĩa - Trường Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt - Hàn
                        -
                        Quận Ngũ
                        Hành Sơn</p>
                    <p>Văn Phòng : Ký Túc Xá Trường Đại Học Công Nghệ Thông Tin Và Truyền Thông Việt - Hàn </p>
                    <p>Email : nlhduy.20it7@vku.udn.vn</p>
                    <p>Số Điện Thoại : 0358650975</p>
                    <p>Mọi Thông Tin Chi Tiết Xin Vui Lòng Liên Hệ Cho Chúng Tôi .</p>
                </div>
                <div class="right-bottom-footer">
                    <a target="_blank" href="#">
                        <img class="lazy-bg" src="/PROJECT_JOB/image/HinhAnhWEB/dk.png" alt="bct"
                            style="float: right; margin-top: -100px; margin-right: 100px;">
                    </a>
                </div>
            </section>
        </div>

        <!--------- Nhúng JS của Bootstrap -------------->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
            integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
            integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
            crossorigin="anonymous"></script>
</body>

</html>