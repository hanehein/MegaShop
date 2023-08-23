$(document).ready(function(){
    $(".rate-star-btn").each(function(index, btn) {
        $(btn).click(function(e){
            e.preventDefault();
           $("#star-rate").val(index + 1);
           removeActiveStar();
           addActiveStar(index);
        })
    });
});

function removeActiveStar(){
    $(".rate-star-btn").each(function(index, btn) {
        $(btn).removeClass("text-slate-500");
        $(btn).removeClass("text-[#F68721]");
        $(btn).addClass("text-slate-500");
    });
}

function addActiveStar(current){
    $(".rate-star-btn").each(function(index, btn){
        if(index <= current){
            $(btn).removeClass("text-slate-500");
            $(btn).addClass("text-[#F68721]");
        }
    })
}