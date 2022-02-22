<?php 
    $type="index";
    include('./request/request.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="SEO, seo, search engine optimization, google, rédaction, copywriting, référencement, research, UX, experience utilisateur">
    <meta name="description" content="pour améliorer le SEO">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">

    <title>Documents</title>
</head>

<body>
    <div class="header">
        <?php 
            include('./component/navbar.php'); 
        ?>
        <img id="img1" src="./assets/header_accueil.jpg">
    </div>
    <div class="inside">
        <?php
            echo $result['content'];
        ?>

    </div>

    <footer>
<div class="footer">
  <div id="button"></div>
<div id="container">
<div id="cont">
<div class="footer_center">
	   <h3>seo_workshop</h3>
</div>
</div>
</div>
</div>
    </footer>
</body>
</html>