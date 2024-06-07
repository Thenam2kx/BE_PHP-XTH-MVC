<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link rel="stylesheet" href="./assets/css/DetaiPrdView.css">
</head>
<body>

<div class="product-detail">
    <img src="<?= './admin'.$product['Thumbnail'] ?>" alt="Sản phẩm" class="product-image">
    <div class="product-info">
        <div class="product-name"><?= $product['ProductName'] ?></div>
        <div class="price-container">
            <span class="product-price"><?= number_format($product['UnitPrice'], 0, ',', '.') . ' VND' ?></span>
            <span class="product-discount"><?= number_format($product['UnitPrice'], 0, ',', '.') . ' VND' ?></span>
        </div>
        <p class="product-description"><?= $product['Description'] ?></p>
        <a href="?" class="buy-button">Mua ngay</a>
    </div>
</div>

</body>
</html>
