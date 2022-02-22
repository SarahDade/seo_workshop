<?php 
    $type="article";
    include('../../request/request.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $result['subtitle'];?>">
    <title><?php echo $result['title'] ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <?php 
            include("../../component/navbar.php");
        ?>
        <h1> 
            <?php 
                echo $result['title'];
            ?>
        </h1>
    </header>
    <main>
    <?php echo $result['content']; ?>
    </main>
    <footer></footer>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>