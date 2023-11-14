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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <?php
        @include 'header.php';
        ?>
    </header>

    <main class="more-item">
        <h1>Pracovné skúsenosti</h1>
        <section class="job">

        <?php
        
$time       = 'Obdobie';
$position   = 'Pozícia';
$employer   = 'Zamestnávateľ';
$city       = 'Miesto';
$jobs       = 'Náplň práce';

$works = [

    [
        $time       =>  '2018-súčasnosť',
        $position   =>  'Sales manager',
        $employer   =>  'Krovy - Strechy s.r.o.',
        $city       =>  'Hertník',
        $jobs       =>  [
                            'komunikácia so zákazníkmi',
                            'technické poradenstvo',
                            'príprava cenových ponúk a rozpočtov',
                            'príprava projektov a projektovej dokumentácie',
                            'objednávanie materiálu a tovaru',
                            'práca v administratíve',
                            'nadväzovanie a rozvoj spolupráce s odberateľmi a dodávateľmi',
                            'vyhľadávanie a oslovovanie potenciálnych odberateľov',
                        ],
    ],

    [
        $time       =>  '19.3.2018 - 31.10.2018',
        $position   =>  'Sales manager',
        $employer   =>  'INCON spol. s r.o.',
        $city       =>  'Bardejov',
        $jobs       =>  [
                            'plánovanie a tvorba harmonogramu pre zameriavacieho technika, servisného technika, montážne skupiny',
                            'spracovávanie objednávok',
                            'komunikácia so zákazníkmi',
                            'práca so špecializovaným softvérom CANTOR',
                            'predaj plastových okien a dverí',
                            'tvorba cenových ponúk',
                            'administratívne práce',
                            'práca s pokladňou',
                        ],
    ],

    [
        $time       =>  '1.7.2014 - 18.3.2018',
        $position   =>  'Project manager',
        $employer   =>  'ABC STAVEBNICTVA s.r.o.',
        $city       =>  'Bardejov',
        $jobs       =>  [
                            'projektovanie stavieb',
                            'riadenie prác a pracovníkov na stavbe',
                            'komunikácia so zákazníkmi a objednávateľmi',
                            'príprava stavebných rozpočtov',
                            'vykonávanie stavebných prác',
                            'interná administrácia',
                            'predaj stavebného tovaru',
                        ],
    ],

    [
        $time       =>  '11/2011 - 6/2014',
        $position   =>  'Predaj športových potrieb',
        $employer   =>  'TOPA SPORT s.r.o.',
        $city       =>  'Bardejov',
        $jobs       =>  [
                            'predaj športových potrieb',
                            'práca s pokladňou',
                            'príprava, kompletizácia a expedícia športových trofejí',
                            'fakturácia a administrácia pri expedícií športových potrieb a trofejí',
                        ],
    ],

    [
        $time       =>  '11/2009 - 10/2011',
        $position   =>  'Majster výroby',
        $employer   =>  'ELSTAV - FR, s.r.o.',
        $city       =>  'Bardejov',
        $jobs       =>  [
                            'riadenie výroby',
                            'administratívne práce',
                            'expedícia tovaru',
                            'práca v drevovýrobe',
                        ],
    ],

    [
        $time       =>  '09/2009 - 10/2009',
        $position   =>  'Pracovník v poľnohospodárstve',
        $employer   =>  '',
        $city       =>  'Trento, Taliansko',
        $jobs       =>  [
                            'zber jabĺk',
                            'práca v záhrade - úprava krovín',
                        ],
    ],

    [
        $time       =>  '02/2007 - 08/2009',
        $position   =>  'Pracovník sťahovacej služby',
        $employer   =>  'LOBO GROUP, s.r.o.',
        $city       =>  'Bratislava',
        $jobs       =>  [
                            'lokálne aj medzinárodné sťahovanie bytov, kancelárií, nábytku, zariadenia',
                        ],
    ],

    [
        $time       =>  '09/2006 - 02/2007',
        $position   =>  'Osobný asistent',
        $employer   =>  'ORGANIZÁCIA MUSKULÁRNYCH DYSTROFIKOV V SR, o.z.',
        $city       =>  'Bratislava',
        $jobs       =>  [
                            'sprevádzanie, komunikácia, príprava do školy a voľnočasové aktivity so žiakom so svalovou dystrofiou',
                            'voľnočasové aktivity a sprevádzanie dospelého na invalidnom vozíku',
                        ],
    ],

    [
        $time       =>  '09/2005 - 09/2006',
        $position   =>  'Pracovník v upratovacej agentúre',
        $employer   =>  '',
        $city       =>  'Bratislava',
        $jobs       =>  [
                            'upratovanie skladovacích priestorov',
                            'upratovanie kancelárskych priestorov',
                        ],
    ],

    [
        $time       =>  '07/2004 - 08/2004',
        $position   =>  'Pracovník v supermarkete',
        $employer   =>  'Kaufland',
        $city       =>  'Bratislava',
        $jobs       =>  [
                            'práca pri pokladni',
                            'dokladanie tovaru',
                        ],
    ],

    [
        $time       =>  '2002 - 2015',
        $position   =>  'Dobrovolník v ochotníckom divadle',
        $employer   =>  'DOMKA - Združenie saleziánskej mládeže',
        $city       =>  'Bardejov',
        $jobs       =>  [
                            'písanie scenárov',
                            'réžia a účinkovanie v divadelných hrách',
                            'organizácia predstavení',
                        ],
    ],

    [
        $time       =>  '2001 - 2015',
        $position   =>  'Animátor',
        $employer   =>  'DOMKA - Združenie saleziánskej mládeže',
        $city       =>  'Bardejov',
        $jobs       =>  [
                            'vedenie detských a mládežníckych stretnutí',
                            'príprava a organizácia detských a mládežníckych podujatí',
                            'príprava a organizácia táborov',
                            'doučovanie žiakov ZŠ v predmetoch matematika (9.r), slovenský jazyk (1.-3.r.)',
                        ],
    ],
];

    foreach ($works as $work) {
    
    
        echo "<table class='job-item'>
        <tbody>
        <tr class='job-time'>
                <td>
                    <h6 class='job-title'>$time: </h6><h5 class='job-name'>${work[$time]}</h5>
                </td>
            </tr>";

        echo "<tr class='job-position'>
                <td>
                    <h6 class='job-title'>$position: </h6><h5 class='job-name'>${work[$position]}</h5>
                </td>
            </tr>";

        echo "<tr class='job-employer'>
                <td>
                    <h6 class='job-title'>$employer: </h6><h5 class='job-name'>${work[$employer]}</h5>
                </td>
            </tr>";

        echo "<tr class='job-city'>
                <td>
                    <h6 class='job-title'>$city: </h6><h5 class='job-name'>${work[$city]}</h5>
                </td>
            </tr>";

        echo "<tr class='job-list'>
                <td>
                    <div class='title-wrap job-wrap'>
                        <h6 class='job-title'>$jobs: </h6>
                        <i class='fas fa-caret-right'></i>
                    </div>

                    <div class='job-description'>";
                foreach ( $work[$jobs] as $item) {
                    echo "<h5 class='job-name'>$item</h5>";
                };
        echo        "</div>
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