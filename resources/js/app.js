import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Scroll Reveal Logic
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    const fadeElements = document.querySelectorAll('.fade-in');
    fadeElements.forEach(el => revealObserver.observe(el));

    // 2. Animated Counter Logic
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const targetValue = parseInt(target.getAttribute('data-target'));
                if (targetValue) {
                    animateCounter(target, targetValue);
                }
                counterObserver.unobserve(target);
            }
        });
    }, { threshold: 0.2 }); // Lower threshold for better reliability

    const animateCounter = (element, target) => {
        let current = 0;
        const duration = 1500; // 1.5 seconds
        const startTime = performance.now();

        const updateCounter = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);

            // Ease out quad
            const val = Math.floor(progress * target);
            element.innerText = val.toLocaleString('id-ID');

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.innerText = target.toLocaleString('id-ID');
            }
        };

        requestAnimationFrame(updateCounter);
    };

    const counters = document.querySelectorAll('.counter');
    counters.forEach(counter => counterObserver.observe(counter));
});
