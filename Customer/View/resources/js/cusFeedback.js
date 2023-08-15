const rateVal = document.getElementById('rateVal');
const rateBtns = document.querySelectorAll(".rate");
const message = document.getElementById("message");
// message.innerText ="";
//     rateVal.value = ""
rateBtns.forEach(rateBtn => {
  console.log(rateBtn);
  rateBtn.addEventListener("click", function (e){
    e.preventDefault(); 
    rateVal.value= e.value;

rateBtns.forEach( rateBtn => {
  rateBtn.addEventListener('click', function(e){
    e.preventDefault();
    removeActive();
    this.classList.add("active");
    const rate = this.innerText;
    rateVal.value = rate;
  })
});


function removeActive(){
  rateBtns.forEach(btn => {
    btn.classList.remove("active");
  })
});




