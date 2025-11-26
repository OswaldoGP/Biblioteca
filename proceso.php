<?php 
$libros = floatval($_POST['libroAtrasado']);
$dias = floatval($_POST['diaAtraso']);
$mismo_dia = $_POST['mismoDia'];

$multa_base = 5;
$recargo_dia = 2;

$total_base = $libros * $multa_base;
$total_recargo = $libros * $dias * $recargo_dia;
$total = $total_base + $total_recargo;

if ($mismo_dia == 'si') {
    $descuento = $total * 0.20; 
} else {
    $descuento = 0;
}

$total_final = $total - $descuento;
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background-color: #f4e8ff;
        font-family: Arial, sans-serif;
    }
    .card {
        border: 2px solid rgb(100, 37, 177);
        border-radius: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
    }
    .titulo {
        color: rgb(85, 28, 81);
        font-weight: bold;
    }
    .btn-morado {
        background-color: rgb(126, 34, 255);
        color: #fff;
        border-radius: 10px;
        padding: 10px 20px;
        border: none;
    }
    .btn-morado:hover {
        background-color: #9b4dff;
        color: #fff;
    }
</style>

</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card p-4 text-center">
                <h3 class="titulo mb-4">Resultado de la Multa</h3>

                <p class="fs-5">
                    Multa: $<?= $total_base ?> + Recargo: $<?= $total_recargo ?> = $<?= $total ?>
                </p>

                <?php if ($descuento > 0) { ?>
                    <p class="fs-4 text-success fw-bold">
                        Con descuento 20%: $<?= number_format($total_final, 2) ?>
                    </p>
                <?php } else { ?>
                    <p class="fs-4 fw-bold text-danger">
                        Sin descuento: $<?= number_format($total_final, 2) ?>
                    </p>
                <?php } ?>

                <a href="index.php" class="btn btn-morado mt-3">Regresar</a>
            </div>

        </div>
    </div>
</div>  

</body>
</html>
