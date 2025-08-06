# Portfolio with User Registration & Login System

This portfolio website includes a complete user authentication system built with PHP and MySQL.

## 📋 Features

### 🔐 User Authentication
- **Registration**: Users can register with name, email, mobile, profile image, and password
- **Login**: Secure login with email and password
- **Profile**: User profile page displaying user information
- **Session Management**: Secure session handling and logout

### 📝 Content Access
- **Public Pages**: Home, Projects, About, Contact accessible to all
- **Protected Blog**: Exclusive blog content only for registered users
- **User Profile**: Personal dashboard for logged-in users

## 🛠️ Setup Instructions

### Prerequisites
- PHP 7.4 or higher
- MySQL/MariaDB database
- Web server (Apache/Nginx) or XAMPP/WAMP for local development

### 1. Database Setup
1. Create a MySQL database named `portfolio_db`
2. Run the SQL script in `database.sql` to create the users table
3. Update database credentials in `config.php`

### 2. File Permissions
Create an `uploads` directory for profile images:
```bash
mkdir uploads
chmod 755 uploads
```

### 3. Configuration
Update `config.php` with your database credentials:
```php
$host = 'localhost';
$dbname = 'portfolio_db';
$username = 'your_db_username';
$password = 'your_db_password';
```

### 4. Demo Account
A demo account is included:
- **Email**: demo@example.com
- **Password**: demo123

## 📁 File Structure

```
Portfolio/
├── index.html              # Home page
├── about.html              # About page
├── projects.html           # Projects page
├── contact.html            # Contact page
├── blog.html               # Public blog page
├── styles.css              # Main stylesheet
├── config.php              # Database configuration
├── register.php            # Registration page
├── register_process.php    # Registration form handler
├── login.php               # Login page
├── login_process.php       # Login form handler
├── profile.php             # User profile page
├── blog_protected.php      # Protected blog content
├── logout.php              # Logout handler
├── database.sql            # Database schema
├── uploads/                # Profile images directory
└── README_SETUP.md         # This file
```

## 🔒 Security Features

- **Password Hashing**: Uses PHP's `password_hash()` with bcrypt
- **SQL Injection Prevention**: Prepared statements with PDO
- **Input Validation**: Server-side validation for all inputs
- **Session Security**: Secure session management
- **File Upload Security**: Image type and size validation

## 🚀 Usage

### For Visitors
1. Browse public pages (Home, Projects, About, Contact)
2. Visit Blog page to see preview of exclusive content
3. Register for an account to access protected content

### For Registered Users
1. Login with credentials
2. Access exclusive blog content
3. View personal profile
4. Logout securely

## 🎨 Customization

### Adding Blog Posts
Edit `blog_protected.php` to add new blog posts in the same format as existing ones.

### Styling
Modify `styles.css` to customize the appearance. The design uses CSS custom properties for easy theming.

### Database Fields
To add more user fields, update:
1. Database schema in `database.sql`
2. Registration form in `register.php`
3. Processing script in `register_process.php`
4. Profile display in `profile.php`

## 🐛 Troubleshooting

### Common Issues

1. **Database Connection Error**
   - Check database credentials in `config.php`
   - Ensure MySQL service is running
   - Verify database name exists

2. **File Upload Issues**
   - Check `uploads/` directory permissions
   - Verify PHP `upload_max_filesize` setting
   - Ensure directory is writable

3. **Session Issues**
   - Check PHP session configuration
   - Ensure cookies are enabled in browser
   - Verify session directory permissions

### Error Logs
Check PHP error logs for detailed error information:
- Windows: Check XAMPP/WAMP error logs
- Linux: `/var/log/apache2/error.log` or similar

## 📞 Support

For issues or questions about this portfolio system, you can:
1. Check the troubleshooting section above
2. Review PHP and MySQL documentation
3. Contact through the portfolio contact form

## 🔄 Updates

This system can be extended with:
- Email verification
- Password reset functionality
- Admin panel for content management
- Comment system for blog posts
- Social login integration
