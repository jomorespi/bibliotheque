'use strict'

// Primary Menu
var menuToggle = document.querySelector(".menu-toggle");
var primaryMenu = document.querySelector(".menu-wrapper");

menuToggle.addEventListener('click', function(){
    this.classList.toggle('close');
    primaryMenu.classList.toggle('visible');
});

document.addEventListener('mouseup', function(e) {
    if (!primaryMenu.contains(e.target) && !menuToggle.contains(e.target)) {
      primaryMenu.classList.remove('visible');
      menuToggle.classList.remove('close');
    }
});

// Sticky bottom layer
var stickyBottom = document.querySelector('.sticky-bottom');
var vh = window.innerHeight;
var bh = stickyBottom.offsetHeight;

if(bh > (vh/2)) {
    var bb = (vh - ((vh / 2) + bh)) + 'px'
    stickyBottom.style.bottom = bb;
}