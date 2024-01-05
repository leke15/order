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
    <form id="note-form" method="POST">
        <h1 id="topic" contenteditable="true">Title...</h1>
        <p id="note" contenteditable="true">Add note here...</p>
        <button type="submit" id="savebtn"><i class="fa-regular fa-bookmark"></i> Save</button>
        </form>

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
        <?php
        $dsn = "mysql:host=localhost;dbname=phplearning";
        $dbusername = "otheruser";
        $dbpassword = "swordfish";
        if (isset($_POST["value"], $_POST["topic"], $_POST["type"])) {
            $dbnote = htmlspecialchars($_POST["value"]);
            $dbtopic = htmlspecialchars($_POST["topic"]);
            $dbtype = htmlspecialchars($_POST["type"]);
        
            $sql = "INSERT INTO notes (note, type, topic) VALUES (?,?,?);";
        
            try {
                $pdo = new PDO($dsn, $dbusername, $dbpassword);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
                $stmt = $pdo->prepare($sql);
                $stmt->execute([$dbnote,$dbtype,$dbtopic]);
        
                if($stmt->rowCount() > 0) {
                    echo "Note successfully created and added to the database.";
                } else {
                    echo "Failed to create note.";
                }
        
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
 
        ?>
    </body>
</html>