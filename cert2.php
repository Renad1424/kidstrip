<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>شهادات الأمان</title>
  <style>
    :root {
      --background-color: #ffffff;
      --default-color: #212529;
      --heading-color: #065b5e;
      --accent-color: #1dc8cd;
      --surface-color: #ffffff;
      --contrast-color: #ffffff;
    }

    body {
      background-color: var(--background-color);
      color: var(--default-color);
      font-family: 'Tajawal', sans-serif;
      margin: 0;
      padding: 0;
      line-height: 1.8;
    }

    /* تنسيق الهيدر */
    header {
      position: sticky;
      top: 0;
      background-color: #065b5e;
      color: white;
      padding: 10px 0;
      text-align: center;
      font-size: 18px;
      z-index: 1000; /* ليظل فوق المحتوى */
    }

    /* المسافة بين الهيدر والمحتوى */
    .container {
      max-width: 400px;
      margin: 100px auto 40px auto; /* نزّل المحتوى أكثر */
      margin: 40px auto;
      padding: 20px;
      background-color: var(--surface-color);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    h1, h2 {
      color: var(--heading-color);
    }

    .certificate-box {
      background-color: #f9f9f9;
      padding: 12px;
      margin-bottom: 12px;
      border-left: 5px solid var(--accent-color);
      border-radius: 6px;
    }

    .certificate-box h2 {
      margin-top: 0;
      font-size: 16px;
    }

    .certificate-box p {
      font-size: 12px;
    }

    p {
      font-size: 12px;
    }

    .icon {
      font-size: 24px;
      margin-left: 10px;
      color: var(--accent-color);
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <?php include 'header.php'; ?> <!-- استدعاء الهيدر هنا -->

  <div class="container">
    <h1>شهادات الأمان</h1>
    <p>نحن نهتم بأمان زوارنا ونسعى لتوفير بيئة موثوقة ومحمية من خلال تبني أحدث المعايير الأمنية.</p>

    <div class="certificate-box">
      <h2><span class="icon">🔒</span>شهادة التشفير SSL</h2>
      <p>يستخدم موقعنا بروتوكول SSL لحماية بيانات المستخدمين وتشفير جميع المعلومات المرسلة بين المتصفح والخادم.</p>
    </div>

    <div class="certificate-box">
      <h2><span class="icon">🛡️</span>شهادة حماية المعاملات PCI DSS</h2>
      <p>نلتزم بتطبيق معايير أمان المدفوعات المعتمدة لضمان حماية بيانات الدفع الخاصة بزوارنا.</p>
    </div>

    <div class="certificate-box">
      <h2><span class="icon">🔐</span>حماية البيانات الشخصية</h2>
      <p>نطبق أفضل الممارسات لتأمين بيانات المستخدم، بما في ذلك تشفير كلمات المرور وتحديد صلاحيات الوصول.</p>
    </div>

    <div class="certificate-box">
      <h2><span class="icon">⚙️</span>مراقبة مستمرة واختبارات أمان</h2>
      <p>نقوم بإجراء فحوصات دورية واختبارات أمان داخلية لضمان سلامة النظام من الثغرات المحتملة.</p>
    </div>

  </div>

  <?php include 'footer.php'; ?> <!-- استدعاء الفوتر هنا -->
</body>
</html>
