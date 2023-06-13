no 1.
CREATE DATABSE perpustakaan;

no 2.
a. CREATE TABLE tb_user (
            id int AUTO INCEREMENT PRIMARY KEY,
            name Varchar(255),
            email Varchar(255),
            password Varchar(255)
        );
b. CREATE TABLE tb_kategori (
            id int AUTO INCEREMENT PRIMARY KEY,
            name Varchar (255)
        );
c. CREATE TABLE tb_buku (
             id int AUTO INCEREMENT PRIMARY KEY,
             judul Varchar(255),
             penerbit Varchar(255),
             pengarang Varchar(255),
             tahun_terbit YEAR,
             kategori_id int,
             FOREIGN KEY (kategori_id) REFERENCES tb_kategori(id)
        );

no 3.
a. INSERT INTO `tb_user`(`id`, `name`, `email`, `password`) VALUES 
        ('','John Doe','john@doe.com','john123'),
        ('','Jane Doe','jane@doe.com','janila123');
b. INSERT INTO `tb_kategori`(`id`, `name`) VALUES
        ('1','Novel'),
        ('2','Dongeng'),
        ('3','Komik');
c. INSERT INTO `tb_buku`(`id`, `judul`, `penerbit`, `pengarang`, `tahun_terbit`, `kategori_id`) VALUES 
        ('','Spirit Doll','Blue Water','Azhar Suryadi','2023','1'),
        ('','Imperfect','Starvision','Ernest Prakasa','2019','1'),
        ('','Mozzachiko','Manuj Punjabi','Poppi Pertiwi','2023','2')
no 4.
SELECT tb_buku.judul, tb_buku.penerbit, tb_buku.pengarang, tb_buku.tahun_terbit,tb_kategori.name as 'nama_ketegori'
FROM `tb_buku`
JOIN tb_kategori ON tb_buku.`kategori_id` = tb_kategori.id;

no 5.
UPDATE tb_buku
SET tahun_terbit = 2001
WHERE judul = 'Ayat-Ayat Cinta'; 