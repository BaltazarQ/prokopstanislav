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

    <link rel="stylesheet" href="assets/all.css">
    <link rel="stylesheet" href="assets/fontawesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php
        @include 'header.php';
        ?>
    </header>

    <main class="more-item">
        <h1>Web skills</h1>
        <section class="web">
                    
                <table class='web-item'>
                    <tbody class="table-wrap">
                    <?php
                            $html       = 'html';
                            $css        = 'css';
                            $sass       = 'sass';
                            $php        = 'php';
                            $javascript = 'javascript';
                            $jquery     = 'jquery';
                            $github     = 'git';
                            
                            $webSkills = [
                                $html       =>    'HTML5',
                                $css        =>    'CSS3',
                                $sass       =>    'Sass',
                                $php        =>    'PHP',
                                $javascript =>    'JavaScript',
                                $jquery     =>    'jQuery',
                                $github     =>    'Git-Github',
                            ];

                        foreach ($webSkills as $webImage => $webSkill) {
                
                        echo "<tr class='web-time'>
                                <td>
                                    <h6><img src='images/web/$webImage.png' alt='$webImage'></h6><h5>$webSkill</h5>
                                </td>
                            </tr>";
                            };
                    ?>
                    </tbody>
                </table>
        </section>
    </main>
</body>

<footer>

</footer>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>

</html>