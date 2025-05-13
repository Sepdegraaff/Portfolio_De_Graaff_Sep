document.addEventListener("DOMContentLoaded", () => {
    let slideIndex = 1;
    const slides = document.getElementsByClassName("mySlide");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    showSlides(slideIndex);

    if (prevBtn && nextBtn) {
        prevBtn.addEventListener("click", () => plusSlides(-1)); // Add click listeners
        nextBtn.addEventListener("click", () => plusSlides(1));
    }

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        if (n > slides.length) slideIndex = 1;
        if (n < 1) slideIndex = slides.length;

        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.add("opacity-0", "translate-x-full", "z-0");
            slides[i].classList.remove("opacity-100", "translate-x-0", "z-10", "flex");
        }

        const currentSlide = slides[slideIndex - 1];
        currentSlide.classList.remove("opacity-0", "translate-x-full");
        currentSlide.classList.add("opacity-100", "translate-x-0", "z-10", "flex");
    }
});
