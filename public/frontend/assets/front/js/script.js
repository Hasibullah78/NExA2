document.addEventListener('DOMContentLoaded', function () {
    // var typed = new Typed('.typing', {
    //     strings: ["v4.0 Released", "Fast and Robust", "Gredient Interface", "Most Complete", "Perfect suited"],
    //     typeSpeed: 50,
    //     loop: true,
    //     cursorChar: "___"
    // });

    let ost = 0;
    document.addEventListener('scroll', function () {
        let cOst = document.documentElement.scrollTop;
        if (cOst == 0) {
            document.querySelector(".navbar").classList.add("top-nav-collapse");
        } else if (cOst > ost) {
            document.querySelector(".navbar").classList.add("top-nav-collapse");
            document.querySelector(".navbar").classList.remove("default");
        } else {
            document.querySelector(".navbar").classList.add("default");
            document.querySelector(".navbar").classList.remove("top-nav-collapse");
        }
        ost = cOst;
    });
    var scrollSpy = new bootstrap.ScrollSpy(document.body, {
        target: '.navbar'
    })
    //loader start
    document.querySelector('.theme-loader').remove();
});
