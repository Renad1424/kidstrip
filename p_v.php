<?php
$tripKey = $_GET['trip'] ?? 'summer';

$trips = [
  'summer' => [
    'title' => 'برنامج اليومين: المخيم الصيفي',
    'desc' => 'استمتع بتجربة صيفية مميزة في مخيم مليء بالأنشطة والتحديات لمدة يومين.',
    'basicDetails' =>  ['التاريخ: 1 يوليو - 2 يوليو', 'الوقت: 9 صباحًا - 5 مساءً', 'الفئة: 8-14 سنة', 'الرسوم: 400 ريال', 'الموقع: مخيم الشباب الوطني', 'الجهة المنظمة: برامج موسمية'],
    'price' => 300,
  ],
  'winter' => [
    'title' => 'برنامج اليومين: البرنامج الشتوي',
    'desc' => 'أجواء دافئة وفعاليات شتوية ممتعة على مدار يومين.',
    'basicDetails' => ['التاريخ: 10 يناير - 11 يناير', 'الوقت: 10 صباحًا - 4 مساءً', 'الفئة: 6-12 سنة', 'الرسوم: 350 ريال', 'الموقع: مركز الفعاليات الشتوية', 'الجهة المنظمة: برامج موسمية'],
    'price' => 300,
  ],
];

$trip = $trips[$tripKey] ?? $trips['summer'];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title><?php echo $trip['title']; ?></title>
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
    }

    .card h1 {
      text-align: center;
      color: #2c3e50;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .card p {
      text-align: center;
      color: #555;
      font-size: 16px;
      margin-bottom: 20px;
    }

    ul {
      padding: 0;
      margin-bottom: 15px;
    }

    ul li {
      background-color: #f1f1f1;
      padding: 8px 12px;
      border-radius: 6px;
      margin-bottom: 6px;
      font-size: 14px;
      color: #333;
      border-right: 5px solid #1dc8cd;
      list-style: none;
    }

    label {
      font-weight: bold;
      margin-bottom: 5px;
      display: block;
      color: #2c3e50;
    }

    select {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
    }

    .price {
      font-size: 16px;
      font-weight: bold;
      color: #27ae60;
      text-align: center;
      margin-bottom: 15px;
    }

    button {
      width: 100%;
      background-color: #1dc8cd;
      color: white;
      border: none;
      padding: 12px;
      font-size: 15px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: rgb(16, 123, 127);
    }
  </style>
</head>
<body>

  <div class="card">
    <h1><?php echo $trip['title']; ?></h1>
    <p><?php echo $trip['desc']; ?></p>

    <form method="GET" onchange="this.submit()">
      <label for="trip">اختر البرنامج:</label>
      <select id="trip" name="trip">
        <option value="summer" <?php if($tripKey == 'summer') echo 'selected'; ?>>المخيم الصيفي</option>
        <option value="winter" <?php if($tripKey == 'winter') echo 'selected'; ?>>البرنامج الشتوي</option>
      </select>
    </form>

    <ul>
      <?php foreach ($trip['basicDetails'] as $detail): ?>
        <li><?php echo $detail; ?></li>
      <?php endforeach; ?>
    </ul>

    <div class="price">السعر: <?php echo $trip['price']; ?> ريال</div>

    <form action="pay.php" method="post">
      <input type="hidden" name="trip" value="<?php echo $tripKey; ?>">
      <input type="hidden" name="totalPrice" value="<?php echo $trip['price']; ?>">
      <button type="submit">تأكيد الحجز</button>
    </form>
  </div>

</body>
</html>

