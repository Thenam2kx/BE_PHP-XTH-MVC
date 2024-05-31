<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .product-detail {
            width: 900px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        .product-image {
            max-width: 50%;
            border-radius: 10px;
        }
        .product-info {
            max-width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .product-name {
            font-size: 2em;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }
        .product-price {
            font-size: 1.5em;
            color: #999;
            text-decoration: line-through;
        }
        .product-discount {
            font-size: 1.8em;
            color: #e74c3c;
            margin-left: 10px;
        }
        .price-container {
            margin-top: 10px;
            margin-bottom: 20px;
        }
        .product-description {
            margin-top: 20px;
            font-size: 1.1em;
            line-height: 1.6;
            color: #666;
        }
        .buy-button {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 30px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
            transition: background-color 0.2s ease;
            text-align: center;
        }
        .buy-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="product-detail">
    <img src="https://picsum.photos/500/300" alt="Sản phẩm" class="product-image">
    <div class="product-info">
        <div class="product-name"><?= $product['ProductName'] ?></div>
        <div class="price-container">
            <span class="product-price"><?= $product['UnitPrice'] ?></span>
            <span class="product-discount"><?= $product['UnitPrice'] ?></span>
        </div>
        <p class="product-description"><?= $product['Description'] ?></p>
        <a href="#" class="buy-button">Mua ngay</a>
    </div>
</div>

</body>
</html>
