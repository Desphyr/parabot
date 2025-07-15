Achmad Royhan Abdillah (3012310003)
Nabila Rana Pradipta (3012310028)


# 🍽️ Parabot Catering App ( Pusat Antar Rasa & Box Otomatis Terjadwal )

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-8.75-red?style=for-the-badge&logo=laravel" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-8.0+-blue?style=for-the-badge&logo=php" alt="PHP">
  <img src="https://img.shields.io/badge/Bootstrap-5.1-purple?style=for-the-badge&logo=bootstrap" alt="Bootstrap">
  <img src="https://img.shields.io/badge/MySQL-8.0-orange?style=for-the-badge&logo=mysql" alt="MySQL">
</p>

<p align="center">
  A comprehensive catering subscription management system built with Laravel. Manage meal plans, subscriptions, deliveries, and customer experiences with ease.
</p>

## 📋 Table of Contents

- [About the Project](#about-the-project)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Installation](#installation)
- [Configuration](#configuration)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [API Documentation](#api-documentation)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

## 🎯 About the Project

Parabot Catering App is a modern web application designed to streamline catering subscription services. The platform enables customers to subscribe to various meal plans, manage their subscriptions, and provides administrators with powerful tools to manage orders, customers, and business analytics.

### Key Capabilities
- **Customer Management**: User registration, authentication, and profile management
- **Subscription System**: Flexible meal plan subscriptions with pause/resume functionality
- **Admin Dashboard**: Comprehensive admin panel for managing subscriptions and analytics
- **Delivery Management**: Configurable delivery schedules and tracking
- **Payment Integration**: Subscription billing and payment management
- **Review System**: Customer feedback and experience management

## ✨ Features

### For Customers
- 🔐 **User Authentication** - Secure registration and login system
- 🍽️ **Meal Plan Selection** - Choose from Diet, Protein, and Royal plans
- 📅 **Flexible Scheduling** - Select delivery days and meal types
- ⏸️ **Subscription Control** - Pause, resume, or cancel subscriptions
- 💳 **Payment Management** - View billing and payment history
- ⭐ **Review System** - Rate and review meal experiences
- 📱 **Responsive Design** - Optimized for all devices

### For Administrators
- 📊 **Analytics Dashboard** - Real-time business metrics and insights
- 👥 **Customer Management** - View and manage customer accounts
- 📋 **Subscription Management** - Approve, reject, and manage subscriptions
- 💰 **Revenue Tracking** - Monitor MRR and subscription analytics
- 📈 **Plan Distribution** - Visual representation of meal plan popularity
- 📞 **Contact Management** - Handle customer inquiries and support

### System Features
- 🔄 **Automated Billing** - Calculate subscription costs with paused days consideration
- 📧 **Email Notifications** - Automated email confirmations and updates
- 🛡️ **Security** - CSRF protection, input validation, and secure authentication
- 🌐 **Multi-language Support** - English and Indonesian language options
- 📱 **Mobile Responsive** - Fully responsive design for all screen sizes

## 🛠️ Tech Stack

### Backend
- **Framework**: Laravel 8.75
- **Language**: PHP 8.0+
- **Database**: MySQL 8.0
- **Authentication**: Laravel Sanctum
- **Validation**: Laravel Form Requests

### Frontend
- **CSS Framework**: Bootstrap 5.1
- **JavaScript**: Vanilla JS, Axios
- **Build Tool**: Laravel Mix
- **Icons**: Unicode Emojis & Custom Icons
- **Charts**: HTML5 Canvas (Custom Implementation)

### Development Tools
- **Package Manager**: Composer, NPM
- **Task Runner**: Laravel Mix
- **Code Style**: PSR-12
- **Testing**: PHPUnit
- **Version Control**: Git

## 🚀 Installation

### Prerequisites
- PHP >= 8.0
- Composer
- Node.js & NPM
- MySQL >= 8.0
- Git

### Step-by-Step Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Desphyr/parabot.git
   cd parabot
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Install Node Dependencies**
   ```bash
   npm install
   ```

4. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure Database**
   ```bash
   Edit your `.env` file:env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tugasid_parabot
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run Migrations and Seeders**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

7. **Compile Assets**
   ```bash
   npm run dev
   # or for production
   npm run production
   ```

8. **Start Development Server**
   ```bash
   php artisan serve
   ```

   Visit `http://localhost:8000` to access the application.

## ⚙️ Configuration

### Environment Variables

```env
# Application
APP_NAME="parabot"
APP_ENV=local
APP_KEY=base64:
APP_DEBUG=true
APP_URL=http://localhost

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tugasid_parabot
DB_USERNAME=root
DB_PASSWORD=

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=parabot.tugas1.id
MAIL_PORT=465
MAIL_USERNAME=admin@parabot.tugas1.id
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="admin@parabot.tugas1.id"
MAIL_FROM_NAME="${APP_NAME}"
```

### Default User Accounts

After running the seeders, you can use these default accounts:

**Admin Account**
- Email: `admin@parabot.tugas1.id`
- Password: `k2%v&Hnj.ob{`

**Customer Account**
- Email: `customer@seacatering.com`
- Password: `customer123`

## 🗄️ Database Setup

The application uses several key tables:

- **users** - User accounts and authentication
- **meal_plans** - Available meal plan types
- **subscriptions** - Customer subscription records
- **subscription_meals** - Meal selections per subscription
- **subscription_delivery_days** - Delivery day preferences
- **subscription_paused_days** - Pause period tracking
- **contacts** - Customer inquiries
- **experience_users** - Customer reviews and ratings

For detailed database structure, see [DATABASE_STRUCTURE.md](DATABASE_STRUCTURE.md).

## 🎮 Usage

### Customer Workflow
1. **Registration/Login** - Create account or sign in
2. **Browse Meal Plans** - View available Diet, Protein, and Royal plans
3. **Create Subscription** - Select plan, meals, and delivery schedule
4. **Manage Subscription** - Pause, resume, or cancel as needed
5. **Leave Reviews** - Share experiences and rate services

### Admin Workflow
1. **Dashboard Overview** - Monitor key metrics and statistics
2. **Subscription Management** - Approve/reject pending subscriptions
3. **Customer Support** - Handle contact inquiries
4. **Analytics Review** - Track revenue and plan distribution

### Key Pages
- `/` - Homepage with service overview
- `/menu` - Available meal plans
- `/subscription` - Subscription creation form
- `/home` - Customer dashboard
- `/dashboard` - Admin panel
- `/contact` - Customer support
- `/terms-of-service` - Terms of Service
- `/privacy-policy` - Privacy Policy

## 📚 API Documentation

### Subscription Management

```http
POST /subscription
Content-Type: application/json

{
  "name": "John Doe",
  "phone": "08123456789",
  "plan": "diet",
  "meal-type": ["breakfast", "lunch"],
  "delivery-day": ["monday", "wednesday", "friday"],
  "allergies": "Nuts, Shellfish"
}
```

### Subscription Control

```http
PATCH /subscription/{id}/pause
Content-Type: application/json

{
  "pause_start_date": "2024-01-15",
  "pause_end_date": "2024-01-30",
  "reason": "Vacation"
}
```

## 📁 Project Structure

```
catering_app/
├── app/
│   ├── Http/Controllers/     # Application controllers
│   ├── Models/              # Eloquent models
│   ├── Services/            # Business logic services
│   └── Facades/             # Custom facades
├── database/
│   ├── migrations/          # Database migrations
│   └── seeders/             # Database seeders
├── public/
│   ├── css/                 # Compiled stylesheets
│   └── js/                  # JavaScript files
├── resources/
│   ├── views/               # Blade templates
│   └── sass/                # SCSS source files
├── routes/
│   ├── web.php              # Web routes
│   └── api.php              # API routes
└── storage/                 # File storage
```

### Key Models
- `User` - User management and authentication
- `MealPlan` - Meal plan definitions
- `Subscription` - Customer subscriptions
- `SubscriptionMeal` - Selected meals per subscription
- `Contact` - Customer inquiries
- `ExperienceUser` - Customer reviews

### Key Controllers
- `RouteController` - Main page routing
- `SubscriptionController` - Subscription management
- `ContactController` - Customer support
- `ExperienceUserController` - Review system
- `HomeController` - Dashboard management

## 🤝 Contributing

We welcome contributions to improve SEA Catering App! Here's how you can help:

1. **Fork the Project**
2. **Create a Feature Branch** (`git checkout -b feature/AmazingFeature`)
3. **Commit Changes** (`git commit -m 'Add some AmazingFeature'`)
4. **Push to Branch** (`git push origin feature/AmazingFeature`)
5. **Open a Pull Request**

### Development Guidelines
- Follow PSR-12 coding standards
- Write meaningful commit messages
- Add tests for new features
- Update documentation as needed
- Ensure responsive design compatibility

### Reporting Issues
- Use the GitHub issue tracker
- Provide detailed reproduction steps
- Include environment information
- Add screenshots for UI issues

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Author

**AchmadRoyhanAbdillah**
- GitHub: [@AchmadRoyhanAbdillah](https://github.com/Desphyr)
- Repository: [@Parabot](https://github.com/Despyhr/parabot)

## 🙏 Acknowledgments

- Laravel framework for the robust foundation
- Bootstrap for responsive UI components
- All contributors who help improve this project
- The open-source community for inspiration and support

---

<p align="center">
  Made with ❤️ for better catering management
</p>
