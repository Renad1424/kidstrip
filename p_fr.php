<?php
$tripKey = $_GET['trip'] ?? 'shallal';

$trips = [
  'shallal' => [
    'title' => 'باقة الأصدقاء: رحلة الشلال',
    'desc' => 'استمتع مع أصدقائك بيوم مليء بالمغامرة في ملاهي الشلال.',
    'basicDetails' => ['التاريخ: 20 يونيو', 'الوقت: 10 صباحًا - 5 مساءً', 'الفئة: للمراهقين', 'الرسوم: 120 ريال', 'الموقع: ملاهي الشلال', 'الجهة المنظمة: أصدقاء'],
    'price' => 350,
  ],
  'aquarium' => [
    'title' => 'باقة الأصدقاء: رحلة الأكواريوم',
    'desc' => 'استكشاف جماعي لعالم البحار الرائع.',
    'basicDetails' => ['التاريخ: 25 يونيو', 'الوقت: 11 صباحًا - 4 مساءً', 'الفئة: للمراهقين', 'الرسوم: 150 ريال', 'الموقع: الأكواريوم الوطني', 'الجهة المنظمة: أصدقاء'],
    'price' => 350,
  ],
  'pottery' => [
    'title' => 'باقة الأصدقاء: ورشة الفخار',
    'desc' => 'تعلم صناعة الفخار بروح الفريق.',
    'basicDetails' => ['التاريخ: 28 يونيو', 'الوقت: 9 صباحًا - 1 مساءً', 'الفئة: 12 سنة فما فوق', 'الرسوم: 100 ريال', 'الموقع: ورشة الفخار', 'الجهة المنظمة: أصدقاء'],
    'price' => 350,
  ],
  'zoo' => [
    'title' => 'باقة الأصدقاء: حديقة الحيوان',
    'desc' => 'اكتشفوا الحيوانات معًا في أجواء ممتعة.',
    'basicDetails' => ['التاريخ: 30 يونيو', 'الوقت: 10 صباحًا - 3 مساءً', 'الفئة: 10-15 سنة', 'الرسوم: 110 ريال', 'الموقع: حديقة الحيوان', 'الجهة المنظمة: أصدقاء'],
    'price' => 350,
  ],
  'kidzania' => [
    'title' => 'باقة الأصدقاء: كيدزانيا',
    'desc' => 'تجربة تعاونية في عالم كيدزانيا التفاعلي.',
    'basicDetails' => ['التاريخ: 5 يوليو', 'الوقت: 9 صباحًا - 2 مساءً', 'الفئة: 6-12 سنة', 'الرسوم: 130 ريال', 'الموقع: كيدزانيا', 'الجهة المنظمة: أصدقاء'],
    'price' => 350,
  ],
];

$trip = $trips[$tripKey] ?? $trips['shallal'];
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
      <label for="trip">اختر الرحلة:</label>
      <select id="trip" name="trip">
        <option value="shallal" <?php if($tripKey == 'shallal') echo 'selected'; ?>>رحلة الشلال</option>
        <option value="aquarium" <?php if($tripKey == 'aquarium') echo 'selected'; ?>>رحلة الأكواريوم</option>
        <option value="pottery" <?php if($tripKey == 'pottery') echo 'selected'; ?>>ورشة الفخار</option>
        <option value="zoo" <?php if($tripKey == 'zoo') echo 'selected'; ?>>حديقة الحيوان</option>
        <option value="kidzania" <?php if($tripKey == 'kidzania') echo 'selected'; ?>>كيدزانيا</option>
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
