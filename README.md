💡 About the Project

This project is a full-featured e-commerce website built with Symfony and Bootstrap 5. It features a dynamic, responsive interface combined with robust backend functionality to offer a real-world online shopping experience.

🚀 Key Features

✅ Fully responsive design using Bootstrap 5

✅ Dynamic product listing and single product pages

✅ User authentication (login, register)

✅ Shopping cart with AJAX add-to-cart (no page reload)

✅ Product ratings and reviews

✅ Newsletter subscription with backend form

✅ Admin dashboard for product & order management

✅ Smooth, modern UI animations and interactions

✅ Clean and modular code structure following best practices

⚙️ Tech Stack

Frontend: Bootstrap 5, HTML5, CSS3, JavaScript, jQuery, AJAX

Backend: Symfony (PHP)

Database: MySQL (Doctrine ORM)

Tools: Composer, Yarn, Webpack Encore, Twig (templating)

📄 Pages

🏠 Home Page — Hero section, banners, new arrivals, featured collections

🍭 Shop Page — Product grids, filters, and categories

🛒 Cart & Checkout — Add/remove items, dynamic cart, forms

🧳 Single Product Page — Detailed product view with dynamic rating

📰 Blog Page — Latest articles or announcements (optional)

📞 Contact Page — Contact form and store details

👤 About Page — Brand story or team introduction

📩 How to Run

Clone the repository:

git clone https://github.com/singla25/symfony-ecommerce-project.git
cd symfony-ecommerce-project

Install dependencies:

composer install
yarn install
yarn encore dev

Configure .env file with your database credentials.

Run migrations & seed data:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console doctrine:fixtures:load

Start local server:

symfony server:start

✨ Highlights

Transitions from static pages to a fully dynamic, scalable application

Built using Symfony best practices: routing, services, form handling

Uses AJAX for cart updates for a seamless UX

Styled with Bootstrap 5 utility classes for consistency

Easy to extend and customize thanks to modular code structure

🖼️ Screenshots

Home Page

Shop Page

Product Page







📝 Credits

Base HTML/CSS/JS structure inspired by tutorials from Chai aur Code

All images, icons, and fonts used are for educational/demo purposes

💬 Contact

Want to collaborate or have questions? Reach out:

LinkedIn: Sahil Singla

Email: sahilrajiv.singla@gmail.com

⚖️ License

This project is for educational and personal portfolio use only.
Commercial use of some assets (e.g., icons, images) may require licensing.