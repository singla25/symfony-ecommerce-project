# 🏍️ Symfony E-commerce Website - ShopNext

Welcome to **ShopNext**, a fully-featured, responsive, and modern **E-commerce website** built using **Symfony Framework**, **Bootstrap 5**, **jQuery**, and **Ajax**. This project is designed for learning real-world web application development, following clean architecture and scalable code practices.

---

## 🚀 Live Demo

*Coming Soon*

---

## ✨ Key Features

* Responsive & Mobile-Friendly UI (Bootstrap 5)
* Dynamic Product Listings with Filters & Pagination
* Secure User Authentication (Login/Register with Role-based Access)
* Add to Cart, Update Cart, Checkout Process (Order Summary)
* Product Ratings & User Reviews
* Admin Dashboard for Product Management
* Blog Integration for Updates/News
* Newsletter Subscription
* Future Scope: Payment Gateway & Revenue Analytics Page

---

## 🛠️ Tech Stack

**Frontend:** Bootstrap 5, HTML5, CSS3, JavaScript, jQuery, Ajax

**Backend:** PHP (Symfony Framework), Symfony Security Bundle, Doctrine ORM

**Database:** MySQL

**Tools:** Composer, Yarn, Symfony Encore (Webpack), Git & GitHub

**Libraries:** Chart.js, FullCalendar Scheduler, amCharts

---

## 📂 Pages & Modules

| Page / Module        | Description                                         |
| -------------------- | --------------------------------------------------- |
| Home                 | Hero Section, Featured Collections, Latest Arrivals |
| Shop                 | Product Grid View with Categories & Pagination      |
| Product Detail       | Full Product View, Add to Cart, Ratings             |
| Cart & Checkout      | Update/Delete Cart Items, Checkout Form             |
| Contact Us           | Contact Form with Google Maps                       |
| Blog                 | Latest Announcements & Updates                      |
| About Us             | Team & Brand Information                            |
| Login / Register     | Secure Authentication using Symfony Security Bundle |
| Admin Dashboard      | Product Management, Blog Management, Order Tracking |
| Future: Revenue Page | Analytics & Revenue Overview (Planned)              |

---

## 🔧 Installation & Setup Instructions

```bash
# 1. Clone the repository
git clone https://github.com/singla25/symfony-ecommerce-project.git
cd symfony-ecommerce-project

# 2. Install PHP & Node.js dependencies
composer install
yarn install

# 3. Remove Turbo & Asset Mapper (if installed)
composer remove symfony/ux-turbo symfony/asset-mapper

# 4. Install Encore & Frontend Libraries
composer require symfony/webpack-encore-bundle
yarn add bootstrap --save-dev
yarn add @popperjs/core --save-dev
yarn add sass-loader@^16.0.1 sass --dev
yarn add @fortawesome/fontawesome-free

# 5. Additional JS Libraries
yarn add chart.js
yarn add @fullcalendar/core @fullcalendar/daygrid
# For FullCalendar Scheduler (if access)
yarn add @fullcalendar/resource-timeline
yarn add @amcharts/amcharts5

# 6. Compile Frontend Assets
yarn watch

# 7. Environment Setup
cp .env .env.local
# Configure Database Credentials in .env.local

# 8. Security & User Management
composer require symfony/security-bundle
php bin/console make:user
php bin/console make:auth
composer require symfonycasts/verify-email-bundle
php bin/console make:registration-form
php bin/console security:hash-password

# 9. Database Setup
php bin/console doctrine:database:create
php bin/console make:entity UserDetail
composer require symfony/uid
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate
php bin/console make:form
php bin/console doctrine:migrations:diff
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load

# 10. Run Symfony Local Server
symfony server:start
```

---

## 📍 Highlights

* Built with Symfony Best Practices (MVC, Services, Dependency Injection)
* Role-Based Access Control (Admin/User segregation)
* Admin features include Product CRUD, Blog Management, and Planned Revenue Dashboard
* UUID Key Generator for Product & Order Entities
* Integrated Chart.js, FullCalendar, and amCharts for future analytics features
* Asset Management via Symfony Encore & Yarn
* Interactive UI Enhancements with jQuery & Ajax

---

## 📄 License

This project is for **educational and personal portfolio** purposes only.
Assets like images/icons may require licenses for commercial use.

---

## 👨‍💻 Author

**Sahil Singla**

* Aspiring Full Stack Developer
* [LinkedIn](https://www.linkedin.com/in/ssingla25)
* [Email](mailto:sahilrajiv.singla@gmail.com)

---

> ⭐ Give a star if you find this project helpful!
