const rateVal = document.getElementById('rateVal');
const rateBtn = document.getElementsByClassName('rate');
const message = document.getElementById("message");

console.log(rateBtn.length);

for(i = 0; i < rateBtn.length; i++){
  rateBtn[i].addEventListener("click",function (e){
    console.log("hi");
     // e.preventDefault(); 
    // rateVal.value= e.innerText;
    message.innerText ="";
    rateVal.value = "";
   
  })
}

// function btn(key) {
//     rateVal.value= key.innerText;
   
//   }

