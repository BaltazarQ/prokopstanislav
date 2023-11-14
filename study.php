<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<!-- Bootstrap -->
	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
	<!-- Optional theme -->
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
	<title>STANISLAV PROKOP</title>
    <script src="https://kit.fontawesome.com/3eb4f89035.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,900;1,100;1,400;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php
        @include 'header.php';
        ?>
    </header>

    <main class="more-item study">
        <h1>Štúdium</h1>

        <?php

            $time       = 'Obdobie';
            $degree   = 'Stupeň';
            $school   = 'Škola';
            $focus       = 'Zameranie';

            $studies = [

                [
                    $time       =>  '2012-2016',
                    $degree   =>  'Vysokoškolské vzdelanie',
                    $school   =>  'Technická Univerzita v Košiciach, Stavebná Fakulta',
                    $focus       =>  'Technológie a manažment v stavebníctve - externé štúdium',
                ],

                [
                    $time       =>  '2001-2005',
                    $degree   =>  'Stredoškolské vzdelanie',
                    $school   =>  'Stredná Priemyselná škola v Bardejove',
                    $focus       =>  'Technické a informatické služby v Stavebníctve',
                ],

            ];

        ?>
        <section class="study">
            
            <?php
                foreach ($studies as $study) {
        
        
                    echo "<table class='study-item'>
                    <tbody>
                    <tr class='study-time'>
                            <td>
                                <h6 class='study-title'>$time: </h6><h5 class='study-name'>${study[$time]}</h5>
                            </td>
                        </tr>";

                    echo "<tr class='study-degree'>
                            <td>
                                <h6 class='job-title'>$degree: </h6><h5 class='study-name'>${study[$degree]}</h5>
                            </td>
                        </tr>";

                    echo "<tr class='job-employer'>
                            <td>
                                <h6 class='job-title'>$school: </h6><h5 class='study-name'>${study[$school]}</h5>
                            </td>
                        </tr>";

                    echo "<tr class='job-city'>
                            <td>
                                <h6 class='job-title'>$focus: </h6><h5 class='study-name'>${study[$focus]}</h5>
                            </td>
                        </tr>
                        </tbody>
                        </table>";
                };
            ?>
        </section>

    </main>
</body>

<footer>

</footer>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</html>