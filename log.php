session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_name'] = $user['name'];
            header("Location: index.php");
            exit;
        } else {
            $_SESSION['error'] = "كلمة المرور غير صحيحة.";
            header("Location: login_page.php");
            exit;
        }
    } else {
        $_SESSION['error'] = "البريد الإلكتروني غير مسجل.";
        header("Location: login_page.php");
        exit;
    }

    $stmt->close();
    $conn->close();
}

