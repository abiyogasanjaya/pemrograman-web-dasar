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
            document.getElementById("contohJawaban").innerHTML = "Aku Tampil";
        }

        //Jalankan function 
        tampilkan();

        // Soal No. 1 Fungsi Teriak
        /* 
            Buatlah sebuah fungsi bernama teriak(), yang mengembalikan nilai berupa "Halo Function!", yang kemudian akan ditampilkan di halaman html.
            Tampilkan dengan cara document.getElementById("jawaban1").innerHTML seperti di CONTOH.
        */

        function teriak() {
            return "Halo Function!";
        }

        // Tampilkan jawaban dengan cara document.getElementById("jawaban1").innerHTML seperti di CONTOH
        document.getElementById("jawaban1").innerHTML = teriak();

        // Soal No. 2 Fungsi Kalikan
        /* 
            Buatlah sebuah fungsi bernama kalikan(), yang mengembalikan nilai berupa hasil kali dari dua parameter yang dikirim.
            CONTOH OUTPUT: 
            kalikan(5, 4) akan memberikan output 20
            Tampilkan jawaban dengan cara document.getElementById("jawaban2").innerHTML seperti di CONTOH
        */

        function kalikan(num1, num2) {
            return num1 * num2;
        }

        // Tampilkan jawaban dengan cara document.getElementById("jawaban2").innerHTML seperti di CONTOH
        document.getElementById("jawaban2").innerHTML = kalikan(5, 4);

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
            return "Nama saya " + nama + ", umur saya " + umur + " tahun, alamat saya di " + alamat + ", dan saya punya hobby yaitu " + hobi + "!";
        }

        // Tampilkan jawaban dengan cara document.getElementById("jawaban3").innerHTML seperti di CONTOH
        var name = "John Doe";
        var age = 30;
        var address = "Jln. Malioboro, Yogjakarta";
        var hobby = "gaming";
        document.getElementById("jawaban3").innerHTML = buatKalimat(name, age, address, hobby);
    </script>
</body>
</html>
