const rateVal = document.getElementById('rateVal');
const rateBtn = document.querySelectorAll('rate');
console.log(rateBtn);
rateVal.value = "";
for(i = 0; i < rateBtn.length; i++){
  rateBtn[i].addEventListener("click",function (e){
    console.log("hi");
    // e.preventDefault(); 
    // rateVal.value= e.innerText;
  })
}

// function btn(key) {
//     rateVal.value= key.innerText;
   
//   }

