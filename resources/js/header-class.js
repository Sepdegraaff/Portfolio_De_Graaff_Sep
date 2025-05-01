console.log('FinisherHeader script loaded!');

let finisherHeaderInstance = null;

const initializeFinisherHeader = () => {
    const headerElement = document.querySelector('.finisher-header'); // Select the header element
    if (headerElement) {
        const existingCanvas = document.getElementById('finisher-canvas');
        if (existingCanvas) {
            existingCanvas.remove();
        }

        finisherHeaderInstance = new FinisherHeader({
            count: 33,
            size: {
                min: 2,
                max: 18,
                pulse: 0
            },
            speed: {
                x: {
                    min: 0,
                    max: 0.4
                },
                y: {
                    min: 0,
                    max: 0.6
                }
            },
            colors: {
                background: "#201e30",
                particles: ["#fbfcca", "#d7f3fe", "#e6053a"]
            },
            blending: "overlay",
            opacity: {
                center: 0.35,
                edge: 0
            },
            skew: -1,
            shapes: ["c"]
        });

        console.log('FinisherHeader initialized successfully.');
    } else {
        console.log('No .finisher-header element found.');
    }
};

document.addEventListener('DOMContentLoaded', () => {
    initializeFinisherHeader();

    let resizeTimeout = null;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout); // Clear the previous timeout
        resizeTimeout = setTimeout(() => {
            console.log('Resizing complete, reinitializing FinisherHeader.');
            initializeFinisherHeader();
        }, 200); // Wait 200ms after resizing stops
    });
});
