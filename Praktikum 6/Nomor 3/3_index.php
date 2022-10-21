<?php
require_once "3a.php"; ?>

<!DOCTYPE html>
<html lang="id">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        
    <title>Praktikum 6</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Praktikum 6</h2>
        <div class="row">
            <div class="col-5 mx-auto border p-3 mt-2">
                <h4 class="text-center"><strong>Nomor 3</strong></h4>
                <br><br>
                <?= $harimau->eat() ?> <br>
                <?= $manusia->eat() ?> <br>
                <br>
                <b><?= $airplane2->getMaxLoad() . " kg" ?> <br></b>
                <?= $airplane2->addBox(5000) . " kg" ?> <br>
                <?= $airplane2->addBox(7000) . " kg" ?> <br>
                <?= $airplane2->addBox(3000) . " kg" ?> <br>
                <?= $airplane2->addBox(4000) . " kg" ?> <br>
                <?= $airplane2->takeOff() ?> <br>
                <?= $airplane2->fly() ?> <br>
                <?= $airplane2->land() ?> <br>

                <?php echo "Jadi, membutuhkan bahan bakar sebanyak " .
                    $airplane2->calcFuelNeeds() .
                    " Liter" .
                    "<br>"; ?>
                <br>
                <?= $superman2->eat() ?> <br>
                <?= $superman2->land() ?> <br>
                <?= $superman2->takeOff() ?> <br>
                <?= $superman2->fly() ?> <br>
                <?= $superman2->leapBuilding() ?> <br>
                <?= $superman2->stopBullet() ?> <br>
            </div>
        </div>
    </div>
</body>
</html>
