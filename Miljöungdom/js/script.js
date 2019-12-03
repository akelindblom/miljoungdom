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
