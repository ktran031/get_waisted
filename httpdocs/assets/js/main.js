(function () {
    $( document ).ready(function() {

        // Toggle Mobile Navigation
        function mobileNavToggle() {
            var x = document.getElementById("leftNav");
            if (x.className === "left-nav") {
                x.className += " responsive";
                $('.hamburger-icon').text("X");
            } else {
                var hamburger = "\&#9776";
                x.className = "left-nav";
                $('.hamburger-icon').html(hamburger);
            }
        }

        // Toggle Mobile Nav Event
        $('.hamburger-icon').on('click', mobileNavToggle);
    });
})();

