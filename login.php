<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Joyoshree Saha</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .form-container {
            max-width: 400px;
            margin: 2rem auto;
        }
        .error {
            color: var(--accent-color);
            font-size: 0.9rem;
            margin-bottom: 1rem;
            padding: 0.8rem;
            background-color: rgba(231, 76, 60, 0.1);
            border-radius: var(--border-radius);
        }
        .demo-credentials {
            background-color: rgba(52, 152, 219, 0.1);
            padding: 1rem;
            border-radius: var(--border-radius);
            margin-bottom: 1rem;
            border-left: 4px solid var(--secondary-color);
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
            <a href="blog.html">Blog</a>
            <a href="contact.html">Contact</a>
            <a href="login.php" class="active">Login</a>
            <a href="register.php">Register</a>
        </nav>
    </header>

    <main>
        <div class="content-card form-container">
            <h1>Welcome Back!</h1>
            <p>Login to access exclusive content and updates from my portfolio.</p>

            <?php
            if (isset($_GET['error'])) {
                echo '<div class="error">' . htmlspecialchars($_GET['error']) . '</div>';
            }
            ?>

            <div class="demo-credentials">
                <strong>Demo Account:</strong><br>
                Email: demo@example.com<br>
                Password: demo123
            </div>

            <form action="login_process.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required 
                           value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" class="submit-btn">Login</button>
            </form>

            <div style="text-align: center; margin-top: 1.5rem;">
                <p>Don't have an account? <a href="register.php" style="color: var(--secondary-color);">Register here</a></p>
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
