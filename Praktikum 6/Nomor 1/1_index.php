<?php
require_once "1a.php"; ?>

<!DOCTYPE html>
<html lang="id">

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
                <h4 class="text-center"><strong>Nomor 1</strong></h4>
                <br><br>
                <b><?=$truck->getMaxLoad() . " kg" ?> <br></b>
                <br>
                <?=$truck->addBox(3000) . " kg" ?> <br>
                <?=$truck->addBox(1000) . " kg" ?> <br>
                <?=$truck->addBox(6000) . " kg" ?> <br>
               
                    <?php echo "Jadi, membutuhkan bahan bakar sebanyak " . $truck->calcFuelNeeds() . " Liter" . "<br>"; ?>
                <br>
                <br>
                <b><?=$riverBarge->getMaxLoad() . " kg" ?> <br></b>
                <br>
                <?=$riverBarge->addBox(1000) . " kg" ?> <br>
                <?=$riverBarge->addBox(6000) . " kg" ?> <br>
                <?=$riverBarge->addBox(8000) . " kg" ?> <br>

                    <?php echo "Jadi, membutuhkan bahan bakar sebanyak " . $riverBarge->calcFuelNeeds() . " Liter"; ?>
            </div>
        </div>
    </div>
</body>
</html>
Footer
© 2022 GitHub, Inc.