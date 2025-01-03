<?php
ob_start();
session_start();
include_once("../includes/connect.php");

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (isset($username) && isset($password)) {
        $sql = "SELECT * FROM users where username='$username' AND pass='$password'";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        if ($row > 0) {
            $user = mysqli_fetch_assoc($query);
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["role"] = $user["role"];
            if ($user["role"] == "1") {
                header('location: dashboard.php');
            } else {
                header('location: ../index.php');
            }
            exit;
        } else {
            $message = "Tài khoản không tồn tại";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-container h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .login-container label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .login-container input {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Đăng Nhập Trang Quản Trị</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="username">Tên đăng nhập</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="submit">Đăng Nhập</button>

            <?php
            if (isset($message) && $message != '') {
                echo "<div style='color: red; text-align: center; margin-top:10px'>" . $message . "</div>";
            }
            ?>

        </form>
    </div>
</body>

</html>