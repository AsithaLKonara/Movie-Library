document.addEventListener('DOMContentLoaded', () => {
    const burgerMenu = document.getElementById('burger-menu');
    const mobileNav = document.getElementById('mobile-nav');
    
    // Toggle mobile navigation on burger menu click
    burgerMenu.addEventListener('click', () => {
        burgerMenu.classList.toggle('active');
        mobileNav.classList.toggle('open');
        
        // Prevent scrolling when menu is open
        if (mobileNav.classList.contains('open')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    });

    // Close mobile navigation when a menu item is clicked
    const mobileMenuItems = mobileNav.querySelectorAll('.menu-item');
    mobileMenuItems.forEach(item => {
        item.addEventListener('click', () => {
            burgerMenu.classList.remove('active');
            mobileNav.classList.remove('open');
            document.body.style.overflow = '';
        });
    });
    // --- TVMaze API Search & Grid Logic ---
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const moviesGrid = document.getElementById('moviesGrid');
    let searchTimeout = null;

    if (searchInput && searchResults && moviesGrid) {
        searchInput.addEventListener('input', (e) => {
            const query = e.target.value.trim();
            clearTimeout(searchTimeout);
            
            if (query.length < 2) {
                searchResults.style.display = 'none';
                searchResults.innerHTML = '';
                return;
            }

            searchTimeout = setTimeout(() => {
                fetch(`https://api.tvmaze.com/search/shows?q=${encodeURIComponent(query)}`)
                    .then(res => res.json())
                    .then(data => {
                        searchResults.innerHTML = '';
                        if (data.length === 0) {
                            searchResults.style.display = 'none';
                            return;
                        }
                        
                        searchResults.style.display = 'flex';
                        data.slice(0, 5).forEach(item => {
                            const show = item.show;
                            const el = document.createElement('div');
                            el.className = 'search-result-item';
                            const imgSrc = show.image && show.image.medium ? show.image.medium : 'https://via.placeholder.com/40x60?text=No+Image';
                            el.innerHTML = `
                                <img src="${imgSrc}" alt="${show.name}">
                                <span>${show.name}</span>
                            `;
                            
                            el.addEventListener('click', () => {
                                addMovieToGrid(show);
                                searchResults.style.display = 'none';
                                searchInput.value = '';
                            });
                            
                            searchResults.appendChild(el);
                        });
                    })
                    .catch(err => console.error('Search error:', err));
            }, 500);
        });

        // Hide search results on outside click
        document.addEventListener('click', (e) => {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.style.display = 'none';
            }
        });

        function addMovieToGrid(show) {
            const desc = show.summary ? show.summary.replace(/<[^>]*>?/gm, '').substring(0, 100) + '...' : 'No description available.';
            const imgSrc = show.image && show.image.original ? show.image.original : 'https://via.placeholder.com/427x606?text=No+Image';
            
            const card = document.createElement('div');
            card.className = 'movie-card';
            card.innerHTML = `
                <div class="movie-image" style="background-image: url('${imgSrc}');"></div>
                <div class="add-icon remove-btn">
                    <div class="add-bg"></div>
                    <div class="plus-line-1"></div>
                    <div class="plus-line-2"></div>
                </div>
                <div class="movie-info">
                    <h3 class="movie-card-title">${show.name}</h3>
                    <p class="movie-desc">${desc}</p>
                </div>
            `;
            
            card.querySelector('.remove-btn').addEventListener('click', () => {
                card.remove();
            });
            
            moviesGrid.appendChild(card);
        }

        // Attach remove event to existing hardcoded cards
        const existingRemoveBtns = moviesGrid.querySelectorAll('.add-icon');
        existingRemoveBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                this.closest('.movie-card').remove();
            });
        });
    }

    // --- Form Validation & AJAX Submission ---
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const firstName = document.getElementById('firstName').value.trim();
            const lastName = document.getElementById('lastName').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();
            const terms = document.getElementById('terms').checked;
            
            if (!firstName || !lastName || !email || !message || !terms) {
                alert('Please fill out all required fields and agree to the Terms & Conditions.');
                return;
            }
            
            // Simple email regex validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

            const formData = new FormData(contactForm);
            
            fetch('process_form.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    contactForm.reset();
                } else {
                    alert(data.message + '\n' + (data.errors ? data.errors.join('\n') : ''));
                }
            })
            .catch(err => {
                console.error('Submission error:', err);
                alert('An error occurred while submitting the form. Please try again.');
            });
        });
    }
});
