<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>شهادات الاعتماد والجودة</title>
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
      margin-top: 60px; /* إبعاد المحتوى عن الهيدر */
      max-width: 300px;
      margin: 40px auto;
      padding: 15px;
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
    <h1>شهادات الاعتماد والجودة</h1>
    <p>نحن ملتزمون بتوفير تجربة آمنة ومتميزة لجميع زوارنا، ولهذا نعتمد على أعلى معايير الأمان والجودة في تصميم خدماتنا.</p>

    <div class="certificate-box">
      <h2><span class="icon">🔒</span>شهادة الأمان (SSL)</h2>
      <p>يتم تشفير جميع البيانات المتبادلة على موقعنا باستخدام بروتوكول SSL لضمان حماية المعلومات الشخصية للزوار.</p>
    </div>

    <div class="certificate-box">
      <h2><span class="icon">📜</span>شهادة الجودة (ISO 9001)</h2>
      <p>نلتزم بتطبيق معايير الجودة العالمية في جميع العمليات لضمان أفضل تجربة للمستخدم.</p>
    </div>

    <div class="certificate-box">
      <h2><span class="icon">🛡️</span>الامتثال لحماية البيانات (GDPR)</h2>
      <p>نولي أهمية كبيرة لحماية خصوصية بيانات المستخدم ونتبع أفضل الممارسات لتأمينها وفقًا للمعايير الأوروبية.</p>
    </div>

    <div class="certificate-box">
      <h2><span class="icon">✅</span>شهادة أمان المدفوعات (PCI DSS)</h2>
      <p>نحرص على حماية جميع بيانات الدفع الإلكتروني من خلال اتباع معايير أمان المدفوعات العالمية.</p>
    </div>

  </div>

  <?php include 'footer.php'; ?> <!-- استدعاء الفوتر هنا -->
</body>
</html>




