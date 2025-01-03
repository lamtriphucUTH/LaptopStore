  <link rel="stylesheet" href="assets/css/header.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.6.0-web/css/all.min.css">
  <script src="assets/js/jquery-3.7.1.min.js"></script>

  <?php
  include('includes/header.php');
  ?>

  <div class="main">
    <?php
    switch ($_GET['act'] ?? '') {

      case 'products':
        include('products.php');
        break;
      case 'product_detail':
        include('product_detail.php');
        break;
      case 'user':
        include('user.php');
        break;
      case 'cart':
        include('cart.php');
        break;
      case 'checkout':
        include('checkout.php');
        break;
      case 'success':
        include('success.php');
        break;
      case 'login':
        include('login.php');
        break;
      case 'order':
        include('order.php');
        break;
      case 'order_detail':
        include('order_detail.php');
        break;
      case 'cancel':
        include('cancel.php');
        break;
      case 'change_pass':
        include('change_pass.php');
        break;
      default:
        include('home.php');
    }
    ?>
  </div>

  <?php
  include('includes/footer.php');
  ?>