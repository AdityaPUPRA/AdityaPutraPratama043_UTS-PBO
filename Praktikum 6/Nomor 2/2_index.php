<?php
require_once "2a.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        
    <title>Praktikum 6</title>
</head>

<body>
    <div class="container">
        <br>
        <h2 class="text-center">Praktikum 6</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center"><strong>Nomor 2</strong></h4>
                <br><br>
                <b><?php echo "Superman"; ?></b> <br>
                <?= $superman->land() ?> <br>
                <?= $superman->takeOff() ?> <br>
                <?= $superman->fly() ?> <br>
                <?= $superman->leapBuilding() ?> <br>
                <?= $superman->stopBullet() ?> <br>
                <br>
                <b><?php echo "Bird"; ?></b> <br>
                <?= $bird->buildNest() ?> <br>
                <?= $bird->takeOff() ?> <br>
                <?= $bird->fly() ?> <br>
                <?= $bird->land() ?> <br>
                <?= $bird->layEggs() ?> <br>
                <br>
                <b><?php echo "Airplane"; ?></b> <br>
                <?= $airplane->takeOff() ?> <br>
                <?= $airplane->fly() ?> <br>
                <?= $airplane->land() ?> <br>
            </div>
        </div>
    </div>
</body>
</html>