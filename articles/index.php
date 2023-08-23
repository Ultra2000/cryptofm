<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Twitter -->
	<!-- <meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="website">
	<meta name="twitter:creator" content="">
	<meta name="twitter:title" content="Tous nos articles cryptos éducations">
	<meta name="twitter:description" content="Cliquez pour voir tous nos articles">
	<meta name="twitter:image" content="https://cryptofm.fr/images/baniere.jpeg"> -->

	<!-- Facebook -->
	<!-- <meta property="og:url" content="https://www.cryptofm.fr/">
	<meta property="og:title" content="Tous nos articles cryptos éducations">
	<meta property="og:description" content="Cliquez pour voir tous nos articles">
	<meta property="og:type" content="article">
	<meta property="og:image" content="https://cryptofm.fr/images/baniere.jpeg">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:secure_url" content="">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630"> -->

    <link rel="icon" href="https://cryptofm.fr/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Tous nos articles en ligne</title>
</head>
<body>
    <section class="blogs" id="blogs">
        <br><br><br><br><br><br><br>
        <h1 style="font-size:2rem;" class="heading"> Tous nos <span>articles</span>(<?php echo $total; ?>) </h1>

        <div class="box-container">
                <?php
                    while($row = $stmt->fetch()):
                ?>
            <div class="box">
                <div class="image">
                    <img src="../admin/dist/<?php echo $row->photo; ?>" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"></i> <?php echo $row->dateajout; ?> </a>
                        <a href="#"> <i class="fas fa-user"></i> by CRYPTO FM </a>
                    </div>
                    <h3><?php echo $row->titre; ?></h3>
                    <!-- <p><?php echo $row->description; ?></p> -->
                    <a href="../article/<?php echo $row->url;?>-<?php echo $row->id;?>" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
                </div>
            </div>
            <?php endwhile; ?>

        </div>

    </section>
    <?php include '../footer.php'; ?>
    <script src="../js/script.js"></script>
</body>
</html>