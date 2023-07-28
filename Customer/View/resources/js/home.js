const navMenu = document.querySelector('.nav-menu');
const mobileNav = document.querySelector('.mobile-nav');
const menuHide = document.querySelector('.menu-hide');
const searchBtn = document.querySelector('.search-btn');
const mobileSearch = document.querySelector('.mobile-search');
navMenu.addEventListener('click',function(){
    mobileNav.classList.remove("hidden");
});

menuHide.addEventListener('click',function(){
    mobileNav.classList.add("hidden");
});


searchBtn.addEventListener('click',function(){
    mobileSearch.classList.toggle('hidden');
})