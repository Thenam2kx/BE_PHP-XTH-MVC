<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh Sách Sản Phẩm</title>
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 90%;
      max-width: 1200px;
      margin: 20px auto;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .table-responsive {
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: #f4f4f4;
    }

    td.product-name {
      max-width: 250px;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    td.actions {
      width: 100px;
      text-align: center;
    }

    button {
      padding: 6px 12px;
      margin: 0 2px;
      cursor: pointer;
      border: none;
      border-radius: 4px;
    }

    button.update {
      background-color: #4CAF50;
      color: white;
    }

    button.delete {
      background-color: #f44336;
      color: white;
    }

    a {
      text-decoration: none;
      color: unset;
    }

    .tooltip {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 200px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -100px;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }

    @media (max-width: 768px) {

      td,
      th {
        padding: 8px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Admin - Danh Sách Sản Phẩm</h2>
    <div class="table-responsive">
      <table id="productTable">
        <thead>
          <tr>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Danh mục</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Thương hiệu</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($products as $product) {
              ?>
              <tr>
                <td><?= $product['ProductID'] ?></td>
                <td class="product-name">
                  <div class="tooltip"><?= $product['ProductName'] ?>
                    <span class="tooltiptext"><?= $product['ProductName'] ?></span>
                  </div>
                </td>
                <td><?= $product['CategoryID'] ?></td>
                <td><?= number_format($product['UnitPrice'], 0, ',', '.').' <sup>đ</sup>' ?></td>
                <td><?= $product['Description'] ?></td>
                <td><?= $product['CreateAt'] ?></td>
                <td class="actions">
                  <form action="" method="post">
                    <button class="update"><a href="?action=Updateview&id=<?= $product['ProductID'] ?>">Cập Nhật</a></button>
                    <button class="delete"><a href="?action=DeletePrd&id=<?= $product['ProductID'] ?>">Xoa</a></button>
                  </form>
                </td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <div style="display: flex; align-items: center; justify-content:center; margin-top:40px;">
    <button  class="update"><a href="?action=CreatePrdView">Add new Product</a></button>
  </div>
  
</body>

</html>