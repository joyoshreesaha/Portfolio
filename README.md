# Joyoshree Saha - Portfolio with Authentication

A modern, responsive portfolio website with user registration and login functionality built with PHP and MySQL. Users can register to access exclusive blog content and premium features.


## 📁 Project Structure

```
Portfolio/
├── config.php              # Database configuration
├── database.sql            # Database schema and demo data
├── uploads/                # User profile pictures (auto-created)
├── index.html              # Homepage
├── about.html              # About page
├── projects.html           # Projects showcase
├── contact.html            # Contact form
├── blog.html               # Public blog page
├── register.php            # User registration
├── register_process.php    # Registration form handler
├── login.php               # User login
├── login_process.php       # Login form handler
├── profile.php             # User profile (protected)
├── blog_protected.php      # Exclusive blog content (protected)
├── logout.php              # Logout handler
├── styles.css              # Main stylesheet
├── .htaccess               # Security configurations
├── SETUP_GUIDE.md          # Detailed setup instructions
├── README_SETUP.md         # Additional setup documentation
└── README.md               # This file
```


## 🎨 Design Features

- **Modern CSS**: CSS Grid, Flexbox, CSS Variables
- **Responsive Design**: Mobile-first approach
- **Smooth Animations**: Hover effects and transitions
- **Professional Color Scheme**: Blue, navy, and red accents
- **Clean Typography**: Modern font stack
- **Interactive Elements**: Cards, buttons, and form components

## 📱 Pages Overview

### Public Pages
1. **Home** (`index.html`): Welcome page with hero section
2. **Projects** (`projects.html`): Showcase of personal projects
3. **About** (`about.html`): Skills, hobbies, and CV download
4. **Contact** (`contact.html`): Contact form and social links
5. **Blog** (`blog.html`): Public blog with registration CTA

### Authentication Pages
6. **Register** (`register.php`): User registration with image upload
7. **Login** (`login.php`): User authentication

### Protected Pages (Login Required)
8. **Profile** (`profile.php`): User dashboard and account info
9. **Protected Blog** (`blog_protected.php`): Exclusive blog content

## 🔧 PHP Files & Functions

- `config.php` - Database connection and session management
- `register_process.php` - Handles user registration
- `login_process.php` - Handles user authentication
- `logout.php` - Handles user logout
- `database.sql` - Database schema and initial data



## 📄 License

This project is licensed under the MIT License.

## 👨‍💻 Author

**Joyoshree Saha**
- 3rd-year Computer Science and Engineering student
- Jahangirnagar University
- GitHub: [@joyoshreesaha](https://github.com/joyoshreesaha)
- LinkedIn: [Joyoshree Saha](https://www.linkedin.com/in/joyoshree-saha-577683370)
