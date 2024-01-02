const { event } = require("jquery");

$(document).ready(function () {
    $("#savebtn").hover(hoverbtn,function(event){
        event.stopPropagation();
        $(this).css({
        "box-shadow":"",
        "transform":"scale(1)",
        "transition":"all 0.2s ease-in-out"
    });
    });

    document.getElementById("savebtn").addEventListener('click',function(){
    let note = document.getElementById("note").innerText;
    let topic = document.getElementById("topic").innerText;
    let type = "";
    if ($('input[name="bullets"]:checked').length > 0) {
        type = "bullets";
    }else if ($('input[name="lists"]:checked').length > 0) {
        type = "lists"
    } 
    $.ajax({
        url: 'addnote.php',
        type: 'get',
        data: {value: note, topic: topic, type: type},
        success: function(response) {
            alert(response);
        }
    });
    })
    
    function hoverbtn (){
        $(this).css({
        "box-shadow":"0 5px 0px 0px rgb(255, 167, 66)",
        "transform":"scale(1.1)",
        "transition":"all 0.2s ease-in-out"
    });
    }
});