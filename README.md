# Joyoshree Saha - Portfolio with Authentication

A modern, responsive portfolio website with user registration and login functionality. Users can register to access exclusive blog content and premium features.

## 🌟 Features

### Public Features
- **Modern Portfolio Design**: Clean, responsive design with CSS Grid and Flexbox
- **Project Showcase**: Display of personal projects with descriptions and links
- **About Section**: Skills, hobbies, and CV download
- **Contact Form**: Professional contact form with social links
- **Mobile Responsive**: Optimized for all device sizes

### Authentication Features
- **User Registration**: Register with name, email, mobile, password, and optional profile picture
- **Secure Login**: Email/password authentication with session management
- **Profile Page**: Personalized user dashboard with account information
- **Protected Blog**: Exclusive blog content only accessible to registered users
- **Session Management**: Secure session handling with automatic logout

## 🚀 Tech Stack

- **Frontend**: HTML5, CSS3, Vanilla JavaScript
- **Backend**: Node.js, Express.js
- **Database**: SQLite
- **Authentication**: bcryptjs for password hashing, express-session
- **File Upload**: Multer for profile picture uploads
- **Security**: Input validation, CORS protection

## 📦 Installation & Setup

### Prerequisites
- Node.js (v14 or higher)
- npm (Node Package Manager)

### Step 1: Install Dependencies
```bash
cd Portfolio
npm install
```

### Step 2: Start the Server
```bash
npm start
```

For development with auto-restart:
```bash
npm run dev
```

### Step 3: Access the Application
Open your browser and navigate to:
- **Main Portfolio**: http://localhost:3000
- **Registration**: http://localhost:3000/register
- **Login**: http://localhost:3000/login

## 🔐 Demo Account

For testing purposes, a demo account is automatically created:
- **Email**: demo@example.com
- **Password**: demo123

## 📁 Project Structure

```
Portfolio/
├── server.js              # Main server file
├── package.json           # Dependencies and scripts
├── portfolio.db           # SQLite database (auto-created)
├── uploads/               # User profile pictures (auto-created)
├── index.html             # Homepage
├── about.html             # About page
├── projects.html          # Projects showcase
├── contact.html           # Contact form
├── blog.html              # Public blog page
├── register.html          # User registration
├── login.html             # User login
├── profile.html           # User profile (protected)
├── protected-blog.html    # Exclusive blog content (protected)
├── styles.css             # Main stylesheet
└── README.md              # This file
```

## 🛡️ Security Features

- **Password Hashing**: bcryptjs with salt rounds
- **Session Security**: Secure session configuration
- **Input Validation**: Client and server-side validation
- **File Upload Security**: Type and size restrictions
- **SQL Injection Protection**: Parameterized queries
- **Authentication Middleware**: Protected routes

## 🎨 Design Features

- **Modern CSS**: CSS Grid, Flexbox, CSS Variables
- **Responsive Design**: Mobile-first approach
- **Smooth Animations**: Hover effects and transitions
- **Professional Color Scheme**: Blue, navy, and red accents
- **Clean Typography**: Modern font stack
- **Interactive Elements**: Cards, buttons, and form components

## 📱 Pages Overview

### Public Pages
1. **Home** (`/`): Welcome page with hero section
2. **Projects** (`/projects`): Showcase of personal projects
3. **About** (`/about`): Skills, hobbies, and CV download
4. **Contact** (`/contact`): Contact form and social links
5. **Blog** (`/blog`): Public blog with registration CTA

### Authentication Pages
6. **Register** (`/register`): User registration with image upload
7. **Login** (`/login`): User authentication

### Protected Pages (Login Required)
8. **Profile** (`/profile`): User dashboard and account info
9. **Protected Blog** (`/protected-blog`): Exclusive blog content

## 🔧 API Endpoints

- `POST /api/register` - User registration
- `POST /api/login` - User authentication
- `POST /api/logout` - User logout
- `GET /api/user` - Get current user info
- `GET /api/auth-status` - Check authentication status

## 🌐 Deployment

For production deployment:

1. Set environment variables:
   ```bash
   export NODE_ENV=production
   export PORT=3000
   ```

2. Use HTTPS and update session configuration:
   ```javascript
   cookie: { 
       secure: true,  // Enable for HTTPS
       maxAge: 24 * 60 * 60 * 1000 
   }
   ```

3. Consider using a production database (PostgreSQL, MySQL)

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

---

*Web Development Lab - CSE 312*
