<?php
$program = $_GET['program'] ?? 'summer';

$programs = [
  'summer' => [
    'title' => 'المخيم الصيفي',
    'desc' => 'برنامج ترفيهي وتعليمي يقام خلال الإجازة الصيفية، يجمع بين الأنشطة الحركية والإبداعية في بيئة ممتعة وآمنة.',
    'price' => 200,
    'basicDetails' => ['الفترة: 1 يوليو - 15 يوليو', 'الفئة: من 6 إلى 12 سنة', 'الوقت: 9 صباحًا - 1 ظهرًا', 'الموقع: المركز الثقافي'],
  ],
  'eid' => [
    'title' => 'فعاليات العيد',
    'desc' => 'احتفاليات ترفيهية للأطفال خلال أيام العيد تشمل فقرات مسرحية وهدايا ومسابقات.',
    'price' => 150,
    'basicDetails' => ['التاريخ: أول وثاني أيام العيد', 'الوقت: 5 مساءً - 9 مساءً', 'الموقع: حديقة الأمير ماجد', 'الفئة: لجميع الأعمار'],
  ],
  'winter' => [
    'title' => 'البرنامج الشتوي',
    'desc' => 'أنشطة تعليمية وترفيهية تُقام خلال عطلة الشتاء لتنمية المهارات ومشاركة ممتعة.',
    'price' => 200,
    'basicDetails' => ['الفترة: 10 يناير - 20 يناير', 'الوقت: 10 صباحًا - 2 مساءً', 'الموقع: المركز الشتوي التربوي', 'الفئة: من 7 إلى 13 سنة'],
  ],
  'reading' => [
    'title' => 'برنامج القراءة',
    'desc' => 'مبادرة لتعزيز حب القراءة لدى الأطفال من خلال ورش وقصص تفاعلية ومسابقة قراءة.',
    'price' => 100,
    'basicDetails' => ['الفترة: أسبوع واحد (يناير)', 'الوقت: 4 مساءً - 6 مساءً', 'الموقع: مكتبة الحي', 'الفئة: من 8 إلى 14 سنة'],
  ],
];

$data = $programs[$program] ?? $programs['summer'];
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title><?php echo $data['title']; ?></title>
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
      background-color: #rgb(16, 123, 127);
    }
  </style>
</head>
<body>

  <div class="card">
    <h1><?php echo $data['title']; ?></h1>
    <p><?php echo $data['desc']; ?></p>

    <ul>
      <?php foreach ($data['basicDetails'] as $detail): ?>
        <li><?php echo $detail; ?></li>
      <?php endforeach; ?>
    </ul>

    <label>عدد الأشخاص:</label>
    <input type="number" value="1" min="1" onchange="updatePrice(this, <?php echo $data['price']; ?>)">

    <div class="total-price">التكلفة الإجمالية: <span><?php echo $data['price']; ?> ريال</span></div>

    <form action="pay.php" method="post">
      <input type="hidden" name="program" value="<?php echo $program; ?>">
      <input type="hidden" name="totalPrice" value="<?php echo $data['price']; ?>">
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
