<?php
ob_start();
session_start();
include('connect.php');
$username = "Đăng nhập";
$link_user = "login.php";
$quantity = 0;
if (isset($_SESSION["username"])) {
    $link_user = "index.php?act=user";
    $username = "Xin chào, " . $_SESSION["username"];
    $quantity = isset($_SESSION['quantity']) ? $_SESSION['quantity'] : 0;
}
?>


<link rel="stylesheet" href="../assets/css/header.css">
<link rel="stylesheet" href="../assets/fonts/fontawesome-free-6.6.0-web/css/all.min.css">

<header>
    <div class="grid">
        <nav class="nav-container">
            <label for="" class="menu-icon"><i class="fa-solid fa-bars"></i></label>
            <li><a href="index.php" class="logo nav-item">Laptop4U</a></li>
            <ul>
                <li class="search-container nav-item">
                    <div class="form-control">
                        <form action="index.php" method="GET">
                            <input type="hidden" name="act" value="products">
                            <input type="text" placeholder="Bạn tìm gì" class="search-input" name="word">
                            <button class="search" href=""><i class="fas fa-search icon"></i></button>
                        </form>
                    </div>
                </li>

                <li class="nav-item text-icon">
                    <a href="index.php?act=cart">
                        <i class="fa-solid fa-cart-shopping icon"></i>
                        <span class="quantity"><?php echo $quantity; ?></span>
                    </a>
                </li>
                
                <li class="nav-item text-icon">
                    <a href=<?php echo $link_user; ?>>
                        <i class="fa-solid fa-user icon"></i><?php echo $username; ?>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="sub-menu">
            <ul>
                <li class="menu-item"><input type="text" placeholder="Tìm kiếm sản phẩm"></li>
                <li class="menu-item"><a href="index.php">TRANG CHỦ</a></li>
                <li class="menu-item"><a href="index.php?act=cart">GIỎ HÀNG</a></li>
                <li class="menu-item"><a href=<?php echo $link_user; ?>><?php echo $username; ?></a></li>
            </ul>
        </div>
    </div>
</header>
<script>
    document.querySelector('.menu-icon').addEventListener('click', function() {
        document.querySelector('.sub-menu').classList.toggle('active');
    });
</script>