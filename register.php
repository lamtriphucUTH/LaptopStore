<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
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

        .signup-container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .signup-container h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .signup-container label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .signup-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .signup-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .signup-container button:hover {
            background-color: #45a049;
        }

        .signup-container .login-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .signup-container .login-link a {
            color: #4CAF50;
            text-decoration: none;
        }

        .signup-container .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Đăng Ký</h2>
        <form action="" method="POST">
            <label for="username">Tên đăng nhập</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mật khẩu</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Xác nhận mật khẩu</label>
            <input type="password" id="confirm-password" name="confirm_password" required>

            <button type="submit">Đăng Ký</button>
        </form>
        <div class="login-link">
            Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a>
        </div>
    </div>
</body>
</html>
