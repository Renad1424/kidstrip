<?php
// register.php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    // الحقول الإضافية (يمكنك تركها فارغة مؤقتًا)
    $phone    = $_POST['phone'] ?? '';
    $location = $_POST['location'] ?? '';
    $age      = $_POST['age'] ?? 0;
    $gender   = $_POST['gender'] ?? '';

    if ($password !== $confirm) {
        $_SESSION['error'] = "كلمتا المرور غير متطابقتين.";
        header("Location: login_page.php");
        exit;
    }

    $check = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "هذا البريد الإلكتروني مستخدم بالفعل.";
        header("Location: login_page.php");
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // تعديل الاستعلام ليشمل الحقول الجديدة
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, location, age, gender) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssis", $name, $email, $hashedPassword, $phone, $location, $age, $gender);

    if ($stmt->execute()) {
        $_SESSION['user_name'] = $name;
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['error'] = "حدث خطأ أثناء التسجيل: " . $stmt->error;
        header("Location: login_page.php");
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>

