<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Joyoshree Saha</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .form-container {
            max-width: 500px;
            margin: 2rem auto;
        }
        .upload-area {
            border: 2px dashed var(--secondary-color);
            border-radius: var(--border-radius);
            padding: 2rem;
            text-align: center;
            margin-bottom: 1rem;
            transition: var(--transition);
        }
        .upload-area:hover {
            background-color: rgba(52, 152, 219, 0.1);
        }
        .error {
            color: var(--accent-color);
            font-size: 0.9rem;
            margin-top: 0.5rem;
        }
        .success {
            color: #27ae60;
            font-size: 0.9rem;
            margin-top: 0.5rem;
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
            <a href="login.php">Login</a>
            <a href="register.php" class="active">Register</a>
        </nav>
    </header>

    <main>
        <div class="content-card form-container">
            <h1>Create Account</h1>
            <p>Join to access exclusive content and stay updated with my latest projects!</p>

            <?php
            if (isset($_GET['success'])) {
                echo '<div class="success">Registration successful! You can now <a href="login.php">login</a>.</div>';
            }
            if (isset($_GET['error'])) {
                echo '<div class="error">' . htmlspecialchars($_GET['error']) . '</div>';
            }
            ?>

            <form action="register_process.php" method="POST" enctype="multipart/form-data" class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name *</label>
                    <input type="text" id="name" name="name" required 
                           value="<?php echo isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" required 
                           value="<?php echo isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; ?>">
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile Number *</label>
                    <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10,15}" required 
                           value="<?php echo isset($_GET['mobile']) ? htmlspecialchars($_GET['mobile']) : ''; ?>">
                    <small style="color: #666;">Enter 10-15 digits</small>
                </div>

                <div class="form-group">
                    <label for="image">Profile Image (Optional)</label>
                    <div class="upload-area">
                        <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                        <div onclick="document.getElementById('image').click();" style="cursor: pointer;">
                            <p>📷 Click to upload profile image</p>
                            <small>JPG, PNG, GIF (Max: 2MB)</small>
                        </div>
                    </div>
                    <div id="image-preview"></div>
                </div>

                <div class="form-group">
                    <label for="password">Password *</label>
                    <input type="password" id="password" name="password" required minlength="6">
                    <small style="color: #666;">Minimum 6 characters</small>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password *</label>
                    <input type="password" id="confirm_password" name="confirm_password" required minlength="6">
                </div>

                <button type="submit" class="submit-btn">Create Account</button>
            </form>

            <div style="text-align: center; margin-top: 1.5rem;">
                <p>Already have an account? <a href="login.php" style="color: var(--secondary-color);">Login here</a></p>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2023 Joyoshree Saha</p>
        <a href="https://github.com/joyoshreesaha" target="_blank">GitHub</a> |
        <a href="https://www.linkedin.com/in/joyoshree-saha-577683370" target="_blank">LinkedIn</a>
    </footer>

    <script>
        // Image preview functionality
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('image-preview');
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" style="max-width: 200px; border-radius: 8px; margin-top: 1rem;">`;
                };
                reader.readAsDataURL(file);
            }
        });

        // Password confirmation validation
        document.getElementById('confirm_password').addEventListener('input', function() {
            const password = document.getElementById('password').value;
            const confirmPassword = this.value;
            
            if (password !== confirmPassword) {
                this.setCustomValidity('Passwords do not match');
            } else {
                this.setCustomValidity('');
            }
        });
    </script>
</body>
</html>
