/**
 * This is javascript that was originally featured in w3schools
 * https://www.w3schools.com/howto/howto_js_slideshow.asp
 * 
 * I took it and changed it around a bit, i used it previously in my project3, i would love if you saw it
 * http://serenity.ist.rit.edu/~jm1132/140/project3/index.html
 */

var slideBeingUsed = 1;
showSlides(slideBeingUsed); // When the page starts, show the first slide


function showSlide(n) {
  slideBeingUsed = n;
  showSlides();
}

function showSlides() {
  var slidesList = document.getElementsByClassName("slide");
  for (var i = 0; i < slidesList.length; i++) {
    slidesList[i].style.display = "none";
  }

  slidesList[slideBeingUsed - 1].style.display = "block";

  if (slideBeingUsed < 2) {
    document.getElementById("go-back").style.display = "none";
  } else {
    document.getElementById("go-back").style.display = "block";
  }
}