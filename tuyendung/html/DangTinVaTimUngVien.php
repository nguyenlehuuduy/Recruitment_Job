<?php
session_start();
require 'db_connection.php';

if (isset($_POST['user_ten']) && isset($_POST['user_ho']) && isset($_POST['user_email']) && isset($_POST['user_hinhthuc'])) {


    if (!empty(trim($_POST['user_ten']))  && !empty(trim($_POST['user_ho'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_hinhthuc'])) {

        $user_ten = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ten']));
        $user_ho = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ho']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
        $user_hinhthuc = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_hinhthuc']));

        $insert_user = mysqli_query($db_connection, "INSERT INTO `dangtuyen` (user_ten,user_ho,user_email,user_hinhthuc) VALUES ('$user_ten','$user_ho', '$user_email', '$user_hinhthuc')");

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
    <title>Đăng Tin Và Tìm Ứng Viên </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link css boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- css hake  // https://elrumordelaluz.github.io/csshake/-->
    <link rel="stylesheet" type="text/css" href="https://csshake.surge.sh/csshake.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Link ic logo đầu website -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB/image/HatchfulExport-All/favicon.png" />
    <!-- Link css libraby hover-min  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/hover-min.css">
    <!-- Link css cuối trang web  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/topandbottom.css">
    <!-- Link css Đăng tin và tìm ứng viên chình của website  -->
    <link rel="stylesheet" href="/PROJECT_JOB/tuyendung/css/DangTinVaTimUngVien.css">
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
    <!-- Phần giữa trang web -->
    <div class="container-fluid">
        <!-- back ground video website đăng tin và tuyển dụng  -->
        <div class="row">
            <video autoplay="autoplay" loop="loop" width="100%">
                <source src="/PROJECT_JOB/image/LOGOVIECLAM/VIDEOJOB/DTD_TUV.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <!-- Giới thiueej về Đăng tin và tuyển dụng -->
    <div class="container">
        <div class="row text-center" style="margin-top: 100px;">
            <b>
                <h2 style="font-size: 50px;">WEBSITE CỦA CHÚNG TÔI</h2>
                <p>Mong sẽ giúp bạn tìm được công việc phù hợp với bản thân</p>
            </b>
        </div>
        <div class="row">
            <section id="team">
                <div class="container my-3 py-5 text-center" id="TrangGiua">
                    <div class="row">
                        <!-- Quảng Bá Thương Hiệu  -->
                        <div class="col-md-6" data-tilt>
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Quảng bá Thương hiệu trang tuyển dụng</b></h5> <br>
                                    <p>Một trang web Tuyển dụng chuyên nghiệp được thiết kế để giới thiệu thương hiệu Tuyển dụng và thu hút ứng viên tài năng. Trang web được tối ưu hóa cho thiết bị di động và thân thiện với SEO, đảm bảo hiển thị tối đa cho
                                        người tìm việc</p>
                                </div>
                            </div>
                        </div>
                        <!-- Đăng tuyển dụng -->
                        <div class="col-md-6" data-tilt>
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Đăng Tuyển Dụng</b></h5> <br> <br>
                                    <p>Tìm kiếm ứng viên phù hợp mà bạn đang tìm kiếm từ quyền truy cập vào hàng trăm ngàn hồ sơ chất lượng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tìm hồ sơ ứng viên  -->
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-6" data-tilt>
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Tìm Hồ sơ ứng viên</b></h5> <br>
                                    <p>Tìm kiếm ứng viên phù hợp mà bạn đang tìm kiếm từ quyền truy cập vào hàng trăm ngàn hồ sơ chất lượng</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" data-tilt>
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Tự động hóa quy trình tuyển dụng</b></h5> <br>
                                    <p>Tự động phân loại ứng viên từ khâu mời phỏng vấn, từ chối hay mời ứng viên làm việc.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Chia sẻ mạng xã hội   -->
                    <div class="row" style="margin-top: 50px;">
                        <div class="col-md-6" data-tilt>
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>Chia sẻ Mạng xã hội</b></h5> <br> <br>
                                    <p>Tích cực quảng cáo việc làm của bạn trên mạng xã hội. Kết nối Hrchannels với các mạng xã hội của bạn và chia sẻ cơ hội việc làm trực tiếp dưới dạng bài đăng trên trang công ty của bạn</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" data-tilt>
                            <div class="card">
                                <div class="card-body">
                                    <h5><b>
                                            CRM cho nhà tuyển dụng </b></h5> <br>
                                    <p>Một CRM phục vụ Tuyển dụng được thiết kế cho các nhà tuyển dụng để quản lý toàn bộ hoạt động tuyển dụng từ nhân viên nội bộ đến các nhà cung cấp headhunters bên ngoài. Một nền tảng để giao việc, giám sát và đánh giá
                                        hiệu quả tuyển dụng toàn diện.
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
        </div>
        <!-- Thông tin đăng tuyển -->
        <div class="row">
            <h2 style="text-align: center;"><b><b>Thông Tin Đăng Tuyển</b></b>
            </h2>
        </div>
        <div class="row" style="margin-top: 30px;">
            <!-- Đăng tin cơ bản -->
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/iconpost4.png" class="card-img-top shake-slow" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><b><b>Đăng tin cơ bản</b></b>
                        </h5>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Được đăng tin và hiển thị trên website</p>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Tin đăng được tìm kiếm bởi hàng triệu Người tìm việc</p>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Nhận được hồ sơ ứng tuyển
                        </p> <br>
                        <!-- Xem chi tiết Đăng tin cơ bản -->
                        <div class="col-sm-6" id="model">
                            <button id="button_buy" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <b>Xem Chi Tiết</b>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Thông Tin Đăng Tuyển</h5><br>
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
                                                    <h6>Chào mừng bạn đến với mục Thông Tin Đăng Tuyển</h6>
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
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Hình Thức Đăng Tin</label>
                                                        <select name="user_hinhthuc" class="form-control" id="">
                                                            <option selected>Hình Thức</option>
                                                            <option value="Đăng Tin Cơ Bản">Đăng Tin Cơ Bản</option>
                                                            <option value="Đăng Tin Nổi Bậc">Đăng Tin Nổi Bậc</option>
                                                            <option value="Lọc Hồ Sơ">Lọc Hồ Sơ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;"> Gửi </button>
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
            <!-- Đăng tin nổi bậc  -->
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/iconpost3.png" class="card-img-top shake-slow" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title text-center"><b><b>Đăng tin nổi bật</b></b>
                        </h5>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Tin đăng hiển thị tại các vị trí nổi bật</p>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Thu hút tối đa ứng viên, tuyển dụng hiệu quả nhất</p>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Tặng website tuyển dụng riêng trị giá 10 triệu đồng</p>
                        <!-- Xem chi tiết đăng tin nổi bậc -->
                        <div class="col-sm-6" id="model">
                            <button id="button_buy" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <b>Xem Chi Tiết</b>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Thông Tin Đăng Tuyển</h5><br>
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
                                                    <h6>Chào mừng bạn đến với mục Thông Tin Đăng Tuyển</h6>
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
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Hình Thức Đăng Tin</label>
                                                        <select name="user_hinhthuc" class="form-control" id="">
                                                            <option selected>Hình Thức</option>
                                                            <option value="Đăng Tin Cơ Bản">Đăng Tin Cơ Bản</option>
                                                            <option value="Đăng Tin Nổi Bậc">Đăng Tin Nổi Bậc</option>
                                                            <option value="Lọc Hồ Sơ">Lọc Hồ Sơ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;"> Gửi </button>
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
            <!-- Lọc hồ sơ  -->
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/iconpost5.png" class="card-img-top shake-slow" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><b><b>Lọc hồ sơ</b></b>
                        </h5>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Sàng lọc hồ sơ theo tiêu chí tìm kiếm</p>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Kiểm soát và tiết kiệm chi phí tuyển dụng</p>
                        <p class="card-text"><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""> Thời gian sử dụng lên đến 1 năm</p> <br>
                        <!-- Xem chi tiết phần lọc hồ sơ  -->
                        <div class="col-sm-6" id="model">
                            <button id="button_buy" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <b>Xem Chi Tiết</b>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Thông Tin Đăng Tuyển</h5><br>
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
                                                    <h6>Chào mừng bạn đến với mục Thông Tin Đăng Tuyển</h6>
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
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Hình Thức Đăng Tin</label>
                                                        <select name="user_hinhthuc" class="form-control" id="">
                                                            <option selected>Hình Thức</option>
                                                            <option value="Đăng Tin Cơ Bản">Đăng Tin Cơ Bản</option>
                                                            <option value="Đăng Tin Nổi Bậc">Đăng Tin Nổi Bậc</option>
                                                            <option value="Lọc Hồ Sơ">Lọc Hồ Sơ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;"> Gửi </button>
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
        <!-- Đăng tuyển CPA  -->
        <div class="row text-center" style="margin-top: 30px;">
            <h2 style="color: red;"><b><b>Đăng tuyển CPA – Cost Per Application</b></b>
            </h2>
            <p>Giờ đây, bạn hoàn toàn có thể kiểm soát được chi phí tuyển dụng với phương thức thanh toán Pay As You Go của dịch vụ đăng tuyển CPA
            </p>
        </div>
        <!-- Giới thiệu về đăng tuyển CPA -->
        <div class="row" style="margin-top: 30px ;">
            <div class="col-md-4">
                <p class="card-text text-center "><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/DT1.png" alt=""></p>
                <p><b>Phương Thức Đăng Tuyển Mới Nhất Tại Việt Nam</b></p>
            </div>
            <div class="col-md-4 text-center">
                <p class="card-text "><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/DT2.png" alt=""></p>
                <p><b>Kiểm soát và
                        tiết kiệm chi phí tuyển dụng</b></p>
            </div>
            <div class="col-md-4 text-center">
                <p class="card-text "><img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/DT3.png" height="140px" width="180px" alt="">
                </p>
                <p><b>Bạn chỉ trả phí khi
                        bạn muốn – PAYG</b></p>
            </div>
        </div>
        <!-- part 1 -->
        <div class="row text-center" style="margin-top: 30px;">
            <h2 style="color: red;"><b><b>Bạn sẽ được</b></b>
            </h2>
        </div>
        <!-- part 2 -->
        <div class="row" style="margin-top: 30px ;">
            <div class="col-md-6 ">
                <div class="alert alert-primary " role="alert">
                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""><b> Chỉ trả tiền cho những CV mà bạn quyết
                        định
                        xem</b>
                </div>

            </div>
            <div class="col-md-6 ">
                <div class="alert alert-primary" role="alert">
                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""><b> Đăng tuyển không giới hạn</b>
                </div>

            </div>
        </div>
        <!-- part 3 -->
        <div class="row" style="margin-top: 30px ;">
            <div class="col-md-6 ">
                <div class="alert alert-primary" role="alert">
                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""><b> Không giới hạn hồ sơ ứng tuyển</b>
                </div>
            </div>
            <div class="col-md-6">
                <div class="alert alert-primary" role="alert">
                    <img src="/PROJECT_JOB/image/IMAGENHATUYENDUNG/checkbox.svg" alt=""><b> Xem trước hồ sơ không giới hạn</b>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Question của các ứng viên  -->
        <div class="row" style="margin-top: 60px;">
            <div class="text-h2 text-center">
                <h1>Các Câu Hỏi Thường Gặp</h1>
                <p>Tuyển dụng. Kết nối ứng viên ngay lập tức. Xây dựng thương hiệu nhà tuyển dụng chuyên nghiệp</p>
            </div>
            <div class="text" style="font-size: 20px; margin-top: 40px;">
                <i class="fa fa-question-circle">
                    <b><i>Q. Việc gửi thông báo ứng viên đã ứng tuyển vào tin đăng tuyển dụng của Doanh nghiệp như
                            thế
                            nào?</i></b>
                </i>
            </div>
            <div class="text" style="font-size: 20px; margin-top: 40px;">
                <i class="fa fa-question-circle">
                    <b><i>Q. Những tin đăng thế nào là hợp lệ và tin đăng không hợp lệ?</i></b>
                </i>
            </div>
            <div class="text" style="font-size: 20px; margin-top: 40px;">
                <i class="fa fa-question-circle">
                    <b><i>Q. Sau khi đăng tuyển, bao lâu thì job của tôi được kích hoạt hiển thị?</i></b>
                </i>
            </div>
            <div class="text" style="font-size: 20px; margin-top: 40px;">
                <i class="fa fa-question-circle">
                    <b><i>Q. Tôi muốn xem hồ sơ ứng viên miễn phí trên HRchannels như thế nào?</i></b>
                </i>
            </div>
            <div class="text" style="font-size: 20px; margin-top: 40px;">
                <i class="fa fa-question-circle">
                    <b><i>Đăng ký để sử dụng dịch vụ Online</i></b>
                </i>
            </div>
            <div class="text" style="font-size: 20px; margin-top: 40px;">
                <i class="fa fa-question-circle">
                    <b><i>Q. Tôi muốn xem hồ sơ ứng viên miễn phí trên HRchannels như thế nào?</i></b>
                </i>
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
    <!-- Thư viện AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- Parallax khi Hover với Tilt.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://unpkg.com/tilt.js@1.1.20/dest/tilt.jquery.min.js"></script>
    <!-- - Thư viện AniCollection.css -> -->
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <!--------- Nhúng JS của Bootstrap -------------->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>