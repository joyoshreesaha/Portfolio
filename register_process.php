<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: register.php');
    exit();
}

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$mobile = trim($_POST['mobile']);
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Validation
$errors = [];

if (empty($name)) {
    $errors[] = 'Name is required';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required';
}

if (empty($mobile) || !preg_match('/^[0-9]{10,15}$/', $mobile)) {
    $errors[] = 'Valid mobile number is required (10-15 digits)';
}

if (empty($password) || strlen($password) < 6) {
    $errors[] = 'Password must be at least 6 characters';
}

if ($password !== $confirm_password) {
    $errors[] = 'Passwords do not match';
}

// Check if email already exists
try {
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetch()) {
        $errors[] = 'Email already registered';
    }
} catch (PDOException $e) {
    $errors[] = 'Database error occurred';
}

// Handle image upload
$image_path = null;
if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $max_size = 2 * 1024 * 1024; // 2MB
    
    if (!in_array($_FILES['image']['type'], $allowed_types)) {
        $errors[] = 'Invalid image type. Only JPG, PNG, and GIF allowed';
    } elseif ($_FILES['image']['size'] > $max_size) {
        $errors[] = 'Image size must be less than 2MB';
    } else {
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }
        
        $file_extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_path = $upload_dir . uniqid() . '.' . $file_extension;
        
        if (!move_uploaded_file($_FILES['image']['tmp_name'], $image_path)) {
            $errors[] = 'Failed to upload image';
            $image_path = null;
        }
    }
}

// If there are errors, redirect back with errors
if (!empty($errors)) {
    $error_string = implode(', ', $errors);
    $redirect_url = "register.php?error=" . urlencode($error_string) . 
                   "&name=" . urlencode($name) . 
                   "&email=" . urlencode($email) . 
                   "&mobile=" . urlencode($mobile);
    header("Location: $redirect_url");
    exit();
}

// Hash password and insert user
try {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO users (name, email, mobile, image, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$name, $email, $mobile, $image_path, $hashed_password]);
    
    header('Location: register.php?success=1');
    exit();
    
} catch (PDOException $e) {
    header('Location: register.php?error=' . urlencode('Registration failed. Please try again.'));
    exit();
}
?>
