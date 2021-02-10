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
        <div class="content container">
            <div class="sign">
                <h1 class="sign__word">Tervetuloa arvontaan</h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="description">
                        <p class="description-text row1">Valita 6 numeroa ja paina lähetä-näppäintä.</p>
                        <p class="description-text">Jos haluat postaa kaikki valintasi paina "poista valinnat" näppäintä.</p>
                    </div>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    <?php include 'user-number.php' ?>
                </div>
                <div class="col">
                    <div class="print-user-number">
                        <p class="text">Olet valinnut: <?= $userNumbers ?></p>
                    </div>
                    <div class="comp-number">
                        <p class="text">Tietokone oli valinnut: <?= $generateNumbers ?></p>
                    </div>
                    <div class="result">
                        <p class="text">Samoja numeroita on: <?= $result ?> kpl (<?= $sameNumbers ?>). Se on <?= $resultPercentage ?>%.</p>
                    </div>
                    <div>
                        <?php if ($result == 6){
                        echo "<img src=\"https://lh3.googleusercontent.com/FQiAWSqEcQqiwL8kyXCki5lt1Ug31R1IViH5ZUpejDKRuwQYDNBe0m3_TgMV_0b8YmUlsqig6lzP9yL77Rfk4Ek=s0\" alt=\"You are winner!\" class=\"winner\"";
                        }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast d-flex align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-body">
                <p><?= 'Olet valitsemassa liian paljon vaihtoehtoa. Valitse pelkkä 6.' ?></p>
            </div>
            <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </body>
</html>
