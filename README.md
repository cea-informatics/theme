<h1 align="center">Theme</h1>

This repository contains **Foxtown**, a custom WordPress child theme extending the [Blocksy](https://creativethemes.com/blocksy/) parent theme.

## Features

- **Parent theme:** Blocksy
- **Primary color:** `#0055A4` (CEA blue)
- Custom footer with site name and dynamic copyright year
- Lightweight — only overrides what needs to be customized

## Components

1. **style.css** – Theme metadata and custom CSS variables.
2. **functions.php** – Enqueues parent stylesheet and registers theme hooks.
3. **footer.php** – Custom footer template.

## Installation

### 1. Clone the repository

```bash
git clone git@github.com:cea-informatics/theme.git
```

### 2. Place in WordPress themes directory

```bash
cp -r theme /var/www/html/wp-content/themes/foxtown
```

### 3. Activate the theme

In the WordPress admin panel, go to **Appearance > Themes** and activate **Foxtown**.

> The Blocksy parent theme must be installed and active for this child theme to work.

---
<p align="center">© 2026 - CEA Informatics</p>
