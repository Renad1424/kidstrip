<?php
$tripKey = $_GET['trip'] ?? 'museum';

// بيانات جميع الرحلات
$trips = [
  'museum' => [
    'title' => 'رحلة إلى المتحف',
    'desc' => 'اكتشف التاريخ والثقافة في رحلتنا إلى المتحف الوطني.',
    'basicDetails' =>  ['التاريخ: 12 مايو', 'الوقت: 9 صباحًا - 2 مساءً', 'الفئة: للأفراد', 'الرسوم: 100 ريال', 'الموقع: المتحف الوطني', 'الجهة المنظمة: فردية'],
    'price' => 100,
  ],
  'zoo' => [
    'title' => 'رحلة إلى حديقة الحيوان',
    'desc' => 'تجربة ممتعة بين الحيوانات البرية والمفترسة واللطيفة.',
    'basicDetails' => ['التاريخ: 15 مايو', 'الوقت: 10 صباحًا - 4 مساءً', 'الفئة: للأفراد', 'الرسوم: 100 ريال', 'الموقع: حديقة الحيوان بالرياض', 'الجهة المنظمة: فردية'],
    'price' => 100,
  ],
  'aquarium' => [
    'title' => 'رحلة إلى الأكواريوم',
    'desc' => 'استمتع بمشاهدة عالم البحار والكائنات البحرية النادرة.',
    'basicDetails' => ['التاريخ: 20 مايو', 'الوقت: 11 صباحًا - 3 مساءً', 'الفئة: للأفراد', 'الرسوم: 200 ريال', 'الموقع: الأكواريوم الوطني', 'الجهة المنظمة: فردية'],
    'price' => 200,
  ],
  'shallal' => [
    'title' => 'رحلة إلى ملاهي الشلال',
    'desc' => 'أجواء مليئة بالتشويق في ملاهي الشلال الترفيهية.',
    'basicDetails' => ['التاريخ: 25 مايو', 'الوقت: 9 صباحًا - 6 مساءً', 'الفئة: للأفراد', 'الرسوم: 100 ريال', 'الموقع: مدينة ألعاب الشلال', 'الجهة المنظمة: فردية'],
    'price' => 100,
  ],
  'kidzania' => [
    'title' => 'رحلة إلى كيدزانيا',
    'desc' => 'تعليم بالترفيه في مدينة كيدزانيا للأطفال.',
    'basicDetails' => ['التاريخ: 30 مايو', 'الوقت: 10 صباحًا - 4 مساءً', 'الفئة: للأفراد', 'الرسوم: 200 ريال', 'الموقع: كيدزانيا', 'الجهة المنظمة: فردية'],
    'price' => 200,
  ],
  'pottery' => [
    'title' => 'رحلة إلى ورشة الفخار',
    'desc' => 'تعلم فن تشكيل الطين وصنع الفخار في ورشة ممتعة.',
    'basicDetails' => ['التاريخ: 5 يونيو', 'الوقت: 10 صباحًا - 1 مساءً', 'الفئة: للأفراد', 'الرسوم: 100 ريال', 'الموقع: ورشة الفخار', 'الجهة المنظمة: فردية'],
    'price' => 100,
  ],
];

$trip = $trips[$tripKey] ?? $trips['museum'];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title><?php echo $trip['title']; ?></title>
  <style>
    /* نفس التنسيقات الموجودة لديك */
    body {
  font-family: 'Tahoma', sans-serif;
  background-color: color-mix(in srgb, #0ea8ac, transparent 92%);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
  height: 100vh; /* بدل min-height */
  margin: 0;
  padding: 40px 20px;
  display: flex;
  justify-content: center;
  align-items: center; /* يضمن أن الكارد في المنتصف عموديًا */
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

    input[type="number"] {
      width: 100%;
      padding: 10px;
      font-size: 14px;
      border-radius: 6px;
      border: 1px solid #ccc;
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
      background-color: #rgb(16, 123, 127);
    }
  </style>
</head>
<body>

  <div class="card">
    <h1><?php echo $trip['title']; ?></h1>
    <p><?php echo $trip['desc']; ?></p>

    <ul>
      <?php foreach ($trip['basicDetails'] as $detail): ?>
        <li><?php echo $detail; ?></li>
      <?php endforeach; ?>
    </ul>

    <label>عدد الأشخاص:</label>
    <input type="number" value="1" min="1" onchange="updatePrice(this, <?php echo $trip['price']; ?>)">

    <div class="total-price">التكلفة الإجمالية: <span><?php echo $trip['price']; ?> ريال</span></div>

    <form action="pay.php" method="post">
      <input type="hidden" name="trip" value="<?php echo $tripKey; ?>">
      <input type="hidden" name="totalPrice" value="<?php echo $trip['price']; ?>">
      <button type="submit">تأكيد الحجز</button>
    </form>
  </div>

  <script>
    function updatePrice(input, pricePerPerson) {
      const totalSpan = input.parentElement.querySelector('.total-price span');
      const hiddenInput = input.parentElement.querySelector('input[type=hidden][name=totalPrice]');
      const total = input.value * pricePerPerson;
      totalSpan.innerText = total + ' ريال';
      hiddenInput.value = total;
    }
  </script>

</body>
</html>





