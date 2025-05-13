
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>تسجيل الدخول / حساب جديد</title>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
  <style>
  body {
    font-family: 'Cairo', sans-serif;
    background: linear-gradient(135deg, #1dc8cd, #48d7c7);
    height: 100vh;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container {
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    width: 100%;
    max-width: 400px;
    margin: 60px auto 0;  /* تعديل المسافة العلوية للكارد */
  }

  .tabs {
    display: flex;
    justify-content: space-around;
    margin-bottom: 10px;
  }

  .tabs button {
    background: none;
    border: none;
    font-size: 18px;
    font-weight: bold;
    cursor: pointer;
    padding: 8px 15px;
    color: #636e72;
    transition: color 0.3s;
  }

  .tabs button.active {
    color: #1dc8cd;
    border-bottom: 2px solid #1dc8cd;  /* الخط تحت الزر سيكون مستقيم */
  }

  form {
    display: none;
    flex-direction: column;
    margin-bottom: 10px;
  }

  form.active {
    display: flex;
  }

  input,
  select,
  button {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 16px;
  }

  .btn {
    background-color: #1dc8cd;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s;
  }

  .btn:hover {
    background-color: #16a8a6;
  }
</style>




</head>
<body>

<div class="container">
  <div class="tabs">
    <button class="tab-btn active" onclick="showForm('login')">تسجيل الدخول</button>
    <button class="tab-btn" onclick="showForm('register')">تسجيل جديد</button>
  </div>

  <!-- نموذج تسجيل الدخول -->
  <form id="login-form" class="active" method="POST" action="login.php">
    <input type="email" placeholder="البريد الإلكتروني" required>
    <input type="password" placeholder="كلمة المرور" required>
    <button class="btn" type="submit" onclick="window.location.href='index.php'; return false;">تسجيل الدخول</button>

    </form>

  <!-- نموذج التسجيل الجديد -->
  <form id="register-form" method="POST" action="register.php">
  <input type="text" name="fullname" placeholder="الاسم الكامل" required>
  <input type="email" name="email" placeholder="البريد الإلكتروني" required>
  <input type="tel" name="phone" placeholder="رقم الجوال" required>
  <input type="text" name="location" placeholder="الموقع (المدينة)" required>

  <select name="gender" required>
    <option value="">اختر الجنس</option>
    <option value="ذكر">ذكر</option>
    <option value="أنثى">أنثى</option>
  </select>

  <input type="password" name="password" placeholder="كلمة المرور" required>
  <input type="password" name="confirm_password" placeholder="تأكيد كلمة المرور" required>

  <button class="btn" type="submit">إنشاء حساب</button>
</form>

</div>

<script>
  function showForm(formType) {
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');
    const buttons = document.querySelectorAll('.tab-btn');

    if (formType === 'login') {
      loginForm.classList.add('active');
      registerForm.classList.remove('active');
      buttons[0].classList.add('active');
      buttons[1].classList.remove('active');
    } else {
      registerForm.classList.add('active');
      loginForm.classList.remove('active');
      buttons[1].classList.add('active');
      buttons[0].classList.remove('active');
    }
  }
</script>

</body>
</html>




