$(document).ready(function(){
    $("#searchInput").hide()
    $("#search-btn").click(function(){
        $("#searchInput").toggle(500)
    })
}) 
// mobile menu 
let navs = document.querySelector('.primary-navs')
let menuIcon = document.querySelectorAll('.menu-toggle')
console.log(navs, menuIcon);
menuIcon.forEach(function(e) {
    e.addEventListener('click', function() {
        navs.classList.toggle('active');
    });
});
