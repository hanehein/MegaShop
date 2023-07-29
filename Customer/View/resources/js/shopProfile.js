const subMenuShowBtn = document.querySelector('.sub-menu-show');
const subMenuBox = document.querySelector('.sub-menu-box');
const subMenuHideBtn = document.querySelector('.sub-menu-hide');
subMenuShowBtn.addEventListener('click', function(){
    console.log("hi");
    subMenuBox.classList.remove("hidden");
});

subMenuHideBtn.addEventListener('click', function(){
    subMenuBox.classList.add("hidden");
})


