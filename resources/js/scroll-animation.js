document.addEventListener("DOMContentLoaded", () => {
    const sections = [
        {
            sectionSelector: "#scroll-section-1",
            elementSelector: ".scale-up-on-scroll-1",
            scaleStart: 1,
            scaleEnd: 2,
            startScrollOffset: 0,
            endScrollOffset: 0,
            scalingSpeed: 2,
        },
        {
            sectionSelector: "#scroll-section-2",
            elementSelector: ".scale-up-on-scroll-2",
            scaleStart: 1,
            scaleEnd: 2,
            startScrollOffset: 0,
            endScrollOffset: 0,
            scalingSpeed: 2,
        },
    ];

    const handleScroll = (config) => {
        const { sectionSelector, elementSelector, scaleStart, scaleEnd, startScrollOffset, endScrollOffset, scalingSpeed } = config;

        const section = document.querySelector(sectionSelector);
        const element = document.querySelector(elementSelector);

        if (!section || !element) {
            console.warn(`Section or element not found for selectors: ${sectionSelector}, ${elementSelector}`);
            return;
        }

        const sectionTop = section.offsetTop;
        const sectionBottom = sectionTop + section.offsetHeight;
        const viewportTop = window.scrollY;
        const viewportBottom = viewportTop + window.innerHeight;

        const startScroll = sectionTop + startScrollOffset;
        const endScroll = sectionBottom - window.innerHeight + endScrollOffset;

        if (viewportBottom >= startScroll && viewportBottom <= endScroll) {
            let progress = (viewportBottom - startScroll) / (endScroll - startScroll);

            progress *= scalingSpeed;

            progress = Math.max(0, Math.min(progress, 1));

            const scale = scaleStart + progress * (scaleEnd - scaleStart);
            element.style.transform = `scale(${scale})`;
        } else if (viewportBottom < startScroll) {
            element.style.transform = `scale(${scaleStart})`;
        } else if (viewportBottom > endScroll) {
            element.style.transform = `scale(${scaleEnd})`;
        }
    };

    // Attach scroll listener to observe each defined section
    window.addEventListener("scroll", () => {
        sections.forEach((config) => handleScroll(config));
    });
});
