<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit();
}

$email = trim($_POST['email']);
$password = $_POST['password'];

// Validation
if (empty($email) || empty($password)) {
    header('Location: login.php?error=' . urlencode('Please fill in all fields') . '&email=' . urlencode($email));
    exit();
}

try {
    // Check user credentials
    $stmt = $pdo->prepare("SELECT id, name, email, mobile, image, password FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($user && password_verify($password, $user['password'])) {
        // Login successful
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['user_email'] = $user['email'];
        $_SESSION['user_mobile'] = $user['mobile'];
        $_SESSION['user_image'] = $user['image'];
        $_SESSION['logged_in'] = true;
        
        header('Location: profile.php');
        exit();
    } else {
        // Login failed
        header('Location: login.php?error=' . urlencode('Invalid email or password') . '&email=' . urlencode($email));
        exit();
    }
    
} catch (PDOException $e) {
    header('Location: login.php?error=' . urlencode('Login failed. Please try again.'));
    exit();
}
?>
