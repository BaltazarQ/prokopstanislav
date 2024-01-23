<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Homepage</title>
</head>
<body>
    <section class='pages'>
        <ul>

            <?php
                // my pages
                $pages = array(
                    [
                        'name'  => 'Stanislav Prokop',
                        'link'  => 'prokop',
                        'img'   => 'prokop.png'
                    ],
                    [
                        'name'  => 'Fiato Rosa',
                        'link'  => 'fiato-rosa',
                        'img'   => 'fiato-rosa.png'
                    ],
                    [
                        'name'  => 'Family Quiz',
                        'link'  => 'family-quiz',
                        'img'   => 'family-quiz.png'
                    ]
                );

                // create ul list from pages 
                foreach ($pages as $page) { ?>
                    <li class="<?php echo $page['link']?>"><a href="<?php echo $page['link'] ?>"><img src="images/<?php echo $page['img'] ?>" alt=""><?php echo $page['name'] ?></a></li>
                    <?php
                }
            ?>

        </ul>
    </section>
    
</body>
</html>