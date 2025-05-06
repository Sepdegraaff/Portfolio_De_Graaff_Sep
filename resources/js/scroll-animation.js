document.addEventListener("DOMContentLoaded", () => {
    const sections = [
        {
            sectionSelector: "#scroll-section-1",
            elementSelector: ".scale-up-on-scroll-1",
            scaleStart: 1,
            scaleEnd: 2,
            startScrollOffset: 1000,
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
        {
            sectionSelector: "#scroll-section-3",
            elementSelector: ".scale-up-on-scroll-3",
            scaleStart: 1,
            scaleEnd: 5,
            startScrollOffset: 0,
            endScrollOffset: 0,
            scalingSpeed: 2,
        },
        {
            sectionSelector: "#scroll-section-4",
            elementSelector: ".scale-up-on-scroll-4",
            scaleStart: 1,
            scaleEnd: 5,
            startScrollOffset: 0,
            endScrollOffset: 0,
            scalingSpeed: 2,
        },
        {
            sectionSelector: "#scroll-section-5",
            elementSelector: ".scale-up-on-scroll-5",
            scaleStart: 1,
            scaleEnd: 5,
            startScrollOffset: 0,
            endScrollOffset: 0,
            scalingSpeed: 2,
        },
        {
            sectionSelector: "#scroll-section-6",
            elementSelector: ".scale-up-on-scroll-6",
            scaleStart: 1,
            scaleEnd: 5,
            startScrollOffset: 0,
            endScrollOffset: 0,
            scalingSpeed: 2,
        },
        {
            sectionSelector: "#scroll-section-7",
            elementSelector: ".scale-up-on-scroll-7",
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

        if (section && element) {
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
            } else if (viewportBottom > sectionBottom) {
                element.style.transform = `scale(${scaleEnd})`;
            }
        }
    };

    window.addEventListener("scroll", () => {
        sections.forEach((config) => handleScroll(config));
    });
});
