# Beulah Chambers

Official website for **K.H Bamiwola & Co (Beulah Chambers)** — a Nigerian law firm site with practice areas, team profiles, articles/blog, and contact forms. Built with PHP, MySQL, HTML, CSS, and JavaScript.

---

## Features

- **Home** — Hero slider, firm overview, practice areas, and call-to-action sections  
- **About** — Firm story, group photo, vision, and published works  
- **Team** — Card grid of lawyers and consultants with flip cards and individual profile pages  
- **Practice areas** — Dedicated pages (Labour Law, Commercial Law, Human Rights, Arbitration, and more)  
- **Articles / blog** — Public articles with an admin backend for posts, topics, and users  
- **Contact** — Contact form and free evaluation modal  
- **Responsive layout** — Works on desktop, tablet, and mobile  

---

## Tech stack

| Layer | Technology |
|--------|------------|
| Backend | PHP |
| Database | MySQL |
| Frontend | HTML5, CSS3, JavaScript (jQuery) |
| Server | Apache (XAMPP / similar) |
| Dependencies | Composer (see `composer.json`) |

---

## Requirements

- PHP 7.4+ (8.x recommended)  
- MySQL 5.7+ or MariaDB  
- Apache with `mod_rewrite` (optional, depending on your `.htaccess` use)  
- [XAMPP](https://www.apachefriends.org/) (or another local LAMP/WAMP stack)  

---

## Local setup

1. **Clone or copy the project** into your web root, for example:

   ```text
   C:\xampp\htdocs\beulah-chambers
   ```

2. **Start Apache and MySQL** from the XAMPP Control Panel.

3. **Configure paths** in `path.php`:

   ```php
   define("ROOT_PATH", realpath(dirname(__FILE__)));
   define("BASE_URL", "http://localhost/beulah-chambers");
   ```

   Update `BASE_URL` if your folder name or host differs.

4. **Configure the database** in `app/database/connect.php` (host, username, password, database name) to match your MySQL setup.

5. **Create / import the database** used by the blog and admin (if you have an SQL dump, import it via phpMyAdmin).

6. **Open the site** in a browser:

   ```text
   http://localhost/beulah-chambers
   ```

7. **Admin / blog** (when configured):

   ```text
   http://localhost/beulah-chambers/login.php
   http://localhost/beulah-chambers/admin/dashboard.php
   ```

---

## Project structure

```text
beulah-chambers/
├── index.php                 # Home
├── about.php                 # About
├── team.php                  # Team listing
├── articles.php              # Articles listing
├── contact.php               # Contact
├── path.php                  # ROOT_PATH & BASE_URL
├── assets/
│   ├── css/                  # Styles (main.css, etc.)
│   ├── js/                   # Scripts (main.js, hero-slider.js, etc.)
│   └── images/               # Photos, logos, practice images
├── team/                     # Individual team profile pages
├── practice-areas/           # Practice area pages
├── app/
│   ├── includes/             # Header, footer, team list & layout
│   ├── controllers/          # Posts, users, topics, messages
│   ├── database/             # DB connection helpers
│   └── helpers/              # Validation helpers
└── admin/                    # Blog / CMS admin (posts, topics, users)
```

---

## Main public pages

| Page | File |
|------|------|
| Home | `index.php` |
| About | `about.php` |
| Team | `team.php` |
| Articles | `articles.php` |
| Contact | `contact.php` |
| Practice areas | `practice-areas/*.php` |
| Team profiles | `team/*.php` |

---

## Notes

- Header and footer live in `app/includes/` and adjust base paths for pages under `team/` and `practice-areas/`.  
- Styles are mainly in `assets/css/main.css`.  
- Hero slider on the home page uses `assets/js/hero-slider.js`.  
- Keep `path.php` and DB credentials out of public repos if you deploy (use environment-specific configs where possible).  

---

## License

Private project for Beulah Chambers / K.H Bamiwola & Co. All rights reserved unless otherwise agreed.
