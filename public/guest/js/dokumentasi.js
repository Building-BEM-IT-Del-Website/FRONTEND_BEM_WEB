
        class ResponsiveAnimationManager {
            constructor() {
                this.isMobile = window.innerWidth <= 768;
                this.isTablet = window.innerWidth <= 1024 && window.innerWidth > 768;
                this.prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
                this.scrollTicking = false;
                this.resizeTicking = false;
                
                this.init();
                this.setupEventListeners();
            }

            init() {
                this.setupIntersectionObserver();
                this.setupResponsiveAnimations();
                this.setupTouchSupport();
                this.setupPerformanceOptimizations();
            }

            setupEventListeners() {
                // Responsive resize handler with throttling
                window.addEventListener('resize', () => {
                    if (!this.resizeTicking) {
                        requestAnimationFrame(() => {
                            this.handleResize();
                            this.resizeTicking = false;
                        });
                        this.resizeTicking = true;
                    }
                });

                // Optimized scroll handler
                window.addEventListener('scroll', () => {
                    if (!this.scrollTicking) {
                        requestAnimationFrame(() => {
                            this.handleScroll();
                            this.scrollTicking = false;
                        });
                        this.scrollTicking = true;
                    }
                }, { passive: true });

                // Orientation change handler
                window.addEventListener('orientationchange', () => {
                    setTimeout(() => this.handleResize(), 100);
                });
            }

            setupIntersectionObserver() {
                const observerOptions = {
                    threshold: this.isMobile ? 0.1 : 0.3,
                    rootMargin: this.isMobile ? '50px' : '100px'
                };

                this.observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            this.animateElement(entry.target);
                        }
                    });
                }, observerOptions);

                // Observe elements for animation
                document.querySelectorAll('.animate-on-scroll').forEach(el => {
                    this.observer.observe(el);
                });
            }

            setupResponsiveAnimations() {
                // Adjust animation durations based on device
                const animationDuration = this.isMobile ? '0.3s' : '0.5s';
                const animationEasing = this.isMobile ? 'ease-out' : 'cubic-bezier(0.4, 0, 0.2, 1)';

                document.documentElement.style.setProperty('--animation-duration', animationDuration);
                document.documentElement.style.setProperty('--animation-easing', animationEasing);

                // Enhanced dot animations with responsive timing
                const dots = document.querySelectorAll('.dot');
                dots.forEach((dot, index) => {
                    const delay = this.isMobile ? index * 0.2 : index * 0.5;
                    dot.style.animationDelay = `${delay}s`;
                    dot.style.animationDuration = this.prefersReducedMotion ? '0s' : animationDuration;
                });
            }

            setupTouchSupport() {
                if (!this.isMobile) return;

                let touchStartX = 0;
                let touchStartY = 0;

                document.addEventListener('touchstart', (e) => {
                    touchStartX = e.touches[0].clientX;
                    touchStartY = e.touches[0].clientY;
                }, { passive: true });

                document.addEventListener('touchmove', (e) => {
                    if (!touchStartX || !touchStartY) return;

                    const touchEndX = e.touches[0].clientX;
                    const touchEndY = e.touches[0].clientY;
                    const diffX = touchStartX - touchEndX;
                    const diffY = touchStartY - touchEndY;

                    // Add touch feedback for interactive elements
                    const target = e.target.closest('.nav-menu a, .login-btn, .card-button');
                    if (target && Math.abs(diffX) < 10 && Math.abs(diffY) < 10) {
                        this.addTouchFeedback(target);
                    }
                }, { passive: true });
            }

            setupPerformanceOptimizations() {
                // Use transform instead of changing layout properties
                const style = document.createElement('style');
                style.textContent = `
                    .animate-on-scroll {
                        opacity: 0;
                        transform: translateY(30px);
                        transition: opacity var(--animation-duration) var(--animation-easing),
                                   transform var(--animation-duration) var(--animation-easing);
                    }
                    
                    .animate-on-scroll.animated {
                        opacity: 1;
                        transform: translateY(0);
                    }
                    
                    .touch-feedback {
                        transform: scale(0.95);
                        transition: transform 0.1s ease-out;
                    }
                    
                    @media (prefers-reduced-motion: reduce) {
                        *, *::before, *::after {
                            animation-duration: 0.01ms !important;
                            animation-iteration-count: 1 !important;
                            transition-duration: 0.01ms !important;
                        }
                    }
                    
                    @media (max-width: 768px) {
                        .hero {
                            transform: none !important;
                        }
                        
                        .nav-menu {
                            transition: all 0.3s ease;
                        }
                        
                        .nav-menu.mobile-active {
                            transform: translateY(0);
                            opacity: 1;
                        }
                    }
                `;
                document.head.appendChild(style);
            }

            animateElement(element) {
                if (this.prefersReducedMotion) {
                    element.style.opacity = '1';
                    return;
                }

                element.classList.add('animated');
                
                // Add stagger effect for multiple elements
                const siblings = Array.from(element.parentNode.children);
                const index = siblings.indexOf(element);
                const delay = this.isMobile ? index * 50 : index * 100;
                
                setTimeout(() => {
                    element.style.transform = 'translateY(0)';
                    element.style.opacity = '1';
                }, delay);
            }

            addTouchFeedback(element) {
                element.classList.add('touch-feedback');
                setTimeout(() => {
                    element.classList.remove('touch-feedback');
                }, 150);
            }

            handleResize() {
                const wasMobile = this.isMobile;
                this.isMobile = window.innerWidth <= 768;
                this.isTablet = window.innerWidth <= 1024 && window.innerWidth > 768;

                if (wasMobile !== this.isMobile) {
                    this.setupResponsiveAnimations();
                }
            }

            handleScroll() {
                const scrolled = window.pageYOffset;
                const hero = document.querySelector('.hero');
                
                // Disable parallax on mobile for better performance
                if (hero && !this.isMobile && !this.prefersReducedMotion) {
                    const rate = scrolled * -0.3;
                    hero.style.transform = `translate3d(0, ${rate}px, 0)`;
                }

                // Update navigation active state based on scroll position
                this.updateNavigationState(scrolled);
            }

            updateNavigationState(scrolled) {
                const sections = document.querySelectorAll('section[id]');
                const navLinks = document.querySelectorAll('.nav-menu a');

                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    const sectionId = section.getAttribute('id');

                    if (scrolled >= sectionTop && scrolled < sectionTop + sectionHeight) {
                        navLinks.forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === `#${sectionId}`) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }
        }

        // Enhanced DOM ready handler
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize responsive animation manager
            const animationManager = new ResponsiveAnimationManager();

            const navLinks = document.querySelectorAll('.nav-menu a');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));
                    
                    // Add active class to clicked link with animation
                    this.classList.add('active');
                    
                    // Add ripple effect
                    const ripple = document.createElement('span');
                    ripple.style.cssText = `
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(37, 99, 235, 0.3);
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        pointer-events: none;
                    `;
                    
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = (rect.width / 2 - size / 2) + 'px';
                    ripple.style.top = (rect.height / 2 - size / 2) + 'px';
                    
                    this.style.position = 'relative';
                    this.appendChild(ripple);
                    
                    setTimeout(() => ripple.remove(), 600);
                });
            });

            const loginBtn = document.querySelector('.login-btn');
            loginBtn.addEventListener('click', function() {
                const originalText = this.textContent;
                this.textContent = 'Loading...';
                this.disabled = true;
                
                setTimeout(() => {
                    this.textContent = originalText;
                    this.disabled = false;
                    alert('Fitur login akan segera tersedia!');
                }, 1000);
            });

            const loadingOverlay = document.createElement('div');
            loadingOverlay.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 9999;
                transition: opacity 0.5s ease-out;
            `;
            
            const spinner = document.createElement('div');
            spinner.style.cssText = `
                width: 50px;
                height: 50px;
                border: 3px solid rgba(255,255,255,0.3);
                border-top: 3px solid white;
                border-radius: 50%;
                animation: spin 1s linear infinite;
            `;
            
            loadingOverlay.appendChild(spinner);
            document.body.appendChild(loadingOverlay);
            
            // Add spinner animation
            const spinnerStyle = document.createElement('style');
            spinnerStyle.textContent = `
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
                @keyframes ripple {
                    to { transform: scale(4); opacity: 0; }
                }
            `;
            document.head.appendChild(spinnerStyle);
            
            // Remove loading overlay after page load
            window.addEventListener('load', function() {
                setTimeout(() => {
                    loadingOverlay.style.opacity = '0';
                    setTimeout(() => {
                        loadingOverlay.remove();
                    }, 500);
                }, 500);
            });
        });

        function toggleMobileMenu() {
            const navMenu = document.querySelector('.nav-menu');
            const isActive = navMenu.classList.contains('mobile-active');
            
            if (isActive) {
                navMenu.style.transform = 'translateY(-20px)';
                navMenu.style.opacity = '0';
                setTimeout(() => {
                    navMenu.classList.remove('mobile-active');
                }, 300);
            } else {
                navMenu.classList.add('mobile-active');
                navMenu.style.transform = 'translateY(0)';
                navMenu.style.opacity = '1';
            }
        }

        const performanceMonitor = {
            fps: 60,
            lastTime: performance.now(),
            
            monitor() {
                const now = performance.now();
                this.fps = 1000 / (now - this.lastTime);
                this.lastTime = now;
                
                // Reduce animation quality if performance is poor
                if (this.fps < 30) {
                    document.documentElement.style.setProperty('--animation-duration', '0.2s');
                    document.querySelectorAll('.dot').forEach(dot => {
                        dot.style.animationDuration = '0.2s';
                    });
                }
                
                requestAnimationFrame(() => this.monitor());
            }
        };
        
        // Start performance monitoring
        requestAnimationFrame(() => performanceMonitor.monitor());
    