<?php $title = "CRYPTO FM"; ?>
<?php ob_start(); ?>
    
    <?php
        include 'header.php';
    ?>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/baniere.jpeg" alt="">
    </div>

    <div class="content">
        <h3>Apprendre, avec CryptoFm</h3>
        <p>Retrouvez tous les articles, dossiers et informations sur les crypto-monnaies (Bitcoin, Ethereum, Ripple ...).</p>
        
        <a href="articles/index.php" class="btn"> commencer <span class="fas fa-chevron-right"></span> </a>
        
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">
<div id="coinmarketcap-widget-marquee" coins="1,1027,825,2010,5426,1839,2868,2757,3816,6432,1975,5805,4066" currency="USD" theme="light" transparent="false" show-symbol-logo="true"></div>
</section>

<!-- icons section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> Articles <span>récents</span> </h1>

    <div class="box-container">
    <?php 
    // include('../src/model.php');
    // $posts = getArticles();
    foreach ($posts as $post) : 
    ?>     
        <div class="box">
            <div class="image">
                <img src="image/affiche.jpeg" alt="">
            </div>
            <div class="content">
                <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> <?= $post['date_creation']; ?> </a>
                    <a href="#"> <i class="fas fa-user"></i> By CRYPTO FM </a>
                </div>
                <h3><?= htmlspecialchars($post['titles']); ?></h3>
                <p><?= nl2br(htmlspecialchars($post['content'])); ?></p>
                <a href="index.php?action=post&id=<?= urldecode($post['id']) ?>" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
            </div>
        </div>

    <?php endforeach;?>


    </div>

</section>

<!-- blogs section ends -->

<!-- services section starts  -->



<!-- services section ends -->

<!-- booking section starts   -->


<!-- booking section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> A PROPOS </h1>

    <div class="row">

        <div class="image">
            <img src="image/b55.jpg" alt="">
        </div>

        <div class="content">
            <h3>Nous étudions le monde des Cryptomonnaies et la technologie Blockchain</h3>
            <p>La blockchain est probablement la technologie la plus importante à avoir vu le jour depuis l'avènement d'internet.</p>
            <p>L'une des plus grandes force de cette technologie est sa structure de données distribuée montrant parfaitement que les donnéés sont accessibles à tout moment sans un point de défaillance</p>
            <a href="#" class="btn"> lire plus <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<!-- about section ends -->

<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php'); ?>
