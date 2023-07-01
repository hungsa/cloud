<?php
session_start();

// Khởi tạo biến
$username = "";
$email = "";
$errors = array();

// Kết nối tới cơ sở dữ liệu
$db = mysqli_connect('localhost', 'root', '', 'cloud');

// Đăng ký người dùng
if (isset($_POST['reg_user'])) {
    // Nhận giá trị từ form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Kiểm tra tính hợp lệ của form
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // Kiểm tra xem người dùng đã tồn tại trong cơ sở dữ liệu hay chưa
    $user_check_query = "SELECT * FROM dangky WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // Nếu người dùng tồn tại
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Cuối cùng, đăng ký người dùng nếu không có lỗi trong form
    if (count($errors) == 0) {
        // Thay đổi cấu trúc bảng để đặt ID tự động tăng
        mysqli_query($db, "ALTER TABLE dangky MODIFY COLUMN id INT(11) UNSIGNED AUTO_INCREMENT");

        $password = md5($password_1); // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu

        $query = "INSERT INTO dangky (username, email, password) 
              VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: HomePage.php');
        exit();
    }
}

// Đăng nhập người dùng
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM dangky WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: HomePage.php');
            exit();
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}
?>
