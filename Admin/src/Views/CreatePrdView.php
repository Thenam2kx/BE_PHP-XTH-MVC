<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tạo Sản Phẩm Mới</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input,
    textarea,
    select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    textarea {
      resize: vertical;
    }

    .error {
      color: red;
      font-size: 0.875em;
      display: none;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="container">
    <h2>Tạo Sản Phẩm Mới</h2>
    <form id="productForm" method="post">
      <div class="form-group">
        <label for="productName">Tên sản phẩm:</label>
        <input type="text" id="productName" name="productName" required>
        <span class="error" id="productNameError"></span>
      </div>
      <div class="form-group">
        <label for="productCategory">Danh mục sản phẩm:</label>
        <select id="productCategory" name="productCategory" required>
          <option value="">Chọn danh mục</option>
          <?php
            foreach ($categorys as $category) { ?>
              <option value="<?= $category['CategoryID'] ?>"><?= $category['CategoryName'] ?></option>
            <?php
            }
          ?>
        </select>
        <span class="error" id="productCategoryError"></span>
      </div>
      <div class="form-group">
        <label for="productPrice">Giá sản phẩm:</label>
        <input type="text" id="productPrice" name="productPrice" required>
        <span class="error" id="productPriceError"></span>
      </div>
      <div class="form-group">
        <label for="productDescription">Mô tả sản phẩm:</label>
        <textarea id="productDescription" name="productDescription" required></textarea>
        <span class="error" id="productDescriptionError"></span>
      </div>
      <button type="submit" name="CreatePrd">Tạo Sản Phẩm</button>
    </form>
  </div>
  <script>
    document.getElementById('productForm').addEventListener('submit', function(event) {
      // event.preventDefault();

      // Clear previous error messages
      const errors = document.querySelectorAll('.error');
      errors.forEach(error => error.style.display = 'none');

      let hasError = false;

      // Validate product name (at least 3 characters)
      const productName = document.getElementById('productName').value;
      if (productName.length < 3) {
        document.getElementById('productNameError').textContent = 'Tên sản phẩm phải có ít nhất 3 ký tự.';
        document.getElementById('productNameError').style.display = 'block';
        hasError = true;
      }

      // Validate product category (not empty)
      const productCategory = document.getElementById('productCategory').value;
      if (productCategory === "") {
        document.getElementById('productCategoryError').textContent = 'Vui lòng chọn danh mục sản phẩm.';
        document.getElementById('productCategoryError').style.display = 'block';
        hasError = true;
      }

      // Validate product price (positive number)
      const productPrice = document.getElementById('productPrice').value;
      const pricePattern = /^\d+(\.\d{1,2})?$/;
      if (!pricePattern.test(productPrice) || parseFloat(productPrice) <= 0) {
        document.getElementById('productPriceError').textContent = 'Giá sản phẩm phải là số dương và có thể có tối đa 2 chữ số thập phân.';
        document.getElementById('productPriceError').style.display = 'block';
        hasError = true;
      }
      // Validate product description (at least 10 characters)
      const productDescription = document.getElementById('productDescription').value;
      if (productDescription.length < 10) {
        document.getElementById('productDescriptionError').textContent = 'Mô tả sản phẩm phải có ít nhất 10 ký tự.';
        document.getElementById('productDescriptionError').style.display = 'block';
        hasError = true;
      }
      // If no errors, submit the form (you can add your form submission logic here)
      if (!hasError) {
        console.log('Sản phẩm được tạo thành công!');
        //form.submit(); // Uncomment this to submit the form
      }
    });
  </script>
</body>

</html>