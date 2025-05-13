<?php
$tripKey = $_GET['trip'] ?? 'museum';

$trips = [
  'museum' => [
    'title' => 'رحلة عائلية إلى المتحف',
    'desc' => 'استمتعوا باكتشاف التاريخ والثقافة في المتحف الوطني.',
    'basicDetails' => ['التاريخ: 12 مايو', 'الوقت: 9 صباحًا - 2 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 100 ريال', 'الموقع: المتحف الوطني', 'الجهة المنظمة: العائلة'],
    'price' => 100,
  ],
  'zoo' => [
    'title' => 'رحلة عائلية إلى حديقة الحيوان',
    'desc' => 'تجربة عائلية ممتعة بين الحيوانات.',
    'basicDetails' => ['التاريخ: 15 مايو', 'الوقت: 10 صباحًا - 4 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 80 ريال', 'الموقع: حديقة الحيوان بالرياض', 'الجهة المنظمة: العائلة'],
    'price' => 80,
  ],
  'aquarium' => [
    'title' => 'رحلة عائلية إلى الأكواريوم',
    'desc' => 'عالم البحار في انتظار العائلة.',
    'basicDetails' => ['التاريخ: 18 مايو', 'الوقت: 11 صباحًا - 3 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 90 ريال', 'الموقع: الأكواريوم الوطني', 'الجهة المنظمة: العائلة'],
    'price' => 90,
  ],
  'shallal' => [
    'title' => 'رحلة عائلية إلى ملاهي الشلال',
    'desc' => 'مغامرات وألعاب لجميع أفراد العائلة.',
    'basicDetails' => ['التاريخ: 20 مايو', 'الوقت: 12 مساءً - 6 مساءً', 'الفئة: لجميع الأعمار', 'الرسوم: 120 ريال', 'الموقع: مدينة ألعاب الشلال', 'الجهة المنظمة: العائلة'],
    'price' => 120,
  ],
  'kidzania' => [
    'title' => 'رحلة عائلية إلى كيدزانيا',
    'desc' => 'تعليم وترفيه للأطفال في جو عائلي.',
    'basicDetails' => ['التاريخ: 22 مايو', 'الوقت: 10 صباحًا - 5 مساءً', 'الفئة: للأطفال من 4 إلى 14 عامًا', 'الرسوم: 150 ريال', 'الموقع: كيدزانيا الرياض', 'الجهة المنظمة: العائلة'],
    'price' => 150,
  ],
  'pottery' => [
    'title' => 'رحلة عائلية إلى ورشة الفخار',
    'desc' => 'شاركوا معًا في تجربة تشكيل الطين.',
    'basicDetails' => ['التاريخ: 25 مايو', 'الوقت: 9 صباحًا - 1 ظهرًا', 'الفئة: لجميع الأعمار', 'الرسوم: 70 ريال', 'الموقع: ورشة الفخار', 'الجهة المنظمة: العائلة'],
    'price' => 70,
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
      background-color:rgb(16, 123, 127);
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

    <label>عدد الأطفال:</label>
    <input type="number" id="children" value="1" min="0" oninput="updatePrice()">

    <label>عدد البالغين:</label>
    <input type="number" id="adults" value="0" min="0" oninput="updatePrice()">

    <div class="total-price">التكلفة الإجمالية: <span id="totalPrice"><?php echo $trip['price']; ?> ريال</span></div>

    <form action="pay.php" method="post">
      <input type="hidden" name="trip" value="<?php echo $tripKey; ?>">
      <input type="hidden" name="totalPrice" id="hiddenTotalPrice" value="<?php echo $trip['price']; ?>">
      <input type="hidden" name="adultsCount" id="adultsCount" value="0">
      <input type="hidden" name="childrenCount" id="childrenCount" value="1">
      <button type="submit">تأكيد الحجز</button>
    </form>
  </div>

  <script>
    function updatePrice() {
      var children = parseInt(document.getElementById("children").value) || 0;
      var adults = parseInt(document.getElementById("adults").value) || 0;
      var pricePerPerson = <?php echo $trip['price']; ?>;
      var adultPrice = pricePerPerson * 0.8;  // خصم للبالغين

      var total = (children * pricePerPerson) + (adults * adultPrice);

      document.getElementById("totalPrice").innerText = total + " ريال";
      document.getElementById("hiddenTotalPrice").value = total;
      document.getElementById("adultsCount").value = adults;
      document.getElementById("childrenCount").value = children;
    }

    window.onload = updatePrice;
  </script>

</body>
</html>
