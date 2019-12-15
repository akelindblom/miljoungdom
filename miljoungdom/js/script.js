/* Navbar shrink on scroll */
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 35 || document.documentElement.scrollTop > 35) {
        document.getElementById("logo").style.fontSize = "1em";
    }
    else {
        document.getElementById("logo").style.fontSize = "1.5em";
    }
}


/* Navbar dropdown onclick function */
function dropdownNavbar() {
    var x = document.getElementById("dropdownMenu");
    if (x.style.display === "grid") {
        x.style.display = "none";
    } else {
        x.style.display = "grid";
    }
}

/* Slideshow */
var slideIndex = 1;
showDivs(slideIndex);

function slide(n) {
    clearInterval(myTimer);
    myTimer = setInterval(function(){plusSlides(n + 1)}, 10000);
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("slide");
    if (n > x.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = x.length
    } 
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "grid";
}

function currentSlide(n){
    clearInterval(myTimer);
    myTimer = setInterval(function(){plusSlides(n + 1)}, 10000);
    showDivs(slideIndex = n);
}

function plusSlides(n){
    clearInterval(myTimer);
    if (n < 0){
    showDivs(slideIndex -= 1);
    } else {
    showDivs(slideIndex += 1); 
    }
    if (n == -1){
    myTimer = setInterval(function(){plusSlides(n + 2)}, 10000);
    } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 10000);
    }
}

window.addEventListener("load",function() {
    showDivs(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 10000);
})
