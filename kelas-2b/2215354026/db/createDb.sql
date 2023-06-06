DROP DATABASE IF EXISTS perpustakaan;
-- jawaban 1
CREATE DATABASE perpustakaan;
USE perpustakaan;
CREATE TABLE tb_user (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255)
);
-- jawaban 2
CREATE TABLE tb_kategori (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);
CREATE TABLE tb_buku (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(255),
    penerbit VARCHAR(255),
    pengarang VARCHAR(255),
    tahun_terbit YEAR,
    kategori_id INT,
    FOREIGN KEY (kategori_id) REFERENCES tb_kategori(id)
);
-- jawaban 3
INSERT INTO tb_user (nama, email, password)
VALUES
    ('John Doe', 'johndoe@doe.com', 'john123'),
    ('Jane Doe', 'jane@doe.com', 'jenita123');
INSERT INTO tb_kategori (name)
VALUES ('Novel'), ('Dongeng'), ('Komik');
-- jawaban 4
INSERT INTO tb_buku (judul, penerbit, pengarang, tahun_terbit, kategori_id)
VALUES
    ('Ayat-Ayat Cinta', 'Basmala', 'Habibburahman', 2004, 1),
    ('Dilan', 'Basmala', 'Habibburahman', 2004, 2),
    ('Timun Mas', 'Basmala', 'Habibburahman', 2004, 3);
SELECT tb_buku.judul, tb_kategori.name AS 'nama_kategori' FROM tb_buku JOIN tb_kategori ON tb_buku.kategori_id = tb_kategori.id;
-- jawaban 5
UPDATE tb_buku SET tahun_terbit = 2001 WHERE judul='Ayat-Ayat Cinta';
