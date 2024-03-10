    function w3_open() {
        document.getElementById("sidebar").style.display = "block";
        document.getElementById("overlay").style.display = "block";
    }
    function w3_close() {
        document.getElementById("sidebar").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    }
     
    // Get the button:
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

    function openPage(pageName) {
    var i;
    var x = document.getElementsByClassName("page");
    for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(pageName).style.display = "block";
}