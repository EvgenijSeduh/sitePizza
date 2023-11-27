document.addEventListener("DOMContentLoaded", function () {
    var slideshow = document.getElementById("slideshow");
    var images = slideshow.getElementsByTagName("img");
    var currentIndex = 0;
    console.log("++++")

    function showNextSlide() {
        images[currentIndex].style.display = "none";
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].style.display = "block";
    }

    setInterval(showNextSlide, 10000);

    images[currentIndex].style.display = "block";
});