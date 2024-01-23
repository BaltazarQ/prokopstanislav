<div class="lng-sk">
    <section class="preface" id="preface">
        <div class="lng-select">
            <a href="#">EN</a>
        </div>
        <div class="preface-bg">
            <img src="images/pexels-markus-spiske-1089438.jpg" alt="">
        </div>
        <article class="profile-photo">
            <img src="images/profil-square.jpg" alt="rounded profil photo">
        </article>
        <article class="preface-info">
            <h1 class="name">Stanislav Prokop</h1>
            <h2 class="position">Web developer</h2>
        </article>
    </section>

    <section class="about" id="about">
        <div class="about-row">
            <article class="about-left">
                <h3>O mne</h3>
                <p class="main-text">Študoval som na Strednej priemyselnej škole, po ktorej som pokračoval v štúdiu na Stavebnej fakulte v Bratislave, neskôr externe v Košiciach. Prešiel som si viacerými pracovnými odvetviami, kde som mal možnosť vyskúšať veľa nových veci, stretnúť množstvo ľudí, aj naučiť sa viacerým technológiám. </p>
            </article>

            <article class="about-wrap">
                <h3>Detaily</h3>
                <aside class="aside-contact">
                    <p>37 rokov</p>
                    <p>Bardejov, Slovensko</p>
                    <p><a href="mailto:prokopstanislav@gmail.com">prokopstanislav@gmail.com</a></p>
                    <p><a href=" tel:+421904744404">+421 904 744 404</a></p>
                    <div class="social-icon">
                        <a class="social-fb" href="https://www.facebook.com/stanislav.prokop.50/" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-inst" href="https://www.instagram.com/stanislav_prokop/" target="blank"><i class="fab fa-instagram-square"></i></a>
                        <a class="social-lin" href="https://www.linkedin.com/in/stanislav-prokop-a0860517a/" target="blank"><i class="fab fa-linkedin"></i></a>
                        <a class="social-msg" href="https://www.messenger.com/t/1434114583575672" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                        <a class="social-git" href="https://github.com/BaltazarQ" target="blank"><i class="fab fa-github"></i></a>
                    </div>
                </aside>
            </article>
        </div>
    </section>

    <section class="profile" id="profile">
        <div class="profile-container">
            <h3>Moje skúsenosti</h3>
            <article>
                <div class="profile-text">    
                    <p>​S kódom som sa stretol v roku 2020, keď som začal studovať HTML, CSS, Javascript, jQuerry, neskôr som prešiel na Sass, PHP a SQL.</p>
                    <p>Od januára 2023 som mal možnosť pracovať takmer rok ako Junior programátor PHP, kde som mal možnosť vyskúšať si aj prácu s Magento 2.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="works" id="works">
        <div class="aside-work">
            <h3>Z mojich prác</h3>
            <div class="presentation">
                
            <?php
                $my_works = [
                    
                    [
                        'name' => 'Quiz',
                        'link' => 'family-game/index.php',
                        'tech-list' => 'HTML/PHP, CSS/Sass, Javascript, jQuerry',
                        'img' => 'family-game.png',
                        'github' => 'https://github.com/BaltazarQ/family-game'
                    ],
                    [
                        'name' => 'Fiato Rosa',
                        'link' => 'fiato_rosa/index.php',
                        'tech-list' => 'HTML/PHP, CSS/Sass, SQL, Javascript',
                        'img' => 'fiato-rosa.png',
                        'github' => 'https://github.com/BaltazarQ/fiato-rosa'
                    ],
                ];

                foreach ($my_works as $work) {
                    ?>
                    <div class="presentation-item">
                        <a href="portfolio/<?php echo $work['link'];?>" target="blank">
                            <img src="images/<?php echo $work['img'];?>" alt="">
                        </a>
                        <span><?php echo $work['name'];?></span>
                        <p class="tech-list"><?php echo $work['tech-list'];?></p>
                        <p><a class="git" href="<?php echo $work['github'];?>">GitHub</a></p>
                    </div>
                    <?php
                }
            ?>

            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="contact-left">
            <h3>Kontaktujte ma</h3>
            <p>Zaujal som Vás?</p>
            <p>Ak sa Vám moja práca páči, rád sa s Vami stretnem osobne. Verím, že naša spolupráca prospeje ako mne, tak aj Vám a budeme spoločne napredovať. Som otvorený novým možnostiam a zároveň sa rád naučím aj nové veci.</p>
        </div>

    </section>
