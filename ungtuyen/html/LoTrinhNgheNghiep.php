<?php
session_start();
require 'db_connection.php';

if (isset($_POST['user_nn']) && isset($_POST['user_ten']) && isset($_POST['user_ho']) && isset($_POST['user_email'])) {


    if (!empty(trim($_POST['user_nn']))  && !empty(trim($_POST['user_ten'])) && !empty(trim($_POST['user_ho'])) && !empty($_POST['user_email'])) {

        $user_nn = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_nn']));
        $user_ten = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ten']));
        $user_ho = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ho']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));

        $insert_user = mysqli_query($db_connection, "INSERT INTO `nghe` (user_nn,user_ten,user_ho,user_email) VALUES ('$user_nn','$user_ten', '$user_ho', '$user_email')");

        if ($insert_user === TRUE) {
            $success_message = "Cảm ơn! Bạn đã gửi thành công.";
        } else {
            $error_message = "Giáo sư! Có gì đó không đúng.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lộ Trình Nghề Nghiệp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Link ic của website  -->
    <link rel="icon" type="image/x-icon" href="/PROJECT_JOB//image/HatchfulExport-All/favicon.png" />
    <!-- Link css framework hover-min -->
    <link rel="stylesheet" href="/PROJECT_JOB//ungtuyen/css/hover-min.css">
    <!-- Link css cuối trang website  -->
    <link rel="stylesheet" href="/PROJECT_JOB//ungtuyen/css/topandbottom.css">
    <!-- Liên kết css chính của lộ trình nghề nghiệp -->
    <link rel="stylesheet" href="/PROJECT_JOB//ungtuyen/css/LoTrinhNgheNghiep.css">
    <!-- link css button  -->
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/job/css/button.css">
    <link rel="stylesheet" href="/PROJECT_JOB/ungtuyen/css/style.css">
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

    <!-- Phần Thân  -->
    <!-- Background video hiển thị đầu  -->
    <div class="container-fluid">
        <div class="row">
            <video class="video" autoplay="autoplay" loop="loop" width="100%">
                <source src="/PROJECT_JOB/image/CV/BACGROUND_LTTN.mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <!-- Lộ trình nghề nghiệp -->
    <section id="team">
        <div class="container my-3 py-5 text-center" id="TrangGiua">
            <div class="row mb-5">
                <div class="col">
                    <h1>Lộ Trình Nghề Nghiệp Tham Khảo Dành Cho Bạn</h1>
                    <p>.</p>
                    <p>.</p>
                </div>
            </div>
            <div class="row">
                <!-- Lộ trinh nghề nghiệp chưa tốt nghiệp / mới ra trường  -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body hvr-pulse-grow">
                            <img src="/PROJECT_JOB/image/CV/cvicon1.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Chưa Tốt Nghiệp/ Mới ra trường
                            </h3>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lộ trình nghề nghiệp có kinh nghiệm từ 1 - 3 năm  -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body hvr-pulse-grow">
                            <img src="/PROJECT_JOB/image/CV/cvicon2.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Có kinh nghiệm từ 1-3 năm
                            </h3>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lộ trình nghề nghiệp trên 3 năm  -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body hvr-pulse-grow">
                            <img src="/PROJECT_JOB/image/CV/cvicon3.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Có kinh nghiệp trên 3 năm
                            </h3>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lộ trình cấp quản lí trên 5 năm  -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body hvr-pulse-grow">
                            <img src="/PROJECT_JOB/image/CV/cvicon4.png" alt="" class="img-fluid rounded-circle w-50 mb-3">
                            <h3>Cấp Quản Lí trên 5 năm
                            </h3>
                            <div class="d-flex flex-row justify-content-center">
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div class="p-4">
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ứng tuyển lộ trình nghề nghiệp -->
    <div class="col-sm-2" id="model">
        <button id="button_ltnn" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <b>Gửi thông tin để được tư vấn lộ trình dành cho bạn</b>
        </button>
        <!-- Modal form gửi đi ứng tuyển -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hãy lựa chọn kinh nghiệm của bạn</h5><br>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger" role="alert">
                            <i> <u>Lưu ý :</u> Nhập đầy đủ các phần không được bỏ sót</i>
                        </div>
                        <hr>
                        <!-- form lựa chọn kinh nghiệm để gửi đi ứng tuyển  -->
                        <!-- <form class="row g-3" action="" method="POST">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Lộ Trình Nghề Nghiệp</label>
                                    <select name="user_nn" class="form-control" id="">
                                        <option selected>Lựa chọn lộ trình nghề nghiệp</option>
                                        <option value="">Chưa Có Kinh Nghiệm</option>
                                        <option value="">Có kinh nghiệm từ 1-3 năm</option>
                                        <option value="">Có kinh nghiệp trên 3 năm </option>
                                        <option value="">Cấp Quản Lí trên 5 năm</option>
                                    </select>
                                </div>
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
                            <div class="modal-footer">
                                <button id="button_green" type="submit" class="btn btn-success" style="width: 100%;" style="width: 100%;"> Gửi </button>
                            </div>
                        </form> -->
                        <form class="row g-3" action="" method="post">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Lộ Trình Nghề Nghiệp</label>
                                    <select name="user_nn" class="form-control" id="">
                                        <option selected>Lựa chọn lộ trình nghề nghiệp</option>
                                        <option value="Chưa Có Kinh Nghiệm">Chưa Có Kinh Nghiệm</option>
                                        <option value="Có kinh nghiệm từ 1-3 năm">Có kinh nghiệm từ 1-3 năm</option>
                                        <option value="Có kinh nghiệp trên 3 năm">Có kinh nghiệp trên 3 năm </option>
                                        <option value="Cấp Quản Lí trên 5 năm">Cấp Quản Lí trên 5 năm</option>
                                    </select>
                                </div>
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
                            <div class="modal-footer">
                                <button class="btn btn-success"  id="button_green" type="submit" style="width: 100%;" style="width: 100%;"> Gửi</button>
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

    <!-- Các bước để có 11 lộ trình bản đồ nghề nghiệp ý nghĩa -->
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="text-h1 text-center">
                <h1><b>Làm thế nào để tạo một bản đồ nghề nghiệp có ý nghĩa</b></h1>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;" id="backgroup">
            <!-- Bước 1  -->
            <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
                <div class="card-header"><b> <i><u>Bước 1</u></i></b></div>
                <div class="card-body hvr-rectangle-out">
                    <h5 class="card-title">Xác định điểm đến</h5>
                    <p class="card-text">Nhiều người mắc sai lầm khi tham gia vào sự nghiệp với hy vọng hơn là lập bản đồ nghề nghiệp . Nhưng như tác giả Lewis Carroll từng lưu ý: “Nếu bạn không biết mình đang đi đâu, thì bất kỳ con đường nào cũng sẽ đưa bạn đến đó”. Xác
                        định mục tiêu nghề nghiệp chính của bạn và đưa nó ra giấy. Hãy xem xét nội tâm và chi tiết khi xác định tham vọng của bạn. Chắc chắn, “Tôi muốn thăng tiến sự nghiệp trong ngành kế toán và kiếm được nhiều tiền hơn” về mặt kỹ thuật
                        là một mục tiêu, nhưng nó quá mơ hồ. Mục tiêu của bạn là chuyển sang vai trò quản lý với người chủ hiện tại của bạn? Bạn có muốn chuyển đổi sang một lĩnh vực chuyên môn hơn như kế toán pháp y không? Có thể bạn muốn đặt mình vào
                        vị trí để có thể nhảy vào một công ty Big Four. Bất kể mục tiêu của bạn là gì, hãy làm cho nó cụ thể và có thể đo lường được..</p>
                </div>
            </div>
            <!-- BƯớc 2  -->
            <div class="card text-white bg-danger mb-3" style="max-width: 100%;">
                <div class="card-header"><b> <i><u>Bước 2</u></i></b></div>
                <div class="card-body hvr-rectangle-out">
                    <h5 class="card-title">Biết điểm xuất phát của bạn</h5>
                    <p class="card-text">Bạn cần hiểu chính xác vị trí của mình trước khi có thể quyết định cách bạn sẽ đến được nơi bạn muốn. Đánh giá thẳng thắn về cả kỹ năng cứng và mềm của bạn. Bạn nổi trội trong lĩnh vực nào? Những khía cạnh nào của công việc khiến bạn
                        hứng thú nhất? Và trong khi chắc chắn đó là một bài tập kém thú vị, hãy đặt những điểm yếu của bạn dưới kính hiển vi . Những lỗ hổng kỹ năng hoặc thói quen xấu có cản trở hiệu quả của bạn không? Việc thiếu các chứng chỉ ngành theo
                        yêu cầu có thể kìm hãm bạn không? Thành thật về ưu điểm, khuyết điểm, thích và không thích của bạn. Quá trình tự xem xét này có thể giúp bạn kết tinh hóa mục tiêu dài hạn của mình và cung cấp cho bạn thông tin chi tiết về các bước
                        cụ thể mà bạn cần thực hiện để đạt được mục tiêu đó.</p>
                </div>
            </div>
            <!-- Bước 3  -->
            <div class="card text-white bg-success mb-3" style="max-width: 100%;">
                <div class="card-header"><b> <i><u>Bước 3</u></i></b></div>
                <div class="card-body hvr-rectangle-out">
                    <h5 class="card-title">Hỏi đường</h5>
                    <p class="card-text">Làm cho người quản lý của bạn biết sở thích của bạn và yêu cầu đóng góp và hỗ trợ. Kế hoạch nghề nghiệp của bạn có phù hợp với nơi sếp thấy bạn đi không? Họ có thể chỉ cho bạn các cơ hội đào tạo hoặc chỉ định các dự án cấp cao hơn
                        sẽ giúp bạn đạt được công việc mà bạn đang tìm kiếm không? Có con đường nào để đến đó mà bạn chưa xem xét không? Rõ ràng là có lợi khi làm việc cho một nhà tuyển dụng, người truyền đạt những con đường sự nghiệp tiềm năng và giúp
                        bạn đạt được cấp độ tiếp theo, nhưng bạn mới là người phải kiểm soát tay lái. Đó là lý do tại sao bạn có thể cân nhắc việc cố gắng tìm một người cố vấn. Người cố vấn có thể cung cấp hỗ trợ liên tục, phản hồi khách quan, thông tin
                        chi tiết trong thế giới thực và mẹo về người để kết nối. Nếu công ty của bạn không có chương trình cố vấn chính thức hoặc bạn đang tìm kiếm một công việc bên ngoài công ty, hãy hỏi một thành viên trong mạng lưới chuyên nghiệp của
                        bạn có ý kiến ​​mà bạn tin tưởng xem họ có sẵn sàng làm việc với bạn không.</p>
                </div>
            </div>
            <!-- Bước 4  -->
            <div class="card text-white bg-warning mb-3" style="max-width: 100%;">
                <div class="card-header"><b> <i><u>Bước 4</u></i></b></div>
                <div class="card-body hvr-rectangle-out">
                    <h5 class="card-title">Chú ý đến các điểm đánh dấu dặm trên bản đồ nghề nghiệp</h5>
                    <p class="card-text">Đối với một số người, một mục tiêu cao cả dường như quá sức và không thể đạt được, vì vậy hãy chia nhỏ nó thành một loạt các mục tiêu nhỏ hơn. Thiết lập các mục tiêu rõ ràng và các bước hành động - và đặt thời hạn hoàn thành các mục
                        tiêu tạm thời này. Ví dụ: nếu bạn muốn trở thành giám sát của bộ phận, các bước quan trọng có thể bao gồm hoàn thành chương trình đào tạo lãnh đạo hoặc trở lại trường học để lấy bằng MBA. Bạn cũng có thể theo đuổi vai trò lãnh
                        đạo với chi hội địa phương của hiệp hội nghề nghiệp. Bất cứ khi nào bạn đạt được một cột mốc quan trọng, hãy dành thời gian để suy ngẫm và tận hưởng thành quả đó. Thừa nhận những thành công của bạn trong suốt chặng đường sẽ giúp
                        bạn duy trì động lực khi bạn tiến gần hơn đến mục tiêu cuối cùng của mình..</p>
                </div>
            </div>
            <!-- BƯớc 5  -->
            <div class="card text-white bg-secondary mb-3" style="max-width: 100%;">
                <div class="card-header"><b> <i><u>Bước 5</u></i></b></div>
                <div class="card-body hvr-rectangle-out">
                    <h5 class="card-title">Luôn thúc đẩy</h5>
                    <p class="card-text">Bất kỳ chuyến đi nào đáng để thực hiện đều có thể bao gồm một số va chạm và rẽ nhầm trên đường đi. Đừng để những thất vọng không thể tránh khỏi này làm giảm quyết tâm của bạn. Khi bạn gặp phải rào cản, hãy tập hợp lại và tiếp tục.
                        Sự tiến bộ trong sự nghiệp không chỉ đòi hỏi phải có kế hoạch mà còn phải có động lực và kỷ luật. Tập trung vào những bài học rút ra từ bước lùi của bạn - sau đó đặt chân trở lại bàn đạp.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Các blog tham khảo thêm -->
    <div class="container" style="margin-top: 50px;">
        <div class="row text-center">
            <h2>Blog tham khảo...</h2>
        </div>
        <div class="row" style="margin-top: 50px;">
            <!-- Blog 1  -->
            <div class="col-md-4">
                <div class="col-sm text-center">
                    <div class="card" style="width: 100%;">
                        <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOVIECLAM.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="#">
                                    <b>Các câu hỏi phỏng vấn phổ biến cho một công việc - và cách giải quyết vấn đề
                                        đó</b> <br>
                                </a>
                            </h5>
                            <p>
                                Tăng cơ hội gây ấn tượng với người quản lý tuyển dụng và đạt được công việc bạn muốn bằng cách chuẩn bị cho những câu hỏi phỏng vấn phổ biến này.
                            </p>
                            <a href="#">
                                Đọc thêm ->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 2  -->
            <div class="col-md-4">
                <div class="col-sm text-center">
                    <div class="card" style="width: 100%;">
                        <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOVIECLAM1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="#">
                                    <b>Lợi ích của làm việc theo nhóm tại nơi làm việc</b> <br>
                                </a>
                            </h5>
                            <p>
                                Cạnh tranh thân thiện có thể lành mạnh, nhưng một doanh nghiệp có lợi nhất khi các nhân viên làm việc cùng nhau. Đọc thêm về giá trị của tinh thần đồng đội tại nơi làm việc.
                            </p>
                            <a href="#">
                                Đọc thêm ->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog 3  -->
            <div class="col-md-4">
                <div class="col-sm text-center">
                    <div class="card" style="width: 100%;">
                        <img src="/PROJECT_JOB/image/IMAGEVIECLAM/QUANGCAOVIECLAM2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <a href="#">
                                    <b>5 cách để cải thiện sức khỏe tâm thần của nhân viên - và tại sao nó lại rất quan
                                        trọng</b> <br>
                                </a>
                            </h5>
                            <p>
                                Sự không chắc chắn và khối lượng công việc nặng nề đang gặm nhấm sức khỏe tinh thần của nhân viên. Dưới đây là mẹo của chúng tôi về cách người quản lý.
                            </p>
                            <a href="#">
                                Đọc thêm ->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mô tả doanh nghiệp cùng các cơ hội việc làm  -->
    <div class="container bg-success" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-4">
                <div class="icon"><img src="/PROJECT_JOB/image/CV/cvicon5.png" alt=""></div>
                <div class="number"><span class="count-up">sớm kết nối được với các doanh nghiệp</span></div>
                <div class="name">
                    <h3>DOANH NGHIỆP TẠI VIỆT NAM</h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="icon"><img src="/PROJECT_JOB/image/CV/cvicon6.png" alt=""></div>

                <div class="number"><span class="count-up">Tạo nhiều cơ hội việc làm mỗi tháng</span></div>
                <div class="name">
                    <h3>CƠ HỘI NGHỀ NGHIỆP MỚI MỖI THÁNG </h3>
                </div>

            </div>
            <div class="col-md-4">
                <div class="icon"><img src="/PROJECT_JOB/image/CV/cvicon7.png" alt=""></div>

                <div class="number"><span class="count-up">sớm có nhiều lượt truy cập hằng tháng cao</span></div>
                <div class="name">
                    <h3>LƯỢT XEM HÀNG THÁNG</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Trang trí thêm cuối lộ trình nghề nghiệp  -->
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="menu-icon">
                    <img src="/PROJECT_JOB/image/CV/cvicon8.png" alt="">
                    <a href="#">
                        <u>
                            <h4><b>CV Hay</b></h4>
                        </u>
                    </a>
                    <i><b>
                            <p>Có CV hay <br> Có ngay cơ hội</p>
                        </b></i>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="menu-icon">
                    <img src="/PROJECT_JOB/image/CV/cvicon9.png" alt="">
                    <a href="#">
                        <u>
                            <h4><b>Lương</b></h4>
                        </u>
                    </a>
                    <i><b>
                            <p>Đo lường lương <br> thị trường nhanh</p>
                        </b></i>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="menu-icon">
                    <img src="/PROJECT_JOB/image/CV/cvicon10.png" alt="">
                    <a href="#">
                        <u>
                            <h4><b>Việc Làm IT</b></h4>
                        </u>
                    </a>
                    <i><b>
                            <p>Cơ hội việc làm tốt <br> Lương cao</p>
                        </b></i>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="menu-icon">
                    <img src="/PROJECT_JOB/image/CV/cvicon11.png" alt="">
                    <a href="#">
                        <u>
                            <h4><b>Hỗ trợ</b></h4>
                        </u>
                    </a>
                    <i><b>
                            <p>Giúp đỡ bạn <br> Khi gặp khó khăn</p>
                        </b></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Cuối trang website -->
    <div class="container-fluid bg-dark text-white" style="margin-top: 40px;">
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