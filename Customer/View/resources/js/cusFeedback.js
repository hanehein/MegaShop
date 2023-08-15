const rateVal = document.getElementById('rateVal');
const rateBtns = document.querySelectorAll('.rate');
const message = document.getElementById("message");
// message.innerText ="";
//     rateVal.value = ""
rateBtns.forEach(rateBtn => {
  console.log(rateBtn);
  rateBtn.addEventListener("click", function (e){
    e.preventDefault(); 
    rateVal.value= e.value;

  })
});



// function btn(key) {
//     rateVal.value= key.innerText;
   
//   }

