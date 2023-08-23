<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Twitter -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="website">
	<meta name="twitter:creator" content="">
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">

	<!-- Facebook -->
	<meta property="og:url" content="https://www.cryptofm.fr/">
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:type" content="article">
	<meta property="og:image" content="">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:secure_url" content="">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">

	<!-- Page Title
    ======================================== -->
	<title>Titre de l'article</title>
    <link rel="icon" href="">
    <link rel="icon" href="pp.jpg">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

    .home{
        /* text-align:center; */
        width: 70%;
        border-radius: 5px;
        box-shadow: 5px 10px 20px 5px #1C5496;
        margin-top: 7%;
        /* justify-content: center; */
        margin-left: 15%;
    }
   .home .article .article-img{
        width:100%;
        height: 50%;
        margin-left: 2%;
    }
    .home .article .article-img img{
        width: 100%;
        height: 100%;
        text-align: center;
    }

    .home .article .article-inf h2{
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
        color: #1C5496;
        margin: 20px;
        text-transform: uppercase; 
        text-align:center;
    }
    .home .article .article-inf h3{
        font-family: 'Poppins', sans-serif;
        font-size: 1.3rem;
        color: #1C5496;
        margin: 20px; 
        
    }

    .home .article .article-inf p{
        font-family: 'Poppins', sans-serif;
        font-size: 1.5rem;
        text-align:justify;
        margin: 15px;
    }

    button{
        color: #fff;
        border: none;
        outline: none;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        padding: 13px 25px;
        background: #1C5496;
        transition: background 0.3s ease;
        margin-left: 30%;
     
    }

    .comment{
        width: 100%;
        margin: 20px;
        text-align:center;
    }

    .comment input,textarea{
        padding: 15px 20px 6 48px;
        border: 1px solid #1C5496;
        color: #1C5496;
        width: 50%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
    }

    .comment h2{
        font-size: 2rem;
        color: #1C5496;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    .affiche-comment{
        border: 1px solid #1C5496;
        border-radius: 5px;
        box-shadow: 1px 1px #1C5496;
        width: 50%;
        margin-left:25%;
    }

    .affiche-comment .info-comment h3{
        color: #1C5496;
        font-size: 2rem;
        font-family: 'Poppins', sans-serif;
        margin: 5px;
        
    }

    .affiche-comment .info-comment p{
        font-size: 1.5rem;
        font-family: 'Poppins', sans-serif;
        justify-content: justify;
        padding: 0 5px;
        justify-content:justify;
    }

    @media (max-width:768px){

        .home .article .article-img{
        width:100%;
        height: 50%;
        margin-left: 0%;
    }
    button{
        color: #fff;
        border: none;
        outline: none;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px;
        background: #1C5496;
        transition: background 0.3s ease;
        margin-left: 20%;
        margin: 20px;
    }
    .comment input,textarea{
        padding: 15px 20px 6 48px;
        border: 1px solid #1C5496;
        color: #1C5496;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
    }
    .comment h2{
        font-size: 2rem;
        color: #1C5496;
        text-transform: uppercase;
    }
    .affiche-comment{
        border: 1px solid #1C5496;
        border-radius: 5px;
        box-shadow: 1px 1px #1C5496;
        width: 100%;
        margin-left:0%;
    }
    }

    @media (max-width:450px){

        .home{
        width: 90%;
        margin-top: 20%;
        margin-left: 6%;
        
    }
    .home .article .article-inf p{
       
        font-size: 1.7rem;
        
    }

    button{
        color: #fff;
        border: none;
        outline: none;
        font-size: 18px;
        cursor: pointer;
        border-radius: 5px;
        padding: 10px 20px;
        background: #1C5496;
        transition: background 0.3s ease;
        margin-left: 0;
        width:100%;
    }
    .comment h2{
        font-size: 2rem;
        color: #1C5496;
        text-transform: uppercase;
    }

    .comment input,textarea{
        padding: 15px 20px 6 48px;
        border: 1px solid #1C5496;
        color: #1C5496;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
    }

    .affiche-comment{
        border: 1px solid #1C5496;
        border-radius: 5px;
        box-shadow: 1px 1px #1C5496;
        width: 100%;
        margin-left:0%;
    }
}
</style>
<body>
    <section class="home">
        <div class="article">
            <div class="article-img">
                <img src="image/affiche.jpeg" alt="" width="200" height="50">
            </div>
            <div class="article-inf">
                <h3><i class="fas fa-user"></i> by CRYPTO FM | 15-02-2023 ?></h3>
                <h2>Un beau titre</h2> 
                <p>Une description</p>
            </div>
        </div>
        
        <div class="comment">
            <h2>Laissez un commentaire</h2>
            <form action="" method="post">
                <input type="text" name="pseudo" placeholder="Pseudo"><br><br>
                <input type="text" name="email" placeholder="Email"><br><br>
                <textarea name="commentaire" id="" cols="30" rows="10" placeholder="Commentaire"></textarea><br>
                <button name="comment">Commenter</button>
            </form>

            <h1>Commentaires(02)</h1>
        </div>

        
        <div class="affiche-comment">
            
            <div class="info-comment">
                <h3> <i class="fas fa-user"></i> Pseudo</h3>
                <p>Un commentaire</p>
            </div>
            
        </div>
        
    </section>


<?php include 'footer.php'; ?>
</body>
</html>

