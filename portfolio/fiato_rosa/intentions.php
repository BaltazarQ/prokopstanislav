<?php

    // ZAPISANIE UMYSLU DO DATABAZY
    if(isset($_POST['intentionSubmit'])){
        $intention = $_POST['intention'];

        // pripojenie do databazy
        $connection = mysqli_connect('localhost', 'root', 'root', 'fiato');

        if ($intention !== ''){
            // odoslanie dat do databazy
            $query = "INSERT INTO intentions(intention) VALUES('$intention')";
            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die('Odoslanie do databazy zlyhalo'.mysqli_error());
             }
        }
    }
?>

<aside class="intentions">
    <section id="">
        <h3>Naše úmysly</h3>
        <div class="int-list">

        <?php

            // VYPÍSANIE ÚMYSLOV Z DATABÁZY
            $connection = mysqli_connect('localhost', 'root', 'root', 'fiato');
            $query = "SELECT * FROM intentions";

            $result = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $intention = $row['intention'];
                echo('<div class="result-list">
                        <a name="oneIntention" href="edit.php?id=' . $id . '&intention=' . $intention .'" class="one-intention">' . $row["intention"] . '</a>
                    </div>');
            }
        ?>

        </div>
        
        <form class="intentions-form" method="POST">
            <input type="text" name="intention" id="intentions-text" placeholder="Pridaj svoj úmysel">
            <input type="submit" name="intentionSubmit" value="Pridaj">
        </form>
        <p class="notes">Kliknutím na úmysel ho môžeš zmeniť alebo vymazať.</p>
    </section>
</aside>