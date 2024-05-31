<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      width: 100%;
    }

    .container {
      width: 1280px;
      height: 100%;
      margin: 0 auto;
    }

    .header {
      width: 100%;
      height: 80px;
      background-color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .header>.logo>a {
      text-decoration: none;
      color: unset;
      font-size: 24px;
      font-weight: bold;
    }

    .search--form>input {
      padding: 4px;
      outline: none;
    }

    .search--form>input:nth-child(1) {
      width: 500px;
    }

    .search--form>input:nth-child(2) {
      background-color: #95a5a6;
      cursor: pointer;
    }

    .cart {
      display: flex;
      align-items: center;
    }

    .cart>i {
      font-size: 28px;
    }

    .cart>span {
      font-size: 20px;
      display: block;
      padding: 2px 6px;
      color: white;
      background-color: #e74c3c;
      border-radius: 50%;
    }



    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
    }

    .logo img {
      max-width: 150px;
    }

    .search-bar {
      flex-grow: 1;
      margin: 0 20px;
      display: flex;
      align-items: center;
    }

    .search-bar input[type="text"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 5px 0 0 5px;
      outline: none;
      font-size: 16px;
    }

    .search-bar button {
      padding: 12px;
      border: none;
      background-color: #333;
      color: white;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      font-size: 14px;
    }

    .search-bar button:hover {
      background-color: #555;
    }

    .cart-icon {
      position: relative;
    }

    .cart-icon img {
      width: 30px;
      height: 30px;
    }

    .cart-icon .cart-count {
      position: absolute;
      top: -10px;
      right: -10px;
      background-color: red;
      color: white;
      border-radius: 50%;
      padding: 5px 10px;
      font-size: 12px;
    }





    .main {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
      gap: 10px;
      margin-top: 20px;
    }

    .product-card {
      width: 100%;
      border: 1px solid #ddd;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .product-card img {
      width: 100%;
      height: 250px;
      transition: transform 0.2s ease;
    }

    .product-card:hover img {
      transform: scale(1.05);
    }

    .product-details {
      padding: 20px;
      text-align: center;
    }

    .product-name {
      font-size: 1.5em;
      margin: 10px 0;
      color: #333;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .product-price {
      font-size: 1em;
      color: #999;
      text-decoration: line-through;
      display: block;
    }

    .product-discount {
      font-size: 1.5em;
      color: #e74c3c;
      margin-left: 10px;
    }

    .buy-button {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1em;
      transition: background-color 0.2s ease;
    }

    .buy-button:hover {
      background-color: #45a049;
    }
  </style>
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
              <span class="product-price"><?= $product['UnitPrice'] ?></span>
              <span class="product-discount"><?= $product['UnitPrice'] ?></span>
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