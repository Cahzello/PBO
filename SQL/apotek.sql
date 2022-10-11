create database apotek;

use apotek;

create table pelanggan (
    id_pelanggan INT(6) PRIMARY key,
    nama_pelanggan VARCHAR(30),
    alamat VARCHAR(30),
    kontak_pelanggan VARCHAR(15)
);

MariaDB [apotek]> desc pelanggan;
+------------------+-------------+------+-----+---------+-------+
| Field            | Type        | Null | Key | Default | Extra |
+------------------+-------------+------+-----+---------+-------+
| id_pelanggan     | int(6)      | NO   | PRI | NULL    |       |
| nama_pelanggan   | varchar(30) | YES  |     | NULL    |       |
| alamat           | varchar(30) | YES  |     | NULL    |       |
| kontak_pelanggan | varchar(15) | YES  |     | NULL    |       |
+------------------+-------------+------+-----+---------+-------+
4 rows in set (0.006 sec)

create table petugas (
    id_petugas INT(6) PRIMARY key,
    nama_petugas VARCHAR(30),
    jenis_kelamin CHAR(2),
    kontak_petugas VARCHAR(15)
);

MariaDB [apotek]> desc petugas;
+----------------+-------------+------+-----+---------+-------+
| Field          | Type        | Null | Key | Default | Extra |
+----------------+-------------+------+-----+---------+-------+
| id_petugas     | int(6)      | NO   | PRI | NULL    |       |
| nama_petugas   | varchar(30) | YES  |     | NULL    |       |
| jenis_kelamin  | char(2)     | YES  |     | NULL    |       |
| kontak_petugas | varchar(15) | YES  |     | NULL    |       |
+----------------+-------------+------+-----+---------+-------+
4 rows in set (0.008 sec)

create table obat (
    id_obat INT(6) PRIMARY key,
    nama_obat VARCHAR(30),
    jenis VARCHAR(30),
    harga VARCHAR(900)
);

MariaDB [apotek]> desc obat;
+-----------+--------------+------+-----+---------+-------+
| Field     | Type         | Null | Key | Default | Extra |
+-----------+--------------+------+-----+---------+-------+
| id_obat   | int(6)       | NO   | PRI | NULL    |       |
| nama_obat | varchar(30)  | YES  |     | NULL    |       |
| jenis     | varchar(30)  | YES  |     | NULL    |       |
| harga     | varchar(900) | YES  |     | NULL    |       |
+-----------+--------------+------+-----+---------+-------+
4 rows in set (0.008 sec)

create table pemesanan (
    id_pesanan INT(30) PRIMARY key,
    id_pelanggan int(30),
    id_petugas int(30),
    id_obat int(90),
    jumlah_pesanan INT(30)
);

MariaDB [apotek]> desc pemesanan;
+----------------+---------+------+-----+---------+-------+
| Field          | Type    | Null | Key | Default | Extra |
+----------------+---------+------+-----+---------+-------+
| id_pesanan     | int(30) | NO   | PRI | NULL    |       |
| id_pelanggan   | int(30) | YES  |     | NULL    |       |
| id_petugas     | int(30) | YES  |     | NULL    |       |
| id_obat        | int(90) | YES  |     | NULL    |       |
| jumlah_pesanan | int(30) | YES  |     | NULL    |       |
+----------------+---------+------+-----+---------+-------+
5 rows in set (0.010 sec)

alter table obat modify harga INTEGER(10);

MariaDB [apotek]> desc obat;
+-----------+-------------+------+-----+---------+-------+
| Field     | Type        | Null | Key | Default | Extra |
+-----------+-------------+------+-----+---------+-------+
| id_obat   | int(6)      | NO   | PRI | NULL    |       |
| nama_obat | varchar(30) | YES  |     | NULL    |       |
| jenis     | varchar(30) | YES  |     | NULL    |       |
| harga     | int(10)     | YES  |     | NULL    |       |
+-----------+-------------+------+-----+---------+-------+
4 rows in set (0.008 sec)


