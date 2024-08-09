let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex >= slides.length) {slideIndex = 0} // Fixing the condition here
    slides[slideIndex].style.display = "block"; // Adjusted index here
    setTimeout(showSlides, 2000); // Change image every 10 seconds
}
