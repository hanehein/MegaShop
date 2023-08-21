$(document).ready(function(){
    $("#text1,#text2,#text3,#text4,#text5,#text6,#text7,#text8").hide();
   
    $("#click1").click(function(){
        $("#text1").slideToggle("linear");
    });
    $("#click2").click(function(){
        $("#text2").slideToggle("linear");
    });
    $("#click3").click(function(){
        $("#text3").slideToggle("linear");
    });
    $("#click4").click(function(){
        $("#text4").slideToggle("linear");
    });

    $("#click5").click(function(){
        $("#text5").slideToggle("linear");
    });
    $("#click6").click(function(){
        $("#text6").slideToggle("linear");
    });
    $("#click7").click(function(){
        $("#text7").slideToggle("linear");
    });
    $("#click8").click(function(){
        $("#text8").slideToggle("linear");
    });

});