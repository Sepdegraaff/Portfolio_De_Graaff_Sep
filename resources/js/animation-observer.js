document.addEventListener("DOMContentLoaded", () => {
    const createObserver = (addClass, removeClass) => {
        return new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add(addClass);
                } else if (removeClass) {
                    entry.target.classList.remove(removeClass);
                }
            });
        });
    };

    const hiddenAnimationObserver = createObserver('show-animation', 'show-animation');
    const observeElements = (selector, observer) => {
        const elements = document.querySelectorAll(selector);
        elements.forEach((el) => observer.observe(el));
    };

    observeElements('.hidden-animation', hiddenAnimationObserver);
});

