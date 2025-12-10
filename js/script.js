document.addEventListener('DOMContentLoaded', function() {
    // Validasi form kontak
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', function(event) {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            if (!name || !email || !message) {
                alert('Semua field harus diisi!');
                event.preventDefault();
            }
        });
    }

    // Smooth scroll untuk navigasi
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Fungsi animasi counter
    function animateCounter(id, target) {
        const element = document.getElementById(id);
        if (!element) return;
        let current = 0;
        const increment = target / 100; // Sesuaikan kecepatan animasi
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 20); // Interval 20ms untuk animasi smooth
    }

    // Animasi counter untuk statistik (hanya sekali saat masuk viewport)
    const statsSection = document.getElementById('stats');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter('students', 500);
                    animateCounter('lecturers', 50);
                    animateCounter('graduates', 300);
                    animateCounter('partners', 20);
                    observer.unobserve(statsSection); // Hentikan observasi setelah animasi
                }
            });
        }, { threshold: 0.5 }); // Trigger saat 50% elemen terlihat
        observer.observe(statsSection);
    }

    // Animasi scroll untuk elemen dengan class animate-on-scroll
    const animateElements = document.querySelectorAll('.animate-on-scroll');
    if (animateElements.length > 0) {
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, { threshold: 0.1 }); // Trigger saat 10% elemen terlihat
        animateElements.forEach(el => scrollObserver.observe(el));
    }

    // Handler untuk modal mata kuliah
    const courseCards = document.querySelectorAll('.course-card');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    courseCards.forEach(card => {
        card.addEventListener('click', function() {
            const title = this.getAttribute('data-title');
            const desc = this.getAttribute('data-desc');
            if (modalTitle && modalDesc) {
                modalTitle.textContent = title;
                modalDesc.textContent = desc;
            }
        });
    });
});