</div>

<div class="lng-en">
    <section class="preface" id="preface-en">
        <div class="lng-select">
            <a href="#">SK</a>
        </div>
        <div class="preface-bg">
            <img src="images/pexels-markus-spiske-1089438.jpg" alt="">
        </div>
        <article class="profile-photo">
            <img src="images/profil-square.jpg" alt="rounded profil photo">
        </article>
        <article class="preface-info">
            <h1 class="name">Stanislav Prokop</h1>
            <h2 class="position">Web developer</h2>
        </article>
    </section>

    <section class="about" id="about-en">
        <div class="about-row">
            <article class="about-left">
                <h3>About me</h3>
                <p class="main-text">I studied at the Secondary Industrial School, after which I continued my studies at the Faculty of Civil Engineering in Bratislava, later externally in Košice. I went through several job sectors, where I had the opportunity to try many new things, meet many people, and learn several technologies.</p>
            </article>

            <article class="about-wrap">
                <h3>Details</h3>
                <aside class="aside-contact">
                    <p>37 years</p>
                    <p>Bardejov, Slovakia</p>
                    <p><a href="mailto:prokopstanislav@gmail.com">prokopstanislav@gmail.com</a></p>
                    <p><a href=" tel:+421904744404">+421 904 744 404</a></p>
                    <div class="social-icon">
                        <a class="social-fb" href="https://www.facebook.com/stanislav.prokop.50/" target="blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-inst" href="https://www.instagram.com/stanislav_prokop/" target="blank"><i class="fab fa-instagram-square"></i></a>
                        <a class="social-lin" href="https://www.linkedin.com/in/stanislav-prokop-a0860517a/" target="blank"><i class="fab fa-linkedin"></i></a>
                        <a class="social-msg" href="https://www.messenger.com/t/1434114583575672" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                        <a class="social-git" href="https://github.com/BaltazarQ" target="blank"><i class="fab fa-github"></i></a>
                    </div>
                </aside>
            </article>
        </div>
    </section>

    <section class="profile" id="profile-en">
        <div class="profile-container">
            <h3>My experience</h3>
            <article>
                <div class="profile-text">    
                    <p>​I encountered code in 2020 when I started studying HTML, CSS, Javascript, jQuerry, later I switched to Sass, PHP and SQL.</p>
                    <p>From January 2023, I had the opportunity to work for almost a year as a Junior PHP programmer, where I also had the opportunity to try working with Magento 2.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="works" id="works-en">
        <div class="aside-work">
            <h3>My works</h3>
            <div class="presentation">
                
            <?php
                $my_works = [
                    
                    [
                        'name' => 'Quiz',
                        'link' => 'family-game/index.php',
                        'tech-list' => 'HTML/PHP, CSS/Sass, Javascript, jQuerry',
                        'img' => 'family-game.png',
                        'github' => 'https://github.com/BaltazarQ/family-game'
                    ],
                    [
                        'name' => 'Fiato Rosa',
                        'link' => 'fiato_rosa/index.php',
                        'tech-list' => 'HTML/PHP, CSS/Sass, SQL, Javascript',
                        'img' => 'fiato-rosa.png',
                        'github' => 'https://github.com/BaltazarQ/fiato-rosa'
                    ],
                ];

                foreach ($my_works as $work) {
                    ?>
                    <div class="presentation-item">
                        <a href="portfolio/<?php echo $work['link'];?>" target="blank">
                            <img src="images/<?php echo $work['img'];?>" alt="">
                        </a>
                        <span><?php echo $work['name'];?></span>
                        <p class="tech-list"><?php echo $work['tech-list'];?></p>
                        <p><a class="git" href="<?php echo $work['github'];?>">GitHub</a></p>
                    </div>
                    <?php
                }
            ?>

            </div>
        </div>
    </section>

    <section class="contact" id="contact-en">
        <div class="contact-left">
            <h3>Contact me</h3>
            <p>Did I interest you?</p>
            <p>If you like my work, I would like to meet you in person or online. I believe that our cooperation will benefit both me and you and we will progress together. I am open to new possibilities and to learn new things.</p>
        </div>

    </section>
</div>
