<?php
    ob_start();
    // REGISTRATION FORM
    function registrationForm() {
        if(isset($_POST['registrationSubmit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $controlPassword = $_POST['controlPassword'];
    
            // zahashovanie hesla
            $hashFormat = "$2y$10$";
            $salt = "u9YPT1kh13fEPGlMmkWrID";
            $hashFormat_salt = $hashFormat.$salt;
            
            $password = crypt($password, $hashFormat_salt);
            $controlPassword = crypt($controlPassword, $hashFormat_salt);
            // pripojenie do databazy
            $connection = mysqli_connect('localhost', 'root', 'root', 'fiato');
    
            // if($connection){
            //     echo 'sme pripojeni k databaze';
            // } else {
            //     echo 'nepripojeni k databaze, niekde je chyba';
            // }
    
            if ($username === ''){
                echo 'Chýba meno.';
            } else if (empty($_POST['password'])) {
                echo 'Chýba heslo.';
            } else if (empty($_POST['password']) && empty($_POST['controlPassword'])) {
                echo 'Chýba heslo a potvrdenie hesla.';
            } else if (empty($_POST['controlPassword'])) {
                echo 'Chýba potvrdenie hesla.';
            } else if ($controlPassword !== $password) {
                echo 'Heslá sa nezhodujú.';
            } else {
                // odoslanie dat do databazy
                $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";
                $result = mysqli_query($connection, $query);
                
                if(!$result){
                    die('Odoslanie do databazy zlyhalo'.mysqli_error());
                };
                
                header('Location: members.php');
            }
        }
    }


    // LOGIN FORM
    function loginForm() {
    
        if(isset($_POST['loginSubmit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $wronLogIn;
    
            // zahashovanie hesla
            $hashFormat = "$2y$10$";
            $salt = "u9YPT1kh13fEPGlMmkWrID";
            $hashFormat_salt = $hashFormat.$salt;
            
            $password = crypt($password, $hashFormat_salt);
    
            // pripojenie do databazy
            $connection = mysqli_connect('localhost', 'root', 'root', 'fiato');
    
            // vyber dat z databazy podla prihlasovacieho mena
            $controlPassword = "SELECT * FROM users";
            $controlResult = mysqli_query($connection, $controlPassword);
    
            // ak bude meno a heslo totozne s udajmi z databazy, presmeruj ma na stranku members.php, inak vypis chybu
            while($row = mysqli_fetch_assoc($controlResult)) {
                $dbUsername = $row['username'];
                $dbPassword = $row['password'];
                
                if($dbUsername === $username && $dbPassword === $password) {
                        echo 'uspesne prihlaseny';
                        header('Location: members.php');
                } else {
                    $wrongLogIn = 'Zlé meno alebo heslo';
                }
            }
            echo $wrongLogIn;
        }
    }


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
    
    <main class="login">

        <div class="login-menu">
            <h3><a class="reg-choice" href="#">Registrácia</a></h3>
            <h3><a class="login-choice" href="#">Prihlásenie</a></h3>
        </div>
        <form id="registration-form" class="my-form" method="POST" action="login.php">
            <input type="text" name="username" class="login-name" placeholder="Zadaj meno">
            <input type="password" name="password" class="login-password" placeholder="Zadaj heslo">
            <input type="password" name="controlPassword" class="login-password" placeholder="Zopakuj heslo">
            <input type="submit" name="registrationSubmit" value="Potvď" id="submit">
        </form>
        <div class="wrong-data">
            <p class="wrong-data-text"><?php registrationForm()?></p>
        </div>

        <form id="login-form" class="my-form" method="POST" action="login.php">
            <input type="text" name="username" class="login-name" placeholder="Zadaj meno">
            <input type="password" name="password" class="login-password" placeholder="Zadaj heslo">
            <input type="submit" name="loginSubmit" value="Potvď" id="submit">
        </form>

        <div class="wrong-data">
            <p class="wrong-data-text"><?php loginForm()?></p>
        </div>

    </main>
    

    <footer>

    </footer>
    
    <script src="js/header.js"></script>
    <script src="js/login.js"></script>
    
</body>
</html>