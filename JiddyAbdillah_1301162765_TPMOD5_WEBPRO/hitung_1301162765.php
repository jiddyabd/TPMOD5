<?php
    $angka1 = $_GET["angka1"];
    $angka2 = $_GET["angka2"];
    $ops = $_GET["ops"];
    if($ops == "+"){
        $hasil = $angka1 + $angka2;
    };
    if($ops == "-"){
        $hasil = $angka1 - $angka2;
    };
    if($ops == "/"){
        $hasil = $angka1 / $angka2;
    };
    if($ops == "x"){
        $hasil = $angka1 * $angka2;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hitung - 1301162765</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center" style="margin:50px;">Hasil</h1>
    <div class="container d-flex justify-content-sm-center align-items-center">
        <h4><?php echo $angka1.$ops.$angka2."=".$hasil ?></h6>
    </div>
</body>
</html>