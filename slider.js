document.addEventListener("DOMContentLoaded", function () {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.header_content');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.style.display = 'flex';
                setTimeout(() => {
                    slide.style.opacity = '1';
                }, 10);
            } else {
                slide.style.opacity = '0';
                setTimeout(() => {
                    slide.style.display = 'none';
                }, 500);
            }
        });
    }

    function nextSlide() {
        if (currentSlide > 3) {
            currentSlide = 0;
        }
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function prevSlide() {
        if (currentSlide < 1) {
            currentSlide = 3;
        }
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    }

    showSlide(currentSlide);

    document.querySelector('.left_icon').addEventListener('click', prevSlide);
    document.querySelector('.right_icon').addEventListener('click', nextSlide);
});

