<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Đăng Nhập</title>
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
      width: 300px;
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

    input {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
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
    <h2>Form Đăng Nhập</h2>
    <form id="loginForm" method="post">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <span class="error" id="emailError"></span>
      </div>
      <div class="form-group">
        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required>
        <span class="error" id="passwordError"></span>
      </div>
      <button type="submit" name="Login">Đăng Nhập</button>
    </form>
  </div>
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      // event.preventDefault();

      // Clear previous error messages
      const errors = document.querySelectorAll('.error');
      errors.forEach(error => error.style.display = 'none');

      let hasError = false;

      // Validate email
      const email = document.getElementById('email').value;
      const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Email không hợp lệ.';
        document.getElementById('emailError').style.display = 'block';
        hasError = true;
      }

      // Validate password (at least 6 characters)
      const password = document.getElementById('password').value;
      if (password.length < 6) {
        document.getElementById('passwordError').textContent = 'Mật khẩu phải có ít nhất 6 ký tự.';
        document.getElementById('passwordError').style.display = 'block';
        hasError = true;
      }

      // If no errors, proceed with form submission (you can add your form submission logic here)
      if (!hasError) {
        alert('Đăng nhập thành công!');
        // form.submit(); // Uncomment this to submit the form
      }
    });
  </script>
</body>

</html>