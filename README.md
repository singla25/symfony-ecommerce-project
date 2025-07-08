# 🛍️ My E-commerce Website — Symfony + Bootstrap

[<img alt="E-commerce Website" width="100%" src="https://github.com/tech2etc/Youtube-Tutorials/blob/main/Build%20and%20Deploy%20Ecommerce%20Website%20With%20HTML%20CSS%20JavaScript%20Full%20Responsive%20Ecommerce%20Course%20FREE.PNG?raw=true" />](https://youtu.be/P8YuWEkTeuE/)

## 💡 About the Project

This project is a **full-featured e-commerce website**, originally based on a pure HTML/CSS/JS template inspired by [Tech2etc's free course](https://youtu.be/P8YuWEkTeuE/).  
I redesigned and extended it using **Bootstrap 5** for a modern, responsive front-end and integrated it with **Symfony** (PHP framework) to build a fully dynamic, database-driven, production-ready application.

---

## 🚀 Key Features

- ✅ Fully responsive design using **Bootstrap 5**
- ✅ Dynamic product listing and single product pages
- ✅ User authentication (login, register)
- ✅ Shopping cart & checkout functionality
- ✅ Product ratings and reviews
- ✅ Newsletter subscription with backend form
- ✅ Admin dashboard for product & order management
- ✅ Smooth, modern UI animations and interactions
- ✅ Clean and modular code structure following best practices

---

## ⚙️ Tech Stack

- **Frontend**: Bootstrap 5, HTML5, CSS3, JavaScript
- **Backend**: Symfony (PHP)
- **Database**: MySQL (Doctrine ORM)
- **Tools**: Composer, Yarn/NPM (for managing front-end assets), Twig (templating)

---

## 📄 Pages

- 🏠 **Home Page** — Hero section, banners, new arrivals, featured collections, etc.
- 🛍️ **Shop Page** — Product grids, filters, and categories
- 🛒 **Cart & Checkout** — Add/remove items, checkout forms
- 🧾 **Single Product Page** — Detailed product view with dynamic rating
- 📰 **Blog Page** — Latest articles or announcements (optional)
- 📞 **Contact Page** — Contact form and store details
- 🙍‍♂️ **About Page** — Brand story or team introduction

---

## 💌 How to Run

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/your-repo-name.git
    cd your-repo-name
    ```

2. Install dependencies:
    ```bash
    composer install
    yarn install
    yarn encore dev
    ```

3. Configure `.env` file with your database credentials.

4. Run migrations & seed data:
    ```bash
    php bin/console doctrine:database:create
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```

5. Start local server:
    ```bash
    symfony server:start
    ```

---

## ✨ Highlights

- Smoothly transitions from a **static template** to a **fully dynamic, maintainable, and scalable** application.
- Follows **Symfony best practices** (services, controllers, routes, forms, Twig).
- Uses **Bootstrap utility classes** for cleaner and faster styling.
- Well-documented and structured code — easy to extend or customize.

---

## 🖼️ Screenshots

| Home Page                      | Shop Page                       | Product Page                   |
| -------------------------------|---------------------------------|------------------------------- |
| ![Home](./screenshots/home.png) | ![Shop](./screenshots/shop.png) | ![Product](./screenshots/product.png) |

---

## 📝 Credits

- Base HTML/CSS template inspiration: [Tech2etc YouTube Course](https://youtu.be/P8YuWEkTeuE/)
- All icons, fonts, and sample images used are for educational and demonstration purposes.

---

## 💬 Contact

If you'd like to collaborate or have questions, feel free to reach out on [LinkedIn](https://www.linkedin.com/) or via email.

---

## ⚖️ License

This project is for educational and personal portfolio use only.  
Commercial use of assets (images, icons) might require proper licensing.

---

⭐ **Feel free to fork, star, and contribute!**
