<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3>Soal Tentukan Nilai </h3>";
    /*
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter
    berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik”
    Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar
    sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
    */

    // Code function di sini
    function tentukan_nilai(int $number)
    {
        if ($number >= 85 && $number <= 100) {
            echo "Sangat Baik";
        } else if($number >= 70 && $number < 85){
            echo"Baik";
        }else if($number >= 60 && $number < 70){
            echo"Cukup";
        }else{
            echo"Kurang";
        }
        
    }
    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98)."<br>"; //Sangat Baik
    echo tentukan_nilai(76)."<br>"; //Baik
    echo tentukan_nilai(67)."<br>"; //Cukup
    echo tentukan_nilai(43)."<br>"; //Kurang
    ?>
</body>
</html>

