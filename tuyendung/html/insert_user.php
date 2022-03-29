<?php

if (isset($_POST['user_ten']) && isset($_POST['user_email']) && isset($_POST['user_password']) && isset($_POST['user_phone']) && isset($_POST['user_namecongty']) && isset($_POST['user_nhanvien'])  && isset($_POST['user_soluot']) && isset($_POST['user_diachi']) && isset($_POST['user_thanhpho']) && isset($_POST['user_lienhe']) && isset($_POST['user_quocgia']) && isset($_POST['user_sodienthoai'])) {

    // CHECK IF FIELDS ARE NOT EMPTY

    if (!empty(trim($_POST['user_ten']))  && !empty(trim($_POST['user_email'])) && !empty(trim($_POST['user_password'])) && !empty($_POST['user_phone']) && !empty($_POST['user_namecongty']) && !empty($_POST['user_nhanvien']) && !empty($_POST['user_soluot']) && isset($_POST['user_diachi']) && !empty($_POST['user_thanhpho']) && !empty($_POST['user_lienhe']) && !empty($_POST['user_quocgia']) && isset($_POST['user_sodienthoai'])) {



        // Escape special characters.

        $user_ten = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_ten']));
        $user_email = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_email']));
        $user_password = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_password']));
        $user_phone = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_phone']));
        $user_namecongty = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_namecongty']));
        $user_nhanvien = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_nhanvien']));
        $user_soluot = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_soluot']));
        $user_diachi = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_diachi']));
        $user_thanhpho = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_thanhpho']));
        $user_lienhe = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_lienhe']));
        $user_quocgia = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_quocgia']));
        $user_sodienthoai = mysqli_real_escape_string($db_connection, htmlspecialchars($_POST['user_sodienthoai']));
        //IF EMAIL IS VALID
        if (filter_var($user_email, FILTER_VALIDATE_EMAIL)) {



            // CHECK IF EMAIL IS ALREADY REGISTERED

            $check_email = mysqli_query($db_connection, "SELECT `user_email` FROM `admin` WHERE user_email = '$user_email'");
            if (mysqli_num_rows($check_email) > 0) {
                $error_message = "Email này đã được đăng kí trước đây. Vui lòng thử cái khác.";
            } else {
                // IF EMAIL IS NOT REGISTERED
                /* -- 

ENCRYPT USER PASSWORD USING PHP password_hash function 
LEARN ABOUT PHP password_hash - http://php.net/manual/en/function.password-hash.php

-- */

                $user_hash_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

                // INSER USER INTO THE DATABASE

                $insert_user = mysqli_query($db_connection, "INSERT INTO `admin` (user_ten,user_email, user_password, user_phone,user_namecongty,user_nhanvien,user_soluot,user_diachi,user_thanhpho,user_lienhe,user_quocgia,user_sodienthoai) 
                                                          VALUES ('$user_ten', '$user_email', '$user_hash_password', '$user_phone','$user_namecongty','$user_nhanvien','$user_soluot','$user_diachi','$user_thanhpho','$user_lienhe','$user_quocgia','$user_sodienthoai')");

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