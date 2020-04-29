function scrollFunction() {

    if (window.pageYOffset > 300) {
        if (!btnScrollToTop.classList.contains("btnEntrance")) {
            btnScrollToTop.classList.add("btnEntrance");
            btnScrollToTop.classList.remove("btnExit");
            btnScrollToTop.style.display = "block";
        }

    } else {
        if (btnScrollToTop.classList.contains("btnEntrance")) {
            btnScrollToTop.classList.remove("btnEntrance");
            btnScrollToTop.classList.add("btnExit")
            setTimeout(function() {
                btnScrollToTop.style.display = "none";
            }, 250)

        }

    }
}