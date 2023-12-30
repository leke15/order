<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../STYLES/notestyles.css" type="text/css">
    <script src="https://kit.fontawesome.com/918a4561b3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../SCRIPTS/newnote.js"></script>
    <title>Add Note</title>
</head>
<body>
    <section id="newnote">
        <h1 id="topic" contenteditable="true">Title...</h1>
        <p id="note" contenteditable="true">Add note here...</p>

        <div id="container">  
        <div id="note_type">
        <input type="checkbox" name="list">List
        <input type="radio" name="bullets" > Bullets
            </div>
        <div id="save">  
        <button id="savebtn"><i class="fa-regular fa-bookmark"></i> Save</button>
            </div>  
</div>

    </section>
</body>
</html>