<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
        a{
            text-decoration:none;
            color:white;
        }
    </style>

</head>
<body>
    <?php

    $jumlahBenar = 0;

    $jawabanBenar = [8, 42, 3, 74, 6, 16, 2, 29, 7, 45, 5, 97];

    $jawaban1 = $_POST["jawaban1"];
    $jawaban2 = $_POST["jawaban2"];
    $jawaban3 = $_POST["jawaban3"];
    $jawaban4 = $_POST["jawaban4"];
    $jawaban5 = $_POST["jawaban5"];
    $jawaban6 = $_POST["jawaban6"];
    $jawaban7 = $_POST["jawaban7"];
    $jawaban8 = $_POST["jawaban8"];
    $jawaban9 = $_POST["jawaban9"];
    $jawaban10 = $_POST["jawaban10"];
    $jawaban11 = $_POST["jawaban11"];
    $jawaban12 = $_POST["jawaban12"];


    if ($jawaban1 == $jawabanBenar[0]) {
        $jumlahBenar++;
    }    if ($jawaban2 == $jawabanBenar[1]) {
        $jumlahBenar++;
    }    if ($jawaban3 == $jawabanBenar[2]) {
        $jumlahBenar++;
    }    if ($jawaban4 == $jawabanBenar[3]) {
        $jumlahBenar++;
    }    if ($jawaban5 == $jawabanBenar[4]) {
        $jumlahBenar++;
    }    if ($jawaban6 == $jawabanBenar[5]) {
        $jumlahBenar++;
    }    if ($jawaban7 == $jawabanBenar[6]) {
        $jumlahBenar++;
    }    if ($jawaban8 == $jawabanBenar[7]) {
        $jumlahBenar++;
    }    if ($jawaban9 == $jawabanBenar[8]) {
        $jumlahBenar++;
    }    if ($jawaban10 == $jawabanBenar[9]) {
        $jumlahBenar++;
    }    if ($jawaban11 == $jawabanBenar[10]) {
        $jumlahBenar++;
    }    if ($jawaban12 == $jawabanBenar[11]) {
        $jumlahBenar++;
    }   

    $salah= 12-$jumlahBenar;





    
    ?>
    <div class="container text-center">
        <div class="row">
            <div class="col-4"></div>

            <div class="col-4 bg-dark text-white rounded" style="padding-top:50px; padding-bottom:50px; margin-top:150px;">
            <h2 class="text-center text-white">Hasil Test Mata</h2>
            <hr class="mb-4">
                <?php
                echo "<p>Jumlah Jawaban yang Benar: $jumlahBenar</p>";
                echo "<p>Jumlah Jawaban yang Salah: $salah</p>";

                if($jumlahBenar == 12){
                    echo "Masih Sehat<br>";
                } elseif($jumlahBenar >= 8){
                    echo "Agak Sakit<br>";
                } elseif($jumlahBenar >= 4){
                    echo "Sudah Sakit<br>";
                } else{
                    echo "Sangat Sakit<br>";
                }

                $persen = ($jumlahBenar / 12) * 100;
                echo "Presentase Jawaban Benar $persen% ";
                echo '<div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width:' .round($persen).'%">'.round($persen).'%</div>
              </div>';

                ?>

                

                <div class="mb-4"></div>
                <button type="button" class="btn btn-primary" style="margin-right:10px;"><a href="kuis_mata.php">Test Ulang</a></button>
                <button type="button" class="btn btn-primary" style="margin-left:10px;"><a href="https://earth.google.com">Primary</a></button>
            </div>

            <div class="col-4"></div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>