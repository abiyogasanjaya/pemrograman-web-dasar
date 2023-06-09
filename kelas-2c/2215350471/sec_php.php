<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $Kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" ); // Lengkapi di sini
    $Adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($Kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $Kids[0] </li>";
    echo "<li> $Kids[1] </li>";
    echo "<li> $Kids[2] </li>";
    echo "<li> $Kids[3] </li>";
    echo "<li> $Kids[4] </li>";
    echo "<li> $Kids[5] </li>";
    echo "</ol>";
    // Lanjutkan

    echo "Total Adults: ".count($Adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $Adults[0] </li>";
    echo "<li> $Adults[1] </li>";
    echo "<li> $Adults[2] </li>";
    echo "<li> $Adults[3] </li>";
    echo "<li> $Adults[4] </li>";
    // Lanjutkan

    echo "</ol>";
    ?>
</body>

</html>

