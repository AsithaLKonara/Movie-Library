<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Library - Home</title>
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-menu">
        <div class="frame-3">
            <a href="#" class="logo" aria-label="Home">
                <div class="layer_1">
                    <!-- White vectors -->
                    <div class="vector v-w-1"></div>
                    <div class="vector v-w-2"></div>
                    <div class="vector v-w-3"></div>
                    <div class="vector v-w-4"></div>
                    <div class="vector v-w-5"></div>
                    <div class="vector v-w-6"></div>
                    <div class="vector v-w-7"></div>
                    <div class="vector v-w-8"></div>
                    <div class="vector v-w-9"></div>
                    
                    <!-- Orange vectors (#CC9601) -->
                    <div class="vector v-o-1"></div>
                    <div class="vector v-o-2"></div>
                    <div class="vector v-o-3"></div>
                    <div class="vector v-o-4"></div>
                    <div class="vector v-o-5"></div>
                    <div class="vector v-o-6"></div>
                </div>
            </a>
        </div>
        
        <nav class="menu">
            <a href="#" class="menu-item active">HOME</a>
            <a href="#" class="menu-item">OUR SCREENS</a>
            <a href="#" class="menu-item">SCHEDULE</a>
            <a href="#" class="menu-item">MOVIE LIBRARY</a>
            <a href="#" class="menu-item">LOCATION &amp; CONTACT</a>
        </nav>

        <div class="burger-menu" id="burger-menu" aria-label="Toggle Navigation">
            <div class="vector b-1"></div>
            <div class="vector b-2"></div>
            <div class="vector b-3"></div>
        </div>
    </header>

    <!-- Mobile Navigation Menu -->
    <nav class="mobile-nav" id="mobile-nav">
        <a href="#" class="menu-item active">HOME</a>
        <a href="#" class="menu-item">OUR SCREENS</a>
        <a href="#" class="menu-item">SCHEDULE</a>
        <a href="#" class="menu-item">MOVIE LIBRARY</a>
        <a href="#" class="menu-item">LOCATION &amp; CONTACT</a>
    </nav>

    <!-- Hero Banner -->
    <section class="hero-banner">
        <!-- Banner content will go here -->
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <h2 class="intro-title">MOVIE LIBRARY</h2>
        <p class="intro-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
    </section>

    <!-- Movies Section -->
    <section class="movies-section">
        <div class="movies-top">
            <h2 class="movies-title">Collect your favourites</h2>
            <div class="search-container">
                <input type="text" placeholder="Search title and add to grid" class="search-input">
            </div>
        </div>
        
        <div class="divider-line"></div>

        <div class="movies-grid">
            <!-- Card 1 -->
            <div class="movie-card">
                <div class="movie-image" style="background-image: url('assets/Rectangle%204.png');"></div>
                <div class="movie-info">
                    <h3 class="movie-card-title">Batman Returns</h3>
                    <p class="movie-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
                    <div class="add-icon">
                        <div class="add-bg"></div>
                        <div class="plus-line-1"></div>
                        <div class="plus-line-2"></div>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="movie-card">
                <div class="movie-image" style="background-image: url('assets/Rectangle%205.png');"></div>
                <div class="movie-info">
                    <h3 class="movie-card-title">Wild Wild West</h3>
                    <p class="movie-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
                    <div class="add-icon">
                        <div class="add-bg"></div>
                        <div class="plus-line-1"></div>
                        <div class="plus-line-2"></div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="movie-card">
                <div class="movie-image" style="background-image: url('assets/Rectangle%206.png');"></div>
                <div class="movie-info">
                    <h3 class="movie-card-title">The Amazing Spiderman</h3>
                    <p class="movie-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut…</p>
                    <div class="add-icon">
                        <div class="add-bg"></div>
                        <div class="plus-line-1"></div>
                        <div class="plus-line-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-header">
            <h2 class="contact-title">How to reach us</h2>
            <p class="contact-desc">Lorem ipsum dolor sit amet, consetetur.</p>
        </div>

        <div class="contact-content">
            <form class="contact-form">
                <div class="form-row">
                    <div class="form-group half">
                        <label>First Name *</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group half">
                        <label>Last Name *</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Telephone</label>
                    <input type="tel" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control textarea"></textarea>
                </div>
                
                <p class="required-text">*required fields</p>
                
                <div class="form-footer">
                    <label class="checkbox-label">
                        <input type="checkbox" class="custom-checkbox">
                        <span class="terms-text">I agree to the <span class="underline">Terms & Conditions</span></span>
                    </label>
                </div>
                
                <div class="submit-container">
                    <button type="submit" class="submit-btn">SUBMIT</button>
                </div>
            </form>
            
            <div class="contact-image"></div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="main-footer">
        <div class="footer-top">
            <div class="footer-address">
                IT Group<br>C. Salvador de Madariaga, 1<br>28027 Madrid<br>Spain
            </div>
            <div class="footer-social">
                <span>Follow us on</span>
                <div class="social-icon"></div>
                <div class="social-icon"></div>
            </div>
        </div>
        
        <div class="footer-divider"></div>
        
        <div class="footer-bottom">
            <div class="footer-copy">
                Copyright © 2022 IT Hotels. All rights reserved.
            </div>
            <div class="footer-credits">
                Photos by Felix Mooneeram <span class="credit-link">& Serge Kutuzov</span> <span class="credit-link">on Unsplash</span>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
