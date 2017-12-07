
window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 13 || document.documentElement.scrollTop > 13) {
        document.getElementById("mainNav").className = "navbar navbar-expand-lg navbar-light fixed-top noMargin-top";
    } else {
        document.getElementById("mainNav").className = "navbar navbar-expand-lg navbar-light fixed-top";
    }
}
