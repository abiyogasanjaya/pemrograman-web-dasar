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
    $kids=array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" ); // Lengkapi di sini
    $adult= array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");
    print_r($kids);
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
    // Lanjutkan

    echo "</ol>";

    echo "Total Adults: "; // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adult[0] </li>";
    echo "<li> $adult[1] </li>";
    echo "<li> $adult[2] </li>";
    echo "<li> $adult[3] </li>";
    echo "<li> $adult[4] </li>";

    // Lanjutkan

    echo "</ol>";
    ?>
</body>

</html>

