<?php

    $joyfulTeens = [
        'Ježiš, ktorého si, Panna, z Ducha Svätého počala.',
        'Ježiš, ktorého si, Panna, pri návšteve Alžbety v živote nosila.',
        'Ježiš, ktorého si, Panna, v Betleheme porodila.',
        'Ježiš, ktorého si, Panna, so svätým Jozefom v chráme obetovala.',
        'Ježiš, ktorého si, Panna, so svätým Jozefom v chráme našla.',
    ];

    $luminousTeens = [
        'Ježiš, ktorý bol pokrstený v Jordáne a začal svoje verejné účinkovanie.',
        'Ježiš, ktorý zázrakom v Káne Galilejskej otvoril srdcia učeníkov pre vieru.',
        'Ježiš, ktorý ohlasoval Božie kráľovstvo a vyzýval ľud na pokánie.',
        'Ježiš, ktorý sa ukázal v božskej sláve na vrchu premenenia.',
        'Ježiš, ktorý nám dal seba samého za pokrm a nápoj v Oltárnej sviatosti.',
    ];

    $sorrowfulTeens = [
        'Ježiš, ktorý sa pre nás krvou potil.',
        'Ježiš, ktorý bol pre nás bičovaný.',
        'Ježiš, ktorý bol pre nás tŕním korunovaný.',
        'Ježiš, ktorý pre nás kríž niesol.',
        'Ježiš, ktorý bol pre nás ukrižovaný.',
    ];

    $gloriousTeens = [
        'Ježiš, ktorý slávne vstal z mŕtvych.',
        'Ježiš, ktorý slávne vystúpil do neba.',
        'Ježiš, ktorý nám zoslal Ducha Svätého.',
        'Ježiš, ktorý ťa, Panna, vzal do neba.',
        'Ježiš, ktorý ťa, Panna, v nebi korunoval.',
    ];


    function Teens ($teens) {
        foreach ($teens as $oneTeen => $value) {
            echo '<li>' . $value . '</li>';
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
    
    <main>

<?php 
    include 'intentions.php';
?>

        <div class="main main-teens">
            <h1>Tajomstvá ruženca</h1>

            <section class="joyful">
                <h3>Radostný ruženec</h3>
                <i>(modlí sa v pondelok a sobotu, v Adventnom období aj v iné dni)</i>
                <div class="preddesiatok">
                    <p><strong>Prosby k preddesiatku:</strong></p>
                    <ol class="requests">
                        <li>Ježiš, ktorý nech rozmnožuje našu vieru.</li>
                        <li>Ježiš, ktorý nech posilňuje našu nádej.</li>
                        <li>Ježiš, ktorý nech roznecuje našu lásku.</li>
                    </ol>
                    
                    <p><strong>Tajomstvá:</strong></p>
                    <ol class="teens">

                        <?php 
                            Teens($joyfulTeens);
                        ?>

                    </ol>
                </div>
            </section>

            <section class="luminous">
                <h3>Ruženec svetla</h3>
                <i>(modlí sa vo štvrtok)</i>
                <div class="preddesiatok">
                    <p><strong>Prosby k preddesiatku:</strong></p>
                    <ol class="requests">
                        <li>Ježiš, ktorý nech je svetlom nášho života.</li>
                        <li>Ježiš, ktorý nech nás uzdravuje  milosrdnou láskou.</li>
                        <li>Ježiš, ktorý nech nás vezme k sebe do večnej slávy.</li>
                    </ol>

                    <p><strong>Tajomstvá:</strong></p>
                    <ol class="teens">

                        <?php
                            Teens($luminousTeens);
                        ?>

                    </ol>
                </div>
            </section>

            <section class="sorrowful">
                <h3>Bolestný ruženec</h3>
                <i>(modlí sa v utorok a piatok, v Pôstnom období aj v iné dni)</i>
                <div class="preddesiatok">
                    <p><strong>Prosby k preddesiatku:</strong></p>
                    <ol class="requests">
                        <li>Ježiš, ktorý nech osvecuje náš rozum.</li>
                        <li>Ježiš, ktorý nech upevňuje našu vôľu.</li>
                        <li>Ježiš, ktorý nech posilňuje našu pamäť.</li>
                    </ol>

                    <p><strong>Tajomstvá:</strong></p>
                    <ol class="teens">

                        <?php
                            Teens($sorrowfulTeens);
                        ?>

                    </ol>
                </div>
            </section>

            <section class="glorious">
                <h3>Slávnostný ruženec</h3>
                <i>(modlí sa v stredu a nedeľu, vo Veľkonočnom období aj v iné dni)</i>
                <div class="preddesiatok">
                    <p><strong>Prosby k preddesiatku:</strong></p>
                    <ol class="requests">
                        <li>Ježiš, ktorý nech usporadúva naše myšlienky.</li>
                        <li>Ježiš, ktorý nech riadi naše slová.</li>
                        <li>Ježiš, ktorý nech spravuje naše skutky.</li>
                    </ol>

                    <p><strong>Tajomstvá:</strong></p>
                    <ol class="teens">

                        <?php
                            Teens($gloriousTeens);
                        ?>

                    </ol>
                </div>
            </section>
        </div>
    </main>
    

    <footer>

    </footer>
    
    <script src="js/header.js"></script>
    
</body>
</html>