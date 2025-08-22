
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    
                    // Handle staggered animations
                    const staggerElements = entry.target.querySelectorAll('.stagger-animation');
                    staggerElements.forEach((el, index) => {
                        setTimeout(() => {
                            el.classList.add('animated');
                        }, index * 100);
                    });
                }
            });
        }, observerOptions);

        // Observe all sections with animations
        document.querySelectorAll('.animate-on-scroll').forEach(section => {
            observer.observe(section);
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll indicator functionality
        const scrollIndicator = document.querySelector('.scroll-indicator');
        scrollIndicator.addEventListener('click', () => {
            window.scrollTo({
                top: window.innerHeight,
                behavior: 'smooth'
            });
        });

        // Hide scroll indicator when at bottom
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
            
            if (scrolled > maxScroll - 100) {
                scrollIndicator.style.opacity = '0';
            } else {
                scrollIndicator.style.opacity = '1';
            }
        });

        // Pause animation on hover
        document.querySelectorAll('.org-row').forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.style.animationPlayState = 'paused';
            });
            
            row.addEventListener('mouseleave', () => {
                row.style.animationPlayState = 'running';
            });
        });
    