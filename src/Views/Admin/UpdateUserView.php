<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form update user</title>
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
    <h2>Update User</h2>
    <form action="?controller=admin&action=UpdateUser&id=<?= $infoUser['UserID'] ?>" id="productForm" method="post" enctype='multipart/form-data'>
      <div class="form-group">
        <label for="userName">Tên người dùng:</label>
        <input type="text" id="userName" name="userName" value="<?= $infoUser['FullName'] ?>" required>
        <span class="error" id="userNameError"></span>
      </div>
      <div class="form-group">
        <label for="userRole">Role:</label>
        <select id="userRole" name="userRole" required>
          <option value="">Chọn role</option>
          <?php
            foreach ($roles as $role) { ?>
              <option <?php if ($infoUser['UserID'] === $role['RoleID']) { echo 'selected'; } ?> value="<?= $role['RoleID'] ?>"><?= $role['RoleName'] ?></option>
            <?php
            }
          ?>
        </select>
        <span class="error" id="productCategoryError"></span>
      </div>

      <div class="form-group">
        <label for="userRole">Giới tính:</label>
        <select id="userRole" name="userGender" required>
          <option value="0">Chọn Giới tính</option>
          <option value="0">Nam</option>
          <option value="1">Nữ</option>
        </select>
        <span class="error" id="productCategoryError"></span>
      </div>

      <div class="form-group">
        <label for="userEmail">Email:</label>
        <input type="text" id="userEmail" name="userEmail" value="<?= $infoUser['Email'] ?>" required>
        <span class="error" id="userEmailError"></span>
      </div>
      <div class="form-group">
        <label for="userPhone">Số điện thoại:</label>
        <input type="text" id="userPhone" name="userPhone" value="<?= $infoUser['Phone'] ?>" required>
        <span class="error" id="userPhoneError"></span>
      </div>
      <div class="form-group">
        <label for="userPass">Mật khẩu:</label>
        <input type="text" id="userPass" name="userPass" value="<?= $infoUser['Password'] ?>" required>
        <span class="error" id="userPassError"></span>
      </div>

      <button type="submit" name="UpdateUser">Update info</button>
    </form>
  </div>

</body>

</html>