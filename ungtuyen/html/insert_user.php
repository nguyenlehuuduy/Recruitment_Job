<?php

if (isset($_POST['user_ten']) && isset($_POST['user_ho']) && isset($_POST['user_email']) && isset($_POST['user_password']) && isset($_POST['user_phone']) && isset($_POST['gender'])  && isset($_POST['city']) && isset($_POST['check_html'])) {


    if (!empty(trim($_POST['user_ten']))  && !empty(trim($_POST['user_ho'])) && !empty(trim($_POST['user_email'])) && !empty($_POST['user_password']) && !empty($_POST['user_phone']) && !empty($_POST['gender']) && !empty($_POST['city']) && isset($_POST['check_html'])) {




        $user_ten = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ten']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
        $user_password = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_password']));
        $user_ho = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ho']));
        $user_phone = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_phone']));
        $gender = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['gender']));
        $city = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['city']));
        $check_html = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['check_html']));
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {




            $check_email = mysqli_query($db_connection, "SELECT `user_email` FROM `users` WHERE user_email = '$user_email'");
            if (mysqli_num_rows($check_email) > 0) {
                $error_message = "Email này đã được đăng kí trước đây. Vui lòng thử cái khác.";
            } else {

                $user_hash_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

                // INSER USER INTO THE DATABASE

                $insert_user = mysqli_query($db_connection, "INSERT INTO `users` (user_ten,user_ho, user_email, user_password,user_phone,gender,city,check_html) VALUES ('$user_ten', '$user_ho', '$user_email', '$user_hash_password','$user_phone','$gender','$city','$check_html')");

                if ($insert_user === TRUE) {
                    $success_message = "Cảm ơn! Bạn đã đăng ký thành công.";
                } else {
                    $error_message = "Giáo sư! Có gì đó không đúng.";
                }
            }
        } else {
            // IF EMAIL IS INVALID
            $error_message = "Địa chỉ email không hợp lệ";
        }
    } else {
        // IF FIELDS ARE EMPTY

        $error_message = "Xin vui lòng điền đầy đủ vào những ô trống cần thiết.";
    }
}
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
} else {
    $gender = false;
}
if (isset($_POST["city"])) {
    $select = $_POST["city"];
}
if (isset($_POST["check_html"])) {
    $check_html = $_POST["check_html"];
}

// Xử Lý Upload

// Nếu người dùng click Upload
