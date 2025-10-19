# Joyoshree Saha - Portfolio with Authentication

A modern, responsive portfolio website with user registration and login functionality built with PHP and MySQL. Users can register to access exclusive blog content and premium features.

## 🌟 Features

### Public Features
- **Modern Portfolio Design**: Clean, responsive design with CSS Grid and Flexbox
- **Project Showcase**: Display of personal projects with descriptions and links
- **About Section**: Skills, hobbies, and CV download
- **Contact Form**: Professional contact form with social links
- **Mobile Responsive**: Optimized for all device sizes

### Authentication Features
- **User Registration**: Register with name, email, mobile, password, and optional profile picture
- **Secure Login**: Email/password authentication with PHP sessions
- **Profile Page**: Personalized user dashboard with account information
- **Protected Blog**: Exclusive blog content only accessible to registered users
- **Session Management**: Secure session handling with automatic logout

## 🚀 Tech Stack

- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Authentication**: PHP password_hash() with bcrypt, PHP sessions
- **File Upload**: PHP file upload for profile pictures
- **Security**: Prepared statements, input validation, session security

## 📦 Installation & Setup

### Prerequisites
- PHP 7.4 or higher
- MySQL/MariaDB database
- Web server (Apache/Nginx) or XAMPP/WAMP for local development

### Method 1: Local Development with XAMPP

#### Step 1: Download and Install XAMPP
- Go to: https://www.apachefriends.org/
- Download XAMPP for Windows
- Install with default settings

#### Step 2: Start Services
- Open XAMPP Control Panel
- Start "Apache" and "MySQL" services
- Both should show green "Running" status

#### Step 3: Set Up Your Portfolio
- Copy your entire Portfolio folder to: `C:\xampp\htdocs\`
- Your folder structure should be: `C:\xampp\htdocs\Portfolio\`

#### Step 4: Create Database
- Open browser and go to: http://localhost/phpmyadmin/
- Click "New" to create database
- Name it: `portfolio_db`
- Click "Create"
- Click on your new database
- Click "Import" tab
- Choose file: `database.sql` (from your Portfolio folder)
- Click "Go"

#### Step 5: Test Your Website
- Open browser and go to: http://localhost/Portfolio/
- You should see your portfolio homepage
- Click "Register" to test registration
- Use demo login: demo@example.com / demo123
### Method 2: Online Hosting

#### Free Hosting Options:
- **000webhost** (Recommended): https://www.000webhost.com/
- **InfinityFree**: https://infinityfree.net/

#### Paid Hosting (Better Performance):
- Hostinger: $1.99/month
- Bluehost: $2.95/month
- SiteGround: $3.99/month

### Configuration
Update `config.php` with your database credentials:
```php
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'your_db_username';
$password = 'your_db_password';
```

## 🔐 Demo Account

For testing purposes, a demo account is included:
- **Email**: demo@example.com
- **Password**: demo123

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

## 🛡️ Security Features

- **Password Hashing**: PHP password_hash() with bcrypt
- **Session Security**: Secure PHP session configuration
- **Input Validation**: Server-side validation with PHP filters
- **File Upload Security**: Image type and size restrictions
- **SQL Injection Protection**: PDO prepared statements
- **Authentication Middleware**: Protected routes with session checks

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

## 🌐 Deployment

For production deployment:

1. **Upload files** to your web hosting account
2. **Create MySQL database** and import `database.sql`
3. **Update config.php** with hosting database credentials
4. **Set folder permissions** for uploads directory (755)
5. **Enable HTTPS** for production use

## 🐛 Troubleshooting

### Common Issues:

**"Database connection failed"**
- Check database credentials in config.php
- Ensure database exists
- Verify MySQL service is running

**"File not found" errors**
- Check file paths are correct
- Ensure all files are uploaded
- Verify folder permissions

**Image upload not working**
- Create 'uploads' folder
- Set folder permissions to 755
- Check PHP upload settings

## 📄 License

This project is licensed under the MIT License.

## 👨‍💻 Author

**Joyoshree Saha**
- 3rd-year Computer Science and Engineering student
- Jahangirnagar University
- GitHub: [@joyoshreesaha](https://github.com/joyoshreesaha)
- LinkedIn: [Joyoshree Saha](https://www.linkedin.com/in/joyoshree-saha-577683370)

## 🤝 Contributing

This is a personal portfolio project, but suggestions and feedback are welcome!

## 📞 Support

If you have any questions or need help with the setup, feel free to contact me through the contact form or social media links.

For detailed setup instructions, see [SETUP_GUIDE.md](SETUP_GUIDE.md)

---

*Modern Portfolio with PHP Authentication System*
