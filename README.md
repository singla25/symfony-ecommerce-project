# 🛒 Symfony E-commerce Website

Welcome to **ShopNext**, a fully-featured, responsive, and modern **e-commerce website** built with **Symfony** and **Bootstrap 5**. This project is a portfolio-level application designed with scalability, clean code practices, and real-world usability in mind.

---

## 🚀 Live Demo

📌 Coming Soon — *Deployed link will be added here!*

---

## 🌟 Features at a Glance

✅ Responsive & mobile-friendly layout
✅ Dynamic product listings & search
✅ Secure user authentication (register/login)
✅ Cart & checkout system with order summary
✅ Product ratings and user reviews
✅ Newsletter subscription integration
✅ Admin dashboard for product/order control
✅ Interactive UI using jQuery & Ajax
✅ Organized project structure & clean code

---

## 🧰 Tech Stack

**Frontend**
🔹 Bootstrap 5
🔹 HTML5, CSS3, JavaScript, jQuery, Ajax

**Backend**
🔹 PHP (Symfony Framework)
🔹 Doctrine ORM

**Database**
🔹 MySQL

**Tools & Dependencies**
🔹 Composer, Yarn
🔹 Twig (Templating)
🔹 Symfony Encore (Webpack)

---

## 📂 Pages & Functionality

| Page                | Description                                         |
| ------------------- | --------------------------------------------------- |
| 🏠 Home             | Hero banner, featured collections, latest arrivals  |
| 🛍️ Shop            | Filtered product grids, pagination, categories      |
| 🧾 Product Detail   | Full product view, add to cart, rating system       |
| 🛒 Cart & Checkout  | Dynamic cart, remove/edit items, checkout form      |
| 📞 Contact          | Contact form with map and contact details           |
| 📰 Blog (Optional)  | Blog articles & announcements                       |
| 🙍‍♂️ About         | Brand or team information                           |
| 🔐 Login/Register   | Secure authentication using Symfony security bundle |
| 🛠️ Admin Dashboard | Manage products, users, orders, etc.                |

---

## ⚙️ How to Set Up Locally

```bash
# 1. Clone the repository
git clone https://github.com/singla25/symfony-ecommerce-project.git
cd symfony-ecommerce-project

# 2. Install dependencies
composer install
yarn install
yarn encore dev

# 3. Set up environment
cp .env .env.local
# Edit DB credentials in .env.local

# 4. Create and migrate the database
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load

# 5. Run the Symfony local server
symfony server:start
```

---

## 🖼️ Sneak Peek (Screenshots)

| Home Page       | Shop Page       | Product Detail  |
| --------------- | --------------- | --------------- |
| *(Coming Soon)* | *(Coming Soon)* | *(Coming Soon)* |

---

## ✨ Highlights

* Built with **Symfony best practices**
* Modular code with **Twig**, **Services**, and **MVC pattern**
* Uses **Doctrine Entities** and lifecycle events like `createdAt`
* Efficient asset management using **Encore + Yarn**
* Easily customizable & scalable for real-world deployments

---

## 👨‍💻 Author

**Sahil Singla**
🎓 Aspiring Full Stack Developer
🔗 [LinkedIn](https://www.linkedin.com/in/ssingla25) | 📬 [sahilrajiv.singla@gmail.com](mailto:sahilrajiv.singla@gmail.com)

---

## 📝 License & Use

This project is for **educational and personal portfolio** purposes only.
Icons, images, and other assets may require licensing for commercial use.

---

> ⭐ **Give a star** if you like it! Fork it, use it, and customize it your way!
