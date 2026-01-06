import './bootstrap';

// Scroll reveal animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all sections
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('section');
    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(30px)';
        section.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(section);
    });
    
    // Typing effect for hero section (optional enhancement)
    const titles = ['PHP Developer', 'Laravel Specialist', 'Backend Engineer', 'Full Stack Developer'];
    let titleIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    const titleElement = document.querySelector('.typing-text');
    
    if (titleElement) {
        function type() {
            const currentTitle = titles[titleIndex];
            
            if (isDeleting) {
                titleElement.textContent = currentTitle.substring(0, charIndex - 1);
                charIndex--;
            } else {
                titleElement.textContent = currentTitle.substring(0, charIndex + 1);
                charIndex++;
            }
            
            if (!isDeleting && charIndex === currentTitle.length) {
                setTimeout(() => isDeleting = true, 2000);
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                titleIndex = (titleIndex + 1) % titles.length;
            }
            
            const typingSpeed = isDeleting ? 50 : 100;
            setTimeout(type, typingSpeed);
        }
        
        // Uncomment to enable typing effect
        // type();
    }
});
