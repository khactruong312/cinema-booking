document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".hero-slide");
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach(function (slide) {
            slide.classList.remove("active");
        });

        slides[index].classList.add("active");
    }

    if (slides.length > 0) {
        showSlide(currentSlide);

        setInterval(function () {
            currentSlide++;

            if (currentSlide >= slides.length) {
                currentSlide = 0;
            }

            showSlide(currentSlide);
        }, 5000);
    }

    const navbar = document.querySelector(".cine-navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 80) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const pageLoader = document.getElementById("page-loader");

    window.addEventListener("load", function () {
        if (pageLoader) {
            setTimeout(function () {
                pageLoader.classList.add("hide");
            }, 700);
        }
    });
});