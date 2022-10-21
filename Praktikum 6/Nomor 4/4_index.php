<?php 
    require_once '4a.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        
    <title>Praktikum 6</title>
</head>
<body>
    <h2 class="text-center">Praktikum 6</h2>
        <div class="container">
            <div class="row">
                <h4 class="text-center"><strong>Nomor 4</strong></h4>
                <br><br>
                    <div class="col-4 mx-auto border p-2 mt-2">
                        <b><?= $riverBarge2->getMaxLoad() . ' kg'; ?> <br></b>
                        <?= $riverBarge2->addBox(12000) . ' kg'; ?> <br>
                        <?= $riverBarge2->addBox(14000) . ' kg'; ?> <br>
                        <?= $riverBarge2->addBox(1000) . ' kg'; ?> <br>
                        <?= $riverBarge2->addBox(3000) . ' kg'; ?> <br>
                        <?= $riverBarge2->dock(); ?> <br>
                        <?= $riverBarge2->cruise(); ?> <br>
                        <?php 
                                echo "Jadi, membutuhkan bahan bakar sebanyak " . $riverBarge2->calcFuelNeeds() . ' Liter'. '<br>';
                            ?>
                    </div>
                    <div class="col-4 mx-auto border p-2 mt-2">
                        <b><?= $seaPlane->getMaxLoad() . ' kg'; ?> <br></b>
                        <?= $seaPlane->addBox(12000) . ' kg'; ?> <br>
                        <?= $seaPlane->addBox(8000) . ' kg'; ?> <br>
                        <?= $seaPlane->dock(); ?> <br>
                        <?= $seaPlane->cruise(); ?> <br>
                        <?= $seaPlane->takeOff(); ?> <br>
                        <?= $seaPlane->fly(); ?> <br>
                        <?= $seaPlane->land(); ?> <br>
                        <?php 
                                echo "Jadi, membutuhkan bahan bakar sebanyak " . $seaPlane->calcFuelNeeds() . ' Liter'. '<br>';
                            ?>
                    </div>
                    <div class="col mx-auto border p-2 mt-2">
                        <b><?= $helicopter->getMaxLoad() . ' kg'; ?> <br></b>
                        <?= $helicopter->addBox(8000) . ' kg'; ?> <br>
                        <?= $helicopter->addBox(2000) . ' kg'; ?> <br>
                        <?= $helicopter->takeOff(); ?> <br>
                        <?= $helicopter->fly(); ?> <br>
                        <?= $helicopter->land(); ?> <br>
                        <?php 
                                echo "Jadi, membutuhkan bahan bakar sebanyak " . $helicopter->calcFuelNeeds() . ' Liter'. '<br>';
                            ?>
                    </div>
            </div>
        </div>
</body>
</html>