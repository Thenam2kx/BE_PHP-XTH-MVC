<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./public/css/HomeView.css">
</head>

<body>
  <div class="container">

    <header class="header">
      <div class="logo">
        <img src="https://picsum.photos/60/35" alt="Logo">
      </div>
      <div class="search-bar">
        <input type="text" placeholder="Tìm kiếm sản phẩm...">
        <button type="submit">Search</button>
      </div>
      <div class="cart-icon">
        <img src="https://picsum.photos/35/35" alt="Giỏ hàng">
        <div class="cart-count">3</div>
      </div>
    </header>

    <main class="main">
      <?php
      foreach ($products as $product) { ?>
        <div class="product-card">
          <img src="https://picsum.photos/200/300" alt="Sản phẩm">
          <div class="product-details">
            <div class="product-name"><?= $product['ProductName'] ?></div>
            <div>
              <span class="product-price"><?= number_format($product['UnitPrice'], 0, ',', '.') . ' VND' ?></span>
              <span class="product-discount"><?= number_format($product['UnitPrice'], 0, ',', '.') . ' VND' ?></span>
            </div>
            <a href="?action=DetailPrd&id=<?= $product['ProductID'] ?>" class="buy-button">Mua ngay</a>
          </div>
        </div>
      <?php }
      ?>
    </main>
  </div>
</body>

</html>