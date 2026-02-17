// ========================================
// TYPING EFFECT
// ========================================
const typingElement = document.getElementById('typed-name');
const fullText = 'Fernando Chamussola!';
let displayedText = '';
let phase = 'typing'; // typing, pausing, deleting

const TYPE_SPEED = 90;
const DELETE_SPEED = 55;
const PAUSE_AFTER_TYPE = 1200;
const PAUSE_AFTER_DELETE = 450;

function typeEffect() {
    if (phase === 'typing') {
        if (displayedText.length < fullText.length) {
            displayedText = fullText.slice(0, displayedText.length + 1);
            typingElement.textContent = displayedText;
            setTimeout(typeEffect, TYPE_SPEED);
        } else {
            phase = 'pausing';
            setTimeout(typeEffect, PAUSE_AFTER_TYPE);
        }
    } else if (phase === 'pausing') {
        phase = 'deleting';
        typeEffect();
    } else if (phase === 'deleting') {
        if (displayedText.length > 0) {
            displayedText = fullText.slice(0, displayedText.length - 1);
            typingElement.textContent = displayedText;
            setTimeout(typeEffect, DELETE_SPEED);
        } else {
            phase = 'typing';
            setTimeout(typeEffect, PAUSE_AFTER_DELETE);
        }
    }
}

// Start typing effect
typeEffect();

// ========================================
// PARTICLES.JS CONFIG
// ========================================
if (typeof particlesJS !== 'undefined') {
    particlesJS('particles-js', {
        particles: {
            number: {
                value: 80,
                density: {
                    enable: true,
                    value_area: 800
                }
            },
            color: {
                value: '#3b82f6'
            },
            shape: {
                type: 'circle'
            },
            opacity: {
                value: 0.5,
                random: true,
                anim: {
                    enable: true,
                    speed: 1,
                    opacity_min: 0.1,
                    sync: false
                }
            },
            size: {
                value: 3,
                random: true,
                anim: {
                    enable: true,
                    speed: 2,
                    size_min: 0.1,
                    sync: false
                }
            },
            line_linked: {
                enable: true,
                distance: 150,
                color: '#3b82f6',
                opacity: 0.2,
                width: 1
            },
            move: {
                enable: true,
                speed: 1,
                direction: 'none',
                random: true,
                straight: false,
                out_mode: 'out',
                bounce: false
            }
        },
        interactivity: {
            detect_on: 'canvas',
            events: {
                onhover: {
                    enable: true,
                    mode: 'grab'
                },
                onclick: {
                    enable: true,
                    mode: 'push'
                },
                resize: true
            },
            modes: {
                grab: {
                    distance: 140,
                    line_linked: {
                        opacity: 0.5
                    }
                },
                push: {
                    particles_nb: 4
                }
            }
        },
        retina_detect: true
    });
}

// ========================================
// MOBILE NAVIGATION
// ========================================
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');
const navLinks = document.querySelectorAll('.nav-link');

navToggle.addEventListener('click', () => {
    navToggle.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Close menu when clicking a link
navLinks.forEach(link => {
    link.addEventListener('click', () => {
        navToggle.classList.remove('active');
        navMenu.classList.remove('active');
    });
});

// ========================================
// SMOOTH SCROLL
// ========================================
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerOffset = 80;
            const elementPosition = target.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// ========================================
// SCROLL ANIMATIONS
// ========================================
const sections = document.querySelectorAll('.section');

const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

sections.forEach(section => {
    sectionObserver.observe(section);
});

// ========================================
// NAVBAR SCROLL EFFECT
// ========================================
let lastScroll = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 50) {
        navbar.style.background = 'rgba(15, 23, 42, 0.95)';
        navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.3)';
    } else {
        navbar.style.background = 'rgba(15, 23, 42, 0.8)';
        navbar.style.boxShadow = 'none';
    }

    lastScroll = currentScroll;
});

// ========================================
// ACTIVE NAV LINK ON SCROLL
// ========================================
const sectionIds = ['inicio', 'sobre', 'servicos', 'stacks', 'projetos', 'experiencia', 'contato'];

window.addEventListener('scroll', () => {
    let current = '';

    sectionIds.forEach(id => {
        const section = document.getElementById(id);
        if (section) {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (window.pageYOffset >= sectionTop - 100) {
                current = id;
            }
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
        }
    });
});

// Add active style to CSS via JS
const style = document.createElement('style');
style.textContent = `
    .nav-link.active {
        color: var(--primary) !important;
    }
`;
document.head.appendChild(style);
