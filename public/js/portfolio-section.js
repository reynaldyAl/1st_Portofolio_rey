// portfolio.js
document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS
    AOS.init({
        duration: 800,
        offset: 150,
        once: true
    });

    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    const grid = document.querySelector('.portfolio-grid');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            // Get filter value
            const filter = btn.dataset.filter;

            // Add animation class to grid
            grid.classList.add('filtering');

            // Filter items
            portfolioItems.forEach(item => {
                // Reset animation
                item.style.animation = 'none';
                item.offsetHeight; // Trigger reflow
                item.style.animation = null;

                if (filter === 'all' || item.dataset.category === filter) {
                    item.classList.remove('hidden');
                    item.classList.add('show');
                } else {
                    item.classList.add('hidden');
                    item.classList.remove('show');
                }
            });

            // Remove animation class after transition
            setTimeout(() => {
                grid.classList.remove('filtering');
            }, 500);
        });
    });

    // Modal functionality
    const modals = document.querySelectorAll('.modal');
    const modalBtns = document.querySelectorAll('.btn-demo');
    const closeBtns = document.querySelectorAll('.close-modal');

    modalBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const modalId = btn.dataset.modal;
            const modal = document.getElementById(modalId);
            modal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    });

    closeBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = btn.closest('.modal');
            modal.classList.remove('show');
            document.body.style.overflow = 'auto';
        });
    });

    // Close modal on outside click
    window.addEventListener('click', (e) => {
        modals.forEach(modal => {
            if (e.target === modal) {
                modal.classList.remove('show');
                document.body.style.overflow = 'auto';
            }
        });
    });

    // Add background patterns to cards
    const cards = document.querySelectorAll('.portfolio-card');
    cards.forEach(card => {
        const pattern = document.createElement('div');
        pattern.className = 'card-pattern';
        card.appendChild(pattern);
    });

    // Lazy loading images
    const images = document.querySelectorAll('.portfolio-img img');
    const imageOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px 50px 0px'
    };

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    }, imageOptions);

    images.forEach(img => imageObserver.observe(img));
});

//description for the portfolio section
document.querySelectorAll('.read-more-btn').forEach(btn => {
    btn.addEventListener('click', () => {
        const description = btn.closest('.project-description');
        const fullDescription = description.querySelector('.description-full');
        const isExpanded = fullDescription.classList.contains('show');
        
        fullDescription.classList.toggle('show');
        btn.textContent = isExpanded ? 'Read More' : 'Show Less';
        
        if (!isExpanded) {
            fullDescription.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    });
});