<html>
<head>
    <title>tes</title>
</head>
<body>
    ======== hitung berat badan =========
    <form action="Program.php" name="formInput" method="post">
        <table>
            <tr>
                <td>Masukkan Nama Anda</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Masukkan Tinggi Badan</td>
                <td><input type="text" name="tinggiBadan"></td>
            </tr>
            <tr>
                <td>Pilih Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perampuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Masukkan Berat Badan Sekarang</td>
                <td><input type="text" name="beratBadan"></td>
            </tr>
            <td></td>
            <td>
                <input type="submit" value="Hitung">
                <input type="reset" value="Batal">
            </td>
        </table>
    </form>
</body>
</html>