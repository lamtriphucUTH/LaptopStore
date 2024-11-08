<?php
include("includes/connect.php");

if (isset($_POST['buy'])) {
    $laptop_id = $_POST['laptop_id'];

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $sql_user = "SELECT * FROM users where user_id = $user_id";
        $result = mysqli_query($conn, $sql_user);
        $user = mysqli_fetch_array($result);
    } else {
        $user = [
            'full_name' => '',
            'email' => '',
            'phone_number' => '',
            'address' => ''
        ];
    }

    $sql_laptop =
        "SELECT laptops.laptop_id, laptops.price, laptops.description, MAX(laptop_images.image_url) AS image_url
        FROM laptops
        LEFT JOIN laptop_images ON laptops.laptop_id = laptop_images.laptop_id
        WHERE laptops.laptop_id = $laptop_id";

    $result_laptop = mysqli_query($conn, $sql_laptop);
    $product = mysqli_fetch_array($result_laptop);
}
?>

<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/checkout.css">

<div class="main">
    <div class="chekout-container">
        <div class="content-box">
            <form action="" method="POST" name="info">
                <h2>Thông tin người nhận</h2>
                <h3>Họ tên người nhận</h3>
                <input class="checkout-input" type="text" value="<?php echo $user['full_name'] ?>">
                <h3>Email</h3>
                <input class="checkout-input" type="email" value="<?php echo $user['email'] ?>">
                <h3>Số điện thoại</h3>
                <input class="checkout-input" type="text" value="<?php echo $user['phone_number'] ?>">
                <h3>Địa chỉ</h3>
                <input class="checkout-input" type="text" value="<?php echo $user['address'] ?>">
            </form>
            <!-- <div class="payment-type">
                <h3>Phương thức thanh toán: </h3>
                <input type="radio" id="payment1" name="payment" value="Tiền mặt">
                <label for="payment1">Tiền măt</label>
                <input type="radio" id="payment2" name="payment">
                <label for="payment2">QR</label>
            </div> -->
        </div>
        <div class="content-box">
            <h2>Sản phảm đặt hàng</h2>
            <table>
                <thead>
                    <th>Sản phẩm</th>
                    <th>Số lương</th>
                    <th>Giá</th>
                </thead>
                <tbody>
                    <td class="product-content">
                        <img src="<?php echo $product['image_url'] ?>" alt="<?php echo $product['description'] ?>">
                        <h3 class="text-clamp"><?php echo $product['description'] ?></h3>
                    </td>
                    <td><input type="number" value="1"></td>
                    <td><?php echo number_format($product['price'], 0, ',', '.'); ?>đ</td>
                </tbody>
            </table>
            <div class="confirm">
                <h2 class="total-price">Tổng tiền: <?php echo number_format($product['price'], 0, ',', '.'); ?>đ</h2>
                <button class="btn" name="buy">Đặt hàng</button>
            </div>
        </div>
    </div>
</div>