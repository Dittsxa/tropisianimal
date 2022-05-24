  AOS.init({
    offset: 400,
    delay: 0,
    duration: 1200,
    once: false,
    easing: 'ease',
  });

mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
    document.getElementById('navbar').style.backgroundColor = "#121212";
  } else {
    mybutton.style.display = "none";
    document.getElementById('navbar').style.backgroundColor = "transparent";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

document.addEventListener("DOMContentLoaded", function(){
  el_autohide = document.querySelector('#navbar');

  if(el_autohide){
    var last_scroll_top = 0;
    window.addEventListener('scroll', function() {
      let scroll_top = window.scrollY;
      if(scroll_top > last_scroll_top) {
        document.getElementById("navbar").style.top = "-80px";
      } else {
        document.getElementById("navbar").style.top = "0";
      }
      last_scroll_top = scroll_top;
    }); 
  }
});
