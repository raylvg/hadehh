<?php

    $gajibersih = 0;
    $gajibulanan = 0;
    $gajitahun = 0;
    $ptkp = 0;
    $pph = 0;
    $ppb = 0;
    $bpjskesehatan = 0;
    $bpjsketenagakerjaan = 0;
    $pkp = 0;
    $gb = 0;

    if(isset($_POST["submit"])) {
        $gajibulanan = $_POST["gb"];
        $option1 = $_POST["option1"];
        $option2 = $_POST["option2"];



        if($option1 == "sudah" && $option2 == 0){
            $ptkp = 58500000; 
        } elseif($option1 == "sudah" && $option2 == 1){
            $ptkp = 63000000;
        } elseif($option1 == "sudah" && $option2 == 2){
            $ptkp = 67500000;
        } elseif($option1 == "sudah" && $option2 == 3){
            $ptkp = 72000000;
        } elseif($option1 == "belum" && $option2 == 0){
            $ptkp = 54000000; 
        } elseif($option1 == "belum" && $option2 == 1){
            $ptkp = 58500000;
        } elseif($option1 == "belum" && $option2 == 2){
            $ptkp = 63000000;
        } elseif($option1 == "belum" && $option2 == 3){
            $ptkp = 67500000;
        }


        

        $gajitahun = $gajibulanan * 12;
        
        
        
        $pkp = $gajitahun - $ptkp;
        $pph = (5/100) * $pkp;
        $ppb = $pph / 12;
        $bpjskesehatan = (1/100) * $gajibulanan;
        $bpjsketenagakerjaan = (2/100) * $gajibulanan;
        $gajibersih = $gajibulanan - ($ppb + $bpjskesehatan + $bpjsketenagakerjaan);

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<div class="container">
    <h1 style="text-align: center;">kalkulator Gaji</h1>
    <p style="text-align: center;">Kalkulator Gaji membantu kamu menghitung gaji bersih bulanan dengan lebih mudah.</p>
    <br>
    
    <div class="row">
        <div class="col-sm-5 col-md-6">
            <form method="post" action="tugas.php">

                <div>
                    <label>Gaji Kotor Bulanan</label> <br>
                    <input style="width:475px;" type="number" name="gb" class="mb-3" placeholder="Rp."> <br>
                </div>

            <div class="d-flex">
                <div>
                    <label>Status Perkawinan</label> <br>
                    <select class="form-select" name="option1" style="padding-right: 130px;" id="inputGroupSelect01">
                        <option value="belum">Belum Kawin</option>
                        <option value="sudah">Sudah Kawin</option>
                    </select>
                </div>
        
        
                <div style="margin-left: 20px;">
                    <label>Jumlah Tanggungan</label> <br>
                    <select class="form-select" name="option2" style="padding-right: 200px;" id="inputGroupSelect02">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
            </div>
        
            <input type="submit" class="btn btn-primary" value="hasil" name="submit" style="padding-left:50px; padding-right: 50px; margin-top: 20px;" class="btn btn-primary" id="liveAlertBtn">
            </form>
        </div>

<!--  -->



        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">

                    <?php
                
                        // echo "Gaji Bulanan: " .$gajibulanan;
                        // echo "<br>Gaji di Setahunkan: " .$gajitahun;
                        // echo "<br>Penghasilan Tidak Kena Pajak (PTKP): " .$ptkp;
                        // echo "<br>Penghasilan Kena Pajak (PKP): " .$pkp;

                        // echo "<hr>";

                        // echo "<br>Pajak Penghasilan Tahunan (PPh 21): " .$pph;
                        // echo "<br>Pajak Penghasilan Bulanan: " .$ppb;
                        // echo "<br>BPJS Kesehatan: " .$bpjskesehatan;
                        // echo "<br>BPJS Ketenagakerjaan: Rp." .$bpjsketenagakerjaan;

                        // echo "<hr>";

                        // echo "<br>Gaji Bersih Bulanan (Take Home Pay)<br>";
                        // echo "<h2> $gajibersih </h2>";
                    ?>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div> -->

        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0" id="liveAlertPlaceholder">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                
                <?php
                
                        echo "Gaji Bulanan: " .$gajibulanan;
                        echo "<br>Gaji di Setahunkan: " .$gajitahun;
                        echo "<br>Penghasilan Tidak Kena Pajak (PTKP): " .$ptkp;
                        echo "<br>Penghasilan Kena Pajak (PKP): " .$pkp;

                        echo "<hr>";

                        echo "<br>Pajak Penghasilan Tahunan (PPh 21): " .$pph;
                        echo "<br>Pajak Penghasilan Bulanan: " .$ppb;
                        echo "<br>BPJS Kesehatan: " .$bpjskesehatan;
                        echo "<br>BPJS Ketenagakerjaan: Rp." .$bpjsketenagakerjaan;

                        echo "<hr>";

                        echo "<br>Gaji Bersih Bulanan (Take Home Pay)<br>";
                        echo "<h2> $gajibersih </h2>";
                    ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>    
        </div>

        <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Launch demo modal
            </button> -->

    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
const appendAlert = (message, type) => {
  const wrapper = document.createElement('div')
  wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
    '</div>'
  ].join('')

  alertPlaceholder.append(wrapper)
}

const alertTrigger = document.getElementById('liveAlertBtn')
if (alertTrigger) {
  alertTrigger.addEventListener('click', () => {
    appendAlert('Nice, you triggered this alert message!', 'success')
  })
}
    </script>
</body>
</html>