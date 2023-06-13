<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>
<body>
    <h1>Berlatih Fungsi</h1>

    <h3>Contoh Soal</h3>
    <div id="contohJawaban">

    </div>

    <h3>Soal No.1</h3>
    <div id="jawaban1">

    </div>

    <h3>Soal No.2</h3>
    <div id="jawaban2">

    </div>

    <h3>Soal No.3</h3>
    <div id="jawaban3">

    </div>

    <script>

        // CONTOH
        // Kamu diminta untuk membuat fungsi bernama tampilkan() untuk menampilkan "Aku Tampil" pada halaman html. 

        // Jawaban CONTOH
        function tampilkan() {
            document.getElementById("contohJawaban").innerHTML = "Aku Tampil"
        }

        //Jalankan function 
        tampilkan()

        // Soal No. 1 Fungsi Teriak
        /* 
            Buatlah sebuah fungsi bernama teriak(), yang mengembalikan nilai berupa "Halo Function!", yang kemudian akan ditampilkan di halaman html.
            Tampilkan dengan cara document.getElementById("jawaban1").innerHTML seperti di CONTOH.
        */

        
        function teriak() {
            // Tulis Code mulai di sini

            document.getElementById("jawaban1").innerHTML = "Halo Function!"
            // Tampilkan dengan cara document.getElementById("jawaban1").innerHTML seperti di CONTOH.
        }
        
        // Jalankan function teriak
        teriak()

        // Soal No. 2 Fungsi Kalikan
        /* 
            Buatlah sebuah fungsi bernama kalikan(), yang mengembalikan nilai berupa hasil kali dari dua parameter yang dikirim.
            CONTOH OUTPUT: 
            kalikan(5, 4) akan memberikan output 20
            Tampilkan jawaban dengan cara document.getElementById("jawaban2").innerHTML seperti di CONTOH
        */

        
        function kalikan(num1, num2) {
            // Code kamu mulai dari sini
            document.getElementById("jawaban2").innerHTML = num1 * num2;


            // Tampilkan jawaban dengan cara document.getElementById("jawaban2").innerHTML seperti di CONTOH
        }
        


        // Jalankan function kalikan
        kalikan(5, 4)

        // Soal No. 3 Fungsi buatKalimat
        /* 
            Buatlah sebuah fungsi bernama buatKalimat(), yang akan memproses seluruh parameter yang diinput menjadi satu kalimat berikut: 
            "Nama saya [Name], umur saya [Age] tahun, alamat saya di [Address], dan saya punya hobby yaitu [hobby]!"

            CONTOH: 
            var name = "Agus";
            var age = 30;
            var address = "Jln. Malioboro, Yogjakarta";
            var hobby = "gaming";

            var kalimatBaru = buatKalimat(name,age,address,hobby);
            Akan menampilkan : 
            "Nama saya Agus, umur saya 30 tahun, alamat saya di Jln. Malioboro, Yogjakarta, dan saya punya hobby yaitu gaming!"
            Tampilkan dengan cara document.getElementById("jawaban3").innerHTML seperti di CONTOH
        */

        function buatKalimat(nama, umur, alamat, hobi) {
            // Code kamu mulai dari sini
            document.getElementById("jawaban3").innerHTML ="Nama Saya " +nama +", umur saya "+umur+" tahun, alamat saya di "+alamat+" dan saya memiliki hobby yaitu "+ hobi;  
            // Tampilkan dengan cara document.getElementById("jawaban3").innerHTML seperti di CONTOH.
        }


        // Jalankan function buatKalimat
        var name = "Okhrisiana";
        var age = 19;
        var address = "Jl.Pratama gang Ksatria No.03";
        var hobby = "main game, bermain game, dan memainkan game";
        buatKalimat(name, age, address, hobby);
    </script>
</body>
</html>