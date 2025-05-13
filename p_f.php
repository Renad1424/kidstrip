<?php
$tripKey = $_GET['trip'] ?? 'aquarium';

// بيانات الرحلات المتاحة لباقات العائلة
$familyTrips = [
  'aquarium' => [
    'title' => 'رحلة عائلية إلى الأكواريوم',
    'desc' => 'استمتعوا بمغامرة بحرية مذهلة بين أعماق البحار والكائنات البحرية.',
    'basicDetails' => ['التاريخ: 18 مايو', 'الوقت: 10 صباحًا - 3 مساءً', 'الفئة: عائلية', 'الرسوم: 500 ريال', 'الموقع: الأكواريوم الوطني', 'الجهة المنظمة: باقة عائلية'],
    'price' => 400,
  ],
  'shallal' => [
    'title' => 'رحلة عائلية إلى ملاهي الشلال',
    'desc' => 'أجواء مليئة بالمتعة والضحك لجميع أفراد الأسرة.',
    'basicDetails' => ['التاريخ: 22 مايو', 'الوقت: 9 صباحًا - 6 مساءً', 'الفئة: عائلية', 'الرسوم: 500 ريال', 'الموقع: ملاهي الشلال', 'الجهة المنظمة: باقة عائلية'],
    'price' => 400,
  ],
  'pottery' => [
    'title' => 'رحلة عائلية إلى ورشة الفخار',
    'desc' => 'تعلموا فنون الفخار معاً في جو من المرح والإبداع.',
    'basicDetails' => ['التاريخ: 25 مايو', 'الوقت: 11 صباحًا - 2 مساءً', 'الفئة: عائلية', 'الرسوم: 500 ريال', 'الموقع: ورشة الفخار', 'الجهة المنظمة: باقة عائلية'],
    'price' => 400,
  ],
  'zoo' => [
    'title' => 'رحلة عائلية إلى حديقة الحيوان',
    'desc' => 'جولة بين الحيوانات البرية والطيور النادرة في جو تعليمي وترفيهي.',
    'basicDetails' => ['التاريخ: 28 مايو', 'الوقت: 10 صباحًا - 4 مساءً', 'الفئة: عائلية', 'الرسوم: 500 ريال', 'الموقع: حديقة الحيوان', 'الجهة المنظمة: باقة عائلية'],
    'price' => 400,
  ],
  'kidzania' => [
    'title' => 'رحلة عائلية إلى كيدزانيا',
    'desc' => 'تجربة ترفيهية تعليمية للأطفال بلمسة عائلية.',
    'basicDetails' => ['التاريخ: 1 يونيو', 'الوقت: 11 صباحًا - 5 مساءً', 'الفئة: عائلية', 'الرسوم: 500 ريال', 'الموقع: كيدزانيا', 'الجهة المنظمة: باقة عائلية'],
    'price' => 400,
  ],
];

$trip = $familyTrips[$tripKey] ?? $familyTrips['aquarium'];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title><?php echo $trip['title']; ?></title>
  <style>
    body {
      font-family: 'Tahoma', sans-serif;
      background-color: color-mix(in srgb, #0ea8ac, transparent 92%);;
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
      border-radius: 6px;
      margin-bottom: 10px;
    }

    .total-price {
      font-size: 16px;
      font-weight: bold;
      color: #27ae60;
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
      background-color: #1097a0;
    }
  </style>
</head>
<body>

  <div class="card">
    <h1><?php echo $trip['title']; ?></h1>
    <p><?php echo $trip['desc']; ?></p>

    <form method="get" onchange="this.submit()">
      <label>اختر الرحلة:</label>
      <select name="trip">
        <option value="aquarium" <?php if($tripKey == 'aquarium') echo 'selected'; ?>>الأكواريوم</option>
        <option value="shallal" <?php if($tripKey == 'shallal') echo 'selected'; ?>>ملاهي الشلال</option>
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

    <div class="total-price">التكلفة الإجمالية: <span><?php echo $trip['price']; ?> ريال</span></div>

    <form action="pay.php" method="post">
      <input type="hidden" name="trip" value="<?php echo $tripKey; ?>">
      <input type="hidden" name="totalPrice" value="<?php echo $trip['price']; ?>">
      <button type="submit">تأكيد الحجز</button>
    </form>
  </div>

</body>
</html>
