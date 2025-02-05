<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    body {
      background: linear-gradient(135deg, #444b8e 0%, #2a9b8f 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      font-family: 'Poppins', sans-serif;
      padding: 20px;
    }

    .container {
      max-width: 450px;
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    h2 {
      color: #444b8e;
      font-weight: 600;
      margin-bottom: 30px;
      text-align: center;
      font-size: 2.2rem;
    }

    .form-group {
      margin-bottom: 25px;
    }

    label {
      color: #555;
      font-weight: 500;
      margin-bottom: 8px;
    }

    .form-control {
      background-color: #f8f9fa;
      border: 2px solid #e9ecef;
      border-radius: 10px;
      padding: 12px 15px;
      height: auto;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: #2a9b8f;
      box-shadow: 0 0 0 0.2rem rgba(42, 155, 143, 0.25);
    }

    .btn-success {
      background-color: #2a9b8f;
      border: none;
      padding: 12px 30px;
      border-radius: 10px;
      font-weight: 500;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      transition: all 0.3s ease;
      width: 100%;
      margin-top: 10px;
    }

    .btn-success:hover {
      background-color: #248277;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(42, 155, 143, 0.3);
    }

    .text-center {
      margin-top: 25px;
      color: #666;
    }

    .text-center a {
      color: #2a9b8f;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .text-center a:hover {
      color: #444b8e;
      text-decoration: none;
    }

    /* Custom animation for form appearance */
    @keyframes slideUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .container {
      animation: slideUp 0.5s ease-out;
    }

    /* Custom styling for autofill */
    input:-webkit-autofill {
      -webkit-box-shadow: 0 0 0 30px #f8f9fa inset;
    }

    /* Responsive adjustments */
    @media (max-width: 576px) {
      .container {
        padding: 20px;
      }

      h2 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h2>เข้าสู่ระบบ</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="username">ชื่อผู้ใช้</label>
      <input type="text" class="form-control" id="username" placeholder="กรุณากรอกชื่อผู้ใช้" name="username" required>
    </div>
    <div class="form-group">
      <label for="loginpassword">รหัสผ่าน</label>
      <input type="password" class="form-control" id="loginpassword" placeholder="กรุณากรอกรหัสผ่าน" name="loginpassword" required>
    </div>
    <button type="submit" class="btn btn-success" name="login" id="login">เข้าสู่ระบบ</button>
  </form>
  <div class="text-center">
    ยังไม่มีบัญชี? <a href="signup.php">สมัครสมาชิก</a>
  </div>
</div>

</body>
</html>