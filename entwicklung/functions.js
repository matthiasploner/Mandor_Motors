function dropdownFunction() {
    document.getElementById("pcDropdown").classList.toggle("show");
}
function navopen() {
    document.getElementById("mobile-nav").style.width = "100%";
}
function navclose() {
    document.getElementById("mobile-nav").style.width = "0%";
}

let slideIndex = 1;
showSlides(slideIndex);

function arrowNextSlide(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slide-1");

    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex-1].style.display = "block";
}

document.getElementById("log-out").addEventListener("click", function(){
    document.cookie = "benutzername=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    document.cookie = "token=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=/";
    location.reload();
});