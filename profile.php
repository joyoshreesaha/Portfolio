<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php?error=' . urlencode('Please login to access this page'));
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Joyoshree Saha</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .profile-card {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 2rem;
            align-items: start;
        }
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--secondary-color);
        }
        .default-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--secondary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            font-weight: bold;
        }
        .profile-info h2 {
            margin-bottom: 0.5rem;
            color: var(--primary-color);
        }
        .profile-info p {
            margin: 0.5rem 0;
            color: #666;
        }
        .logout-btn {
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: var(--border-radius);
            display: inline-block;
            margin-top: 1rem;
            transition: var(--transition);
        }
        .logout-btn:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }
        @media (max-width: 768px) {
            .profile-card {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <img src="joyoshreesahaPortfolio.jpeg" alt="Joyoshree Saha" width="150" height="150"
            style="border-radius: 80%;">
        <h1>Joyoshree Saha</h1>
        <nav>
            <a href="index.html">Home</a>
            <a href="projects.html">Projects</a>
            <a href="about.html">About</a>
            <a href="blog_protected.php">Blog</a>
            <a href="contact.html">Contact</a>
            <a href="profile.php" class="active">Profile</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <div class="content-card">
            <h1>User Profile</h1>
            <p>Welcome back! Here's your profile information.</p>
            
            <div class="profile-card">
                <div>
                    <?php if (!empty($_SESSION['user_image']) && file_exists($_SESSION['user_image'])): ?>
                        <img src="<?php echo htmlspecialchars($_SESSION['user_image']); ?>" 
                             alt="Profile Image" class="profile-image">
                    <?php else: ?>
                        <div class="default-avatar">
                            <?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="profile-info">
                    <h2><?php echo htmlspecialchars($_SESSION['user_name']); ?></h2>
                    <p><strong>📧 Email:</strong> <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
                    <p><strong>📱 Mobile:</strong> <?php echo htmlspecialchars($_SESSION['user_mobile']); ?></p>
                    <p><strong>👤 Member since:</strong> 
                        <?php 
                        // Get user registration date
                        try {
                            $stmt = $pdo->prepare("SELECT created_at FROM users WHERE id = ?");
                            $stmt->execute([$_SESSION['user_id']]);
                            $user_data = $stmt->fetch();
                            echo date('F j, Y', strtotime($user_data['created_at']));
                        } catch (PDOException $e) {
                            echo "Recently";
                        }
                        ?>
                    </p>
                    
                    <a href="logout.php" class="logout-btn">Logout</a>
                </div>
            </div>
        </div>

        <div class="content-card">
            <h2>🎉 Welcome to Exclusive Content!</h2>
            <p>As a registered user, you now have access to:</p>
            <ul style="margin-left: 2rem; margin-top: 1rem;">
                <li>🔒 Protected blog posts and insights</li>
                <li>📖 Detailed project documentation</li>
                <li>💡 Learning resources and tutorials</li>
                <li>📬 Direct communication access</li>
            </ul>
            
            <div style="margin-top: 2rem;">
                <a href="blog_protected.php" class="cta-button">Explore Blog →</a>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2023 Joyoshree Saha</p>
        <a href="https://github.com/joyoshreesaha" target="_blank">GitHub</a> |
        <a href="https://www.linkedin.com/in/joyoshree-saha-577683370" target="_blank">LinkedIn</a>
    </footer>
</body>
</html>
