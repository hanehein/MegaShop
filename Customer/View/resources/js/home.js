$(document).ready(function(){
    $('.nav-menu').click(function(){
        $('.mobile-nav').removeClass("hidden");
    });

    $('.menu-hide').click(function(){
        $('.mobile-nav').addClass("hidden");
    });

    $('.mobile-search-btn').click(function(){
        $('.mobile-search-container').toggleClass("hidden");
    })

})