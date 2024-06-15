// JavaScript for Slider
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    const slides = document.getElementsByClassName("slide");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

let touchStartX = 0;
let touchEndX = 0;

document.querySelector(".slider").addEventListener("touchstart", function(event) {
    touchStartX = event.changedTouches[0].clientX;
}, false);

document.querySelector(".slider").addEventListener("touchend", function(event) {
    touchEndX = event.changedTouches[0].clientX;
    handleGesture();
}, false);

function handleGesture() {
    if (touchEndX < touchStartX) {
        // Swipe left
        plusSlides(1);
    } else if (touchEndX > touchStartX) {
        // Swipe right
        plusSlides(-1);
    }
}

function plusSlides(n) {
    slideIndex += n;
    const slides = document.getElementsByClassName("slide");
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    if (slideIndex < 1) {
        slideIndex = slides.length;
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}



// JavaScript for displaying course details
function showDetails(element) {
    const title = element.getAttribute('data-title');
    const description = element.getAttribute('data-description');
    const price = element.getAttribute('data-price');
    const enrollLink = element.getAttribute('data-enroll-link');

    document.getElementById('course-title').innerText = title;
    document.getElementById('course-description').innerText = description;
    document.getElementById('course-price').innerText = price;
    document.getElementById('course-enroll-link').setAttribute('href', enrollLink);

    document.getElementById('course-details').style.display = 'block';
}

function hideDetails() {
    document.getElementById('course-details').style.display = 'none';
}

