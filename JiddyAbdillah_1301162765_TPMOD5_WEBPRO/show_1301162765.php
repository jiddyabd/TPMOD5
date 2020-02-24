<?php

$uts = $_POST['uts'];
$uas = $_POST['uas'];
$kuis = $_POST['kuis'];
$tubes = $_POST['tubes'];

$nilai = $uts*0.25 + $uas*0.25 + $kuis*0.15 + $tubes*0.35;

function index($nilai){
    if($nilai>80 && $nilai<=100){
        echo "A";
    }else if($nilai>70 && $nilai<=80){
        echo "AB";
    }else if($nilai>60 && $nilai<=70){
        echo  "B";
    }else if($nilai>50 && $nilai<=60){
        echo  "C";
    }else if($nilai>40 && $nilai<=50){
        echo  "D";
    }else{
        echo  "E";
    };
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Nilai - 1301162765></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center" style="margin:50px;">REKAP NILAI - <?php echo $_POST['nim'] ?></h1>
    <div class="container d-flex justify-content-sm-center align-items-center">
        
        <table class="table table-bordered">
            <tr>
                <th>UTS</th>
                <th>UAS</th>
                <th>Kuis</th>
                <th>Tubes</th>
                <th>Total Nilai</th>
                <th>Index</th>
            <tr>
                <td><?php echo $_POST['uts'] ?></td>
                <td><?php echo $_POST['uas'] ?></td>
                <td><?php echo $_POST['kuis'] ?></td>
                <td><?php echo $_POST['tubes'] ?></td>
                <td><?php echo $nilai?></td>
                <td><?php index($nilai) ?></td>
            </tr>
        </table>
    </div>
</body>
</html>