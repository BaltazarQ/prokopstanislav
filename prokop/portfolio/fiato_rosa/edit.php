<?php
    include 'private.php';

    // UPDATE UDAJOV V DATABAZE
    if(isset($_POST['editSubmit'])){
        $id = $_GET['id'];
        $editIntention = $_POST['editIntention'];

        $connection = mysqli_connect($server, $db_username, $db_password, $database);
        $query = "UPDATE intentions SET intention='$editIntention' WHERE id = $id";
        $result = mysqli_query($connection, $query);

        header('Location:index.php');
    };

    // DELETE UDAJOV Z DATABAZY
    if(isset($_POST['deleteInt'])){
        $id = $_GET['id'];

        $connection = mysqli_connect($server, $db_username, $db_password, $database);
        $query = "DELETE FROM intentions WHERE id=$id";
        $result = mysqli_query($connection, $query);

        header('Location:index.php');
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Fiato rosa</title>
</head>
<body>
    
<?php
    include 'header.php';
?>
    
    <main class="edit-section">

        <p>Chceš zmeniť svoj úmysel? Môžeš tak urobiť v tomto políčku.</p>        
        <div class="old-intention">
            <p>Tvoj pôvodný úmysel:</p>
            <p id="old-intention"><?php 

                $id = $_GET['id'];

                // PRIPOJENIE DATABAZY a NACITANIE UDAJOV Z DATABAZY
                $connection = mysqli_connect($server, $db_username, $db_password, $database);
                $query = "SELECT * FROM intentions WHERE id=$id";

                $result = mysqli_query($connection, $query);

                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $intention = $row['intention'];

                    echo $intention;
                }
            ?></p>
        </div>
        <div class="new-intention">
            <form id="edit-form" method="POST" action="edit.php?id=<?php 
                    $id = $_GET['id'];
                    echo $id;
                ?>">
                
                <p>Tu môžeš svoj úmysel zmeniť: </p>
                <input type="text" name="editIntention" id="edit-intention" placeholder="Úmysel" autofocus value="<?php 
                    $id = $_GET['id'];

                    // PRIPOJENIE DATABAZY a NACITANIE UDAJOV Z DATABAZY
                    $connection = mysqli_connect($server, $db_username, $db_password, $database);
                    $query = "SELECT * FROM intentions WHERE id=$id";
            
                    $result = mysqli_query($connection, $query);
            
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $intention = $row['intention'];

                        echo $intention;
                    }
                    ?>">
                <div class="edit-submit">
                    <input class="editSubmit submit" type="submit" name="editSubmit" value="Zmeň">
                    <input class="deleteInt submit" type="submit" name="deleteInt" value="Zmaž úmysel">
                </div>
            </form>
        </div>
    </main>
    
    <footer>

    </footer>
    
    <script src="js/header.js"></script>
    <script src="js/edit.js"></script>

</body>
</html>