$(document).ready(function(){
    $(".list").hide();
    $(".list").slideDown(1500,"linear");

    $("#allLists").hide();
    $("#down").click(function(){
        $("#allLists").slideToggle("linear");
    });
});