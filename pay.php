<?php
$trip = $_POST['trip'] ?? '';
$totalPrice = $_POST['totalPrice'] ?? 0;
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>صفحة الدفع - <?php echo $trip; ?></title>
  <style>
    body {
      font-family: 'Tahoma', sans-serif;
      background-color: color-mix(in srgb, #0ea8ac, transparent 92%);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100vh;
      margin: 0;
      padding: 40px 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 25px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
      margin: auto;
      text-align: center;
    }

    h1 {
      color: #2c3e50;
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      color: #555;
      font-size: 16px;
      margin-bottom: 10px;
    }

    .price {
      font-weight: bold;
      color: #27ae60;
      font-size: 18px;
      margin: 15px 0;
    }

    .payment-methods {
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
      margin: 20px 0;
    }

    .payment-method {
      background-color: #ffffff;
      color: #333;
      padding: 12px;
      font-size: 15px;
      border-radius: 8px;
      width: 100%;
      max-width: 120px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: box-shadow 0.3s ease;
    }

    .payment-method:hover {
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .payment-method img {
      width: 30px;
      height: auto;
      vertical-align: middle;
    }

    button {
      width: 100%;
      background-color: #1dc8cd;
      color: white;
      font-weight: bold;
      border: none;
      padding: 12px;
      font-size: 15px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #17b2b6;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>عملية الدفع </h1>
    <p>لقد اخترت الرحلة التالية:</p>
    <p><?php echo $trip; ?></p>
    <p class="price">السعر الإجمالي: <?php echo $totalPrice; ?> ريال</p>

    <p>اختر طريقة الدفع المفضلة لديك:</p>
    <div class="payment-methods">
      <div class="payment-method">
        <img src="assets/img/pay.png" alt="Apple Pay">
        <span>Apple Pay</span>
      </div>
      <div class="payment-method">
        <img src="assets/img/Tab.png" alt="Tamara">
        <span>تمارا</span>
      </div>
      <div class="payment-method">
        <img src="assets/img/Card.jpg" alt="Mada">
        <span>بطاقة</span>
      </div>
    </div>

    <form action="process_payment.php" method="POST">
      <input type="hidden" name="trip" value="<?php echo $trip; ?>">
      <input type="hidden" name="totalPrice" value="<?php echo $totalPrice; ?>">
      <button type="submit">إتمام الدفع</button>
    </form>
  </div>
</body>
</html>


