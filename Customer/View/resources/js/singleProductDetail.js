const currentImg = document.querySelector('.current-img');
const prevBtn = document.querySelector('.prev');
const nextBtn = document.querySelector('.next');
const slideImgs = document.querySelectorAll('.slide-img');
let imageIdx = 2;

prevBtn.addEventListener('click',prevImg);
nextBtn.addEventListener('click',nextImg);

function showImg(){
    currentImg.src = slideImgs[imageIdx].src;
}

function nextImg(){
    imageIdx++;
    if(imageIdx > slideImgs.length - 1 ) imageIdx = 0;
    showImg();
}

function prevImg(){
    imageIdx--;
    if(imageIdx < 0 ) imageIdx = slideImgs.length - 1;
    console.log(imageIdx);
    showImg();
}

slideImgs.forEach( (slideImg, idx) => {
    slideImg.addEventListener('click', function(){
        imageIdx = idx;
        showImg();
    })
})

showImg();