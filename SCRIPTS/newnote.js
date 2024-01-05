
$(document).ready(function () {
    $("#savebtn").hover(hoverbtn,function(event){
        event.stopPropagation();
        $(this).css({
        "box-shadow":"",
        "transform":"scale(1)",
        "transition":"all 0.2s ease-in-out"
    });
    });

    $("#savebtn").click(function() {
        var topic = $("#topic").text();
        var note = $("#note").text();
        var type = getSelectedType(); // Function to determine selected type (list or bullets)
    
        const formData = new FormData();
        formData.append("topic", topic);
        formData.append("note", note);
        formData.append("type", type);
    
        fetch("newnote.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Handle server response (e.g., display success/failure message)
        })
        .catch(error => console.error(error));
    });
    
    function hoverbtn (){
        $(this).css({
        "box-shadow":"0 5px 0px 0px rgb(255, 167, 66)",
        "transform":"scale(1.1)",
        "transition":"all 0.2s ease-in-out"
    });
    }

    function getSelectedType() {
        if ($("#list").is(":checked")) {
            return "list";
        } else if ($("input[name='bullets']:checked").length > 0) {
            return "bullets";
        } else {
            return ""; // Handle cases where no type is selected
        }
    }
});