$(document).ready(function(){
// the add button hover animation
    $("#add").hover(hoverbtn,function(){
        $(this).css({
        "box-shadow":"",
        "transform":"scale(1)",
        "transition":"all 0.2s ease-in-out"
    });
    });


 // the function responsible for the add button animation   
    function hoverbtn (){
        $(this).css({
        "box-shadow":"0 5px 0px 0px rgb(255, 167, 66)",
        "transform":"scale(1.1)",
        "transition":"all 0.2s ease-in-out"
    });
    }

});