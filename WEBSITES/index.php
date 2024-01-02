<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../STYLES/styles.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/918a4561b3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../SCRIPTS/index.js"></script>
    <title>Order</title>
</head>
<body>
    <h1>Notes in Order</h1>
<!-- Search bar for the notes-->

    <div id="search_bar">
        <input type="search" name="search" id="search_field" placeholder="What you looking for?...">
    </div>

<!--Add notes button -->

    <button id="add"><i class="fa-solid fa-plus" id="plus_sign"></i>New Note</button>
 
<!--The actual notes derived from the database-->   
    <section id="empty_notes">
        <i class="fa-regular fa-lightbulb" id="lightbulb"></i>
        <p>Let's get some notes in here shall we?...</p>
    </section>

    <?php
       $dsn = "mysql:host=localhost;dbname=phplearning";
       $dbusername = "otheruser";
       $dbpassword = "swordfish";
       
       try {
           $pdo = new PDO($dsn, $dbusername, $dbpassword);
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $check = $pdo->query("SELECT COUNT(*) FROM notes");
           $result = $check->fetchColumn();
       
           if ($result > 0) {
               echo "<style>#empty_notes{display:none;}</style>";
           } else {
               echo "<style>#empty_notes{display:block;}</style>";
           }
       
       } catch (PDOException $e) {
           echo "Connection failed: " . $e->getMessage();
       }

        ?>
</body>
</html>