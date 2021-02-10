<?php include 'function.php'?>
<!DOCTYPE html>
<html lang="fi">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Vibur&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <title>Arvontakone</title>
        <link rel="stylesheet" href="title.css">
        <link rel="stylesheet" href="style.css">
        <script src="function.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <div class="content sign">
            <h1 class="sign__word">Tervetuloa arvontaan</h1>
            <p class="discription row1">Valita 6 numeroa ja paina lähetä-näppäintä.</p>
            <p class="discription">Jos haluat postaa kaikki valintasi paina "poista valinnat" näppäintä.</p>
            <?php include 'user-number.php' ?>
            <div class="print-user-number">

            </div>
            <div class="comp-number">

            </div>
            <div class="result">

            </div>
        </div>
    </body>
</html>
