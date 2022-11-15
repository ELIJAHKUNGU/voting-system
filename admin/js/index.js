//scroll navabar
window.addEventListener("scroll", function(e) {
    var header = document.getElementById("header");
    if (
        document.documentElement.scrollTop ||
        document.body.scrollTop > window.innerHeight
    ) {
        header.classList.add("nav-colored");
        header.classList.remove("nav-transparent");
    } else {
        header.classList.add("nav-transparent");
        header.classList.remove("nav-colored");
    }
    var navlinksmain = document.getElementById("nav");
    if (
        document.documentElement.scrollTo ||
        document.body.scrollTop > window.innerHeight
    ) {
        navlinksmain.classList.add("navlinks-color");
    }
});