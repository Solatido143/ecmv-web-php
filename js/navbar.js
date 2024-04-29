function menuShow() {
    document.getElementById("menu").classList.toggle("show");
}
function menuClose() {
    document.getElementById("menu").classList.remove("show");
}

function getHeaderHeight() {
    var headerHeight = document.getElementById("header").offsetHeight;
    return headerHeight;
}

function adjustHeight() {
    var particlesView = document.getElementById("particlesView");
    if (particlesView) {
        var headerHeight = getHeaderHeight();
        var newViewHeight = `calc(100vh - ${headerHeight}px)`;
        particlesView.style.height = newViewHeight;
    }
}

adjustHeight();