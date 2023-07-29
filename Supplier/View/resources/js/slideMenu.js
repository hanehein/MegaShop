const menuBtns = document.querySelectorAll('.menu-btn');
const childMenus = document.querySelectorAll('.child-menu');
menuBtns.forEach( (menuBtn,idx) => {
    menuBtn.addEventListener('click',function(){
        childMenus[idx].classList.toggle("hidden");
    });
});



