<?php
require_once 'config.php';

// Check if user is logged in
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header('Location: login.php?error=' . urlencode('Please login to access the blog'));
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Joyoshree Saha</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .blog-post {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 2rem;
            margin-bottom: 2rem;
            border-left: 4px solid var(--secondary-color);
        }
        .blog-post h3 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        .blog-meta {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }
        .read-more {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: bold;
        }
        .read-more:hover {
            color: var(--accent-color);
        }
        .welcome-user {
            background: linear-gradient(135deg, var(--secondary-color), var(--accent-color));
            color: white;
            padding: 1rem;
            border-radius: var(--border-radius);
            margin-bottom: 2rem;
            text-align: center;
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
            <a href="blog_protected.php" class="active">Blog</a>
            <a href="contact.html">Contact</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>

    <main>
        <div class="welcome-user">
            <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>! 🎉</h2>
            <p>Enjoy exclusive access to my blog posts and insights.</p>
        </div>

        <div class="content-card">
            <h1>📝 My Blog</h1>
            <p>Here are my latest thoughts, experiences, and insights about Computer Science, programming, and my journey as a student developer.</p>
        </div>

        <!-- Blog Post 1 -->
        <article class="blog-post">
            <h3>🚀 My Journey into Web Development</h3>
            <div class="blog-meta">
                📅 January 15, 2024 | 🏷️ Web Development, Learning
            </div>
            <p>Starting my journey in web development has been an incredible experience. From learning HTML and CSS basics to understanding the intricacies of responsive design, every step has taught me something valuable...</p>
            <p>In this post, I share my experience learning modern web technologies, the challenges I faced, and the resources that helped me the most. I also discuss my upcoming projects and what I plan to learn next.</p>
            <a href="#" class="read-more">Read full post →</a>
        </article>

        <!-- Blog Post 2 -->
        <article class="blog-post">
            <h3>💡 Building My First Calculator App</h3>
            <div class="blog-meta">
                📅 December 20, 2023 | 🏷️ Programming, C++, Projects
            </div>
            <p>Creating my first calculator application was a milestone in my programming journey. This project taught me fundamental programming concepts and problem-solving approaches...</p>
            <p>I'll walk you through the development process, the challenges I encountered with user input validation, and how I implemented different mathematical operations. This project helped me understand the importance of clean code and user experience.</p>
            <a href="#" class="read-more">Read full post →</a>
        </article>

        <!-- Blog Post 3 -->
        <article class="blog-post">
            <h3>🔬 Electronics Lab: 5V Power Supply Project</h3>
            <div class="blog-meta">
                📅 November 10, 2023 | 🏷️ Electronics, Hardware, University
            </div>
            <p>Working on the 5V power supply project in our electronics laboratory was an eye-opening experience that bridged the gap between theory and practical application...</p>
            <p>In this detailed post, I explain the circuit design, component selection process, and the testing phases. I also share the lessons learned about voltage regulation and the importance of proper circuit protection.</p>
            <a href="#" class="read-more">Read full post →</a>
        </article>

        <!-- Blog Post 4 -->
        <article class="blog-post">
            <h3>🎓 Life as a CSE Student at Jahangirnagar University</h3>
            <div class="blog-meta">
                📅 October 5, 2023 | 🏷️ University Life, CSE, Personal
            </div>
            <p>Being a Computer Science and Engineering student has been both challenging and rewarding. From theoretical computer science concepts to hands-on programming projects, university life keeps me constantly learning...</p>
            <p>I share insights about the curriculum, favorite subjects, extracurricular activities, and how I balance academics with personal projects. Plus, some tips for fellow CSE students!</p>
            <a href="#" class="read-more">Read full post →</a>
        </article>

        <!-- Blog Post 5 -->
        <article class="blog-post">
            <h3>🎭 Balancing Code and Creativity: Poetry and Programming</h3>
            <div class="blog-meta">
                📅 September 22, 2023 | 🏷️ Personal, Hobbies, Creativity
            </div>
            <p>Many people think programming and poetry are worlds apart, but I've found that they complement each other beautifully. Both require creativity, structure, and attention to detail...</p>
            <p>In this personal post, I explore how my love for poetry recitation and singing influences my approach to coding, and how the logical thinking from programming helps me appreciate the structure in poetry.</p>
            <a href="#" class="read-more">Read full post →</a>
        </article>

        <div class="content-card" style="text-align: center; margin-top: 3rem;">
            <h3>📬 Stay Updated</h3>
            <p>More blog posts are coming soon! As a registered user, you'll be the first to know when I publish new content.</p>
            <a href="contact.html" class="cta-button">Get in Touch →</a>
        </div>
    </main>

    <footer>
        <p>© 2023 Joyoshree Saha</p>
        <a href="https://github.com/joyoshreesaha" target="_blank">GitHub</a> |
        <a href="https://www.linkedin.com/in/joyoshree-saha-577683370" target="_blank">LinkedIn</a>
    </footer>
</body>
</html>
