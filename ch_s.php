<?php
$tripKey = $_GET['trip'] ?? 'trip';
// البيانات الخاصة بكل رحلة
$trips = [
    'museum' => [
        'title' => 'رحلة مدرسية إلى المتحف',
        'desc' => 'رحلة تعليمية لاكتشاف تاريخ الحضارات بطريقة تفاعلية.',
        'basicDetails' => ['التاريخ: 12 مايو 2025', 'الوقت: 9 صباحًا - 2 مساءً', 'الفئة العمرية: طلاب المدارس', 'الموقع: المتحف الوطني', 'الجهة المنظمة: إدارة المدرسة'],
        'fee' => [
            30 => 2100,  // 30 طالب
            60 => 4200,  // 60 طالب
            120 => 8400  // 120 طالب
        ]
    ],
    'zoo' => [
        'title' => 'رحلة مدرسية إلى حديقة الحيوان',
        'desc' => 'رحلة للتعرف على الحيوانات وبيئاتها الطبيعية.',
        'basicDetails' => ['التاريخ: 15 مايو 2025', 'الوقت: 10 صباحًا - 3 مساءً', 'الفئة العمرية: طلاب المدارس', 'الموقع: حديقة الحيوان', 'الجهة المنظمة: إدارة المدرسة'],
        'fee' => [
            30 => 1800,  // 30 طالب
            60 => 3600,  // 60 طالب
            120 => 7200  // 120 طالب
        ]
    ],
    'aquarium' => [
        'title' => 'رحلة مدرسية إلى الأكواريوم',
        'desc' => 'رحلة لاكتشاف الكائنات البحرية والنظم البيئية المائية.',
        'basicDetails' => ['التاريخ: 20 مايو 2025', 'الوقت: 9 صباحًا - 2 مساءً', 'الفئة العمرية: طلاب المدارس', 'الموقع: الأكواريوم', 'الجهة المنظمة: إدارة المدرسة'],
        'fee' => [
            30 => 2500,  // 30 طالب
            60 => 5000,  // 60 طالب
            120 => 10000  // 120 طالب
        ]
    ],
    'theme_park' => [
        'title' => 'رحلة مدرسية إلى مدينة الملاهي',
        'desc' => 'رحلة ممتعة للاسترخاء والاستمتاع بالألعاب والفعاليات الترفيهية.',
        'basicDetails' => ['التاريخ: 25 مايو 2025', 'الوقت: 10 صباحًا - 5 مساءً', 'الفئة العمرية: طلاب المدارس', 'الموقع: مدينة الملاهي', 'الجهة المنظمة: إدارة المدرسة'],
        'fee' => [
            30 => 3000,  // 30 طالب
            60 => 6000,  // 60 طالب
            120 => 12000  // 120 طالب
        ]
    ],
    'pottery_workshop' => [
        'title' => 'ورشة فنية لصناعة الفخار',
        'desc' => 'رحلة لتعلم فنون صناعة الفخار والتمتع بتجربة يدوية فنية.',
        'basicDetails' => ['التاريخ: 28 مايو 2025', 'الوقت: 10 صباحًا - 1 مساءً', 'الفئة العمرية: طلاب المدارس', 'الموقع: ورشة الفخار', 'الجهة المنظمة: إدارة المدرسة'],
        'fee' => [
            30 => 1800,  // 30 طالب
            60 => 3600,  // 60 طالب
            120 => 7200  // 120 طالب
        ]
    ],
    // يمكن إضافة المزيد من الرحلات هنا...
];

// الحصول على الوجهة المحددة من القائمة
$tripKey = $_GET['trip'] ?? 'museum';
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

        select {
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
            background-color: rgb(16, 123, 127);
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

    <label>اختر عدد الطلاب:</label>
    <select id="studentCount" onchange="updatePrice()">
        <option value="30">30 طالب</option>
        <option value="60">60 طالب</option>
        <option value="120">120 طالب</option>
    </select>

    <div class="total-price">التكلفة الإجمالية: <span>2100</span> ريال</div>

    <form action="pay.php" method="post">
        <input type="hidden" name="trip" value="<?php echo $tripKey; ?>">
        <input type="hidden" name="totalPrice" id="totalPrice" value="2100">
        <button type="submit">تأكيد الحجز</button>
    </form>
</div>

<script>
    function updatePrice() {
        const studentCount = document.getElementById("studentCount").value;
        const fee = <?php echo json_encode($trip['fee']); ?>;
        const totalPrice = fee[studentCount];
        document.querySelector('.total-price span').innerText = totalPrice;
        document.getElementById('totalPrice').value = totalPrice;
    }
</script>

</body>
</html>
