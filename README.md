# Movie Library

A responsive web application for managing and viewing a collection of movies.

## Features

- **Responsive Design**: Fully responsive layout that works seamlessly across desktop, tablet, and mobile devices.
- **Movie Grid & Search**: Search for your favorite movies and manage your collection in a dynamic grid.
- **Interactive Navigation**: Features a sticky header with a smooth burger menu for mobile navigation.
- **Contact Form**: A functional contact form with basic validation, processed via PHP.
- **Location Map**: Integrated Google Maps iframe displaying the business location.

## Technologies Used

- **HTML5**: Semantic markup for the structure of the application.
- **CSS3 (Vanilla)**: Custom styling including Flexbox, CSS Grid, and responsive media queries.
- **JavaScript (Vanilla)**: DOM manipulation for the mobile menu, search functionality, and movie grid interactions.
- **PHP**: Server-side processing for the contact form (`process_form.php`).

## Project Structure

- `index.html`: The main landing page.
- `style.css`: The primary stylesheet.
- `script.js`: Handles frontend logic and interactivity.
- `process_form.php`: PHP script to handle form submissions from the contact section.
- `assets/`: Contains images and media used in the project.
- `public/`: Public assets.
- Python utilities: Scripts for manipulating logo assets (`crop_logo.py`, `crop_real_logo.py`, `extract_logo.py`).

## Setup and Usage

To run this project locally, you will need a local server environment that supports PHP (such as XAMPP, WAMP, MAMP, or the built-in PHP development server).

1. Clone or download the repository.
2. Navigate to the project directory:
   ```bash
   cd Movie-Library
   ```
3. Start a local PHP server:
   ```bash
   php -S localhost:8000
   ```
4. Open your web browser and navigate to `http://localhost:8000` to view the application.

## Credits

- Design and layout concepts inspired by modern streaming platforms.
- Photos by Felix Mooneeram & Serge Kutuzov on Unsplash.
