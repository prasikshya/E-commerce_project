# 🛒 eCommerce Website using HTML, CSS, JS, PHP & MySQLi

This is a **fully functional eCommerce website** developed using **HTML**, **CSS**, **JavaScript**, **Bootstrap**, **PHP**, and integrated with a **MySQLi** database. It allows users to browse items, add them to a cart, and simulate a basic shopping experience.

---

## 📌 Features

- User registration and login system  
- Add to cart and checkout functionality  
- Dynamic product listing  
- Simple and clean UI using Bootstrap  
- MySQLi database integration  
- Reusable components (header, footer, etc.)

---

## ⚙️ Requirements

- [XAMPP](https://www.apachefriends.org/index.html) (Apache + MySQL)
- A web browser (Chrome, Firefox, etc.)

---

## 🚀 How to Run the Project Locally

1. **Start XAMPP**
   - Open the XAMPP control panel and start **Apache** and **MySQL**.

2. **Setup Project Directory**
   - Go to your `htdocs` folder inside the XAMPP installation directory.
   - Create a new folder named `ecommerce`.

3. **Project Structure**

   Inside the `ecommerce` folder, organize your files like this:

ecommerce/
├── css/ # All CSS files
├── fonts/ # All font files (e.g., glyphicons)
├── img/ # All images
├── js/ # JavaScript files
├── includes/
│ ├── check-if-added.php
│ ├── common.php
│ ├── header.php
│ └── footer.php
├── index.php
└── (other PHP files as needed)

4. **Database Setup**
   - Open your browser and go to [localhost/phpmyadmin](http://localhost/phpmyadmin).
   - Create a new database (e.g., `ecommerce`).
   - Import the provided `ecommerce.sql` file into this database.

5. **Launch the Website**
   - In your browser, go to:
     ```
     http://localhost/ecommerce/index.php
     ```
   - The website should load and be ready to use.

---

## 📂 Folder Description

| Folder      | Purpose                                  |
|-------------|------------------------------------------|
| `css/`      | Contains custom and Bootstrap styles     |
| `js/`       | Contains custom JavaScript files         |
| `img/`      | Contains all images used in the website  |
| `fonts/`    | Contains font files (e.g., glyphicons)   |
| `includes/` | Contains PHP components like header and footer |

---

## 📝 Notes

- Ensure that **XAMPP server is running** before accessing the site.
- This project is basic and ideal for learning eCommerce logic and MySQLi integration.
- Future improvements can include:
  - Payment gateway integration  
  - Product categories  
  - Admin dashboard  
  - Order tracking system

---

## 🙌 Credits

This project is created for educational purposes to understand how an eCommerce website works using core web technologies.

---

