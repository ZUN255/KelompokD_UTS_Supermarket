function stickyMenu() {
    var menu=document.getElementById('menu');
    if(window.pageXOffset > 220) {
        menu.classList.add('menu');
    } else {
        menu.classList.remove('menu');
    }

}

window.onscroll = function() {
    stickyMenu();
}