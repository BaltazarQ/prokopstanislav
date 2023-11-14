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

    <main class="more-item">
        <h1>Zručnosti</h1>
        <section class="skills">

                <?php
                        $language       = 'Jazyk';
                        $software        = 'Software';
                        $others       = 'Ostatné';

                        
                        $otherSkills = [
                            $language   =>  [
                                                'anglický jazyk',
                                                'český jazyk',
                                                'poľský jazyk',
                                            ],
                            $software   =>  [
                                                'AutoCad',
                                                'Cenkros',
                                                'CorelDraw',
                                                'Fakturácia',
                                                'MS Office',
                                            ],
                            $others     =>  [
                                                'vodičský preukaz skupiny B'
                                            ],
                        ];

                    foreach ($otherSkills as $oneSkill => $skills) {
            
                        echo "<table class='skill-item'>
                            <tbody>
                                <tr class='job-time'>
                                    <td>
                                        <div class='title-wrap'>
                                            <h6 class='job-title'>$oneSkill</h6>
                                        </div>
                                        
                                        <div class='skill-description'>"; 
                                            foreach($skills as $skill){
                                                echo "<h5 class='job-name'>$skill</h5>";
                                            };
                                        echo "</div>
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