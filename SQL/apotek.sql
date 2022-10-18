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

alter table obat add COLUMN tanggal_kadaluarsa DATE;

MariaDB [apotek]> desc obat;
+--------------------+-------------+------+-----+---------+-------+
| Field              | Type        | Null | Key | Default | Extra |
+--------------------+-------------+------+-----+---------+-------+
| id_obat            | int(6)      | NO   | PRI | NULL    |       |
| nama_obat          | varchar(30) | YES  |     | NULL    |       |
| jenis              | varchar(30) | YES  |     | NULL    |       |
| harga              | int(10)     | YES  |     | NULL    |       |
| tanggal_kadaluarsa | date        | YES  |     | NULL    |       |
+--------------------+-------------+------+-----+---------+-------+
5 rows in set (0.006 sec)

alter table pemesanan add COLUMN tanggal_pemesanan DATE;

MariaDB [apotek]> desc pemesanan;
+-------------------+---------+------+-----+---------+-------+
| Field             | Type    | Null | Key | Default | Extra |
+-------------------+---------+------+-----+---------+-------+
| id_pesanan        | int(30) | NO   | PRI | NULL    |       |
| id_pelanggan      | int(30) | YES  |     | NULL    |       |
| id_petugas        | int(30) | YES  |     | NULL    |       |
| id_obat           | int(90) | YES  |     | NULL    |       |
| jumlah_pesanan    | int(30) | YES  |     | NULL    |       |
| tanggal_pemesanan | date    | YES  |     | NULL    |       |
+-------------------+---------+------+-----+---------+-------+
6 rows in set (0.006 sec)

ALTER TABLE pelanggan rename to pembeli;

MariaDB [apotek]> desc pembeli;
+------------------+-------------+------+-----+---------+-------+
| Field            | Type        | Null | Key | Default | Extra |
+------------------+-------------+------+-----+---------+-------+
| id_pelanggan     | int(6)      | NO   | PRI | NULL    |       |
| nama_pelanggan   | varchar(30) | YES  |     | NULL    |       |
| alamat           | varchar(30) | YES  |     | NULL    |       |
| kontak_pelanggan | varchar(15) | YES  |     | NULL    |       |
+------------------+-------------+------+-----+---------+-------+
4 rows in set (0.007 sec)

ALTER TABLE pemesanan rename to transaksi;

MariaDB [apotek]> desc transaksi;
+-------------------+---------+------+-----+---------+-------+
| Field             | Type    | Null | Key | Default | Extra |
+-------------------+---------+------+-----+---------+-------+
| id_pesanan        | int(30) | NO   | PRI | NULL    |       |
| id_pelanggan      | int(30) | YES  |     | NULL    |       |
| id_petugas        | int(30) | YES  |     | NULL    |       |
| id_obat           | int(90) | YES  |     | NULL    |       |
| jumlah_pesanan    | int(30) | YES  |     | NULL    |       |
| tanggal_pemesanan | date    | YES  |     | NULL    |       |
+-------------------+---------+------+-----+---------+-------+
6 rows in set (0.008 sec)

alter table pembeli change id_pelanggan id_pembeli int(6);
alter table pembeli change nama_pelanggan nama_pembeli VARCHAR(30);
alter table pembeli change kontak_pelanggan kontak_pembeli VARCHAR(15);

MariaDB [apotek]> desc pembeli;
+----------------+-------------+------+-----+---------+-------+
| Field          | Type        | Null | Key | Default | Extra |
+----------------+-------------+------+-----+---------+-------+
| id_pembeli     | int(6)      | NO   | PRI | NULL    |       |
| nama_pembeli   | varchar(30) | YES  |     | NULL    |       |
| alamat         | varchar(30) | YES  |     | NULL    |       |
| kontak_pembeli | varchar(15) | YES  |     | NULL    |       |
+----------------+-------------+------+-----+---------+-------+
4 rows in set (0.006 sec)

alter table transaksi change id_pelanggan id_pembeli int(30);

MariaDB [apotek]> desc transaksi;
+-------------------+---------+------+-----+---------+-------+
| Field             | Type    | Null | Key | Default | Extra |
+-------------------+---------+------+-----+---------+-------+
| id_pesanan        | int(30) | NO   | PRI | NULL    |       |
| id_pembeli        | int(30) | YES  |     | NULL    |       |
| id_petugas        | int(30) | YES  |     | NULL    |       |
| id_obat           | int(90) | YES  |     | NULL    |       |
| jumlah_pesanan    | int(30) | YES  |     | NULL    |       |
| tanggal_pemesanan | date    | YES  |     | NULL    |       |
+-------------------+---------+------+-----+---------+-------+
6 rows in set (0.004 sec)

alter table pembeli MODIFY alamat TEXT(50);

MariaDB [apotek]> desc pembeli;
+----------------+-------------+------+-----+---------+-------+
| Field          | Type        | Null | Key | Default | Extra |
+----------------+-------------+------+-----+---------+-------+
| id_pembeli     | int(6)      | NO   | PRI | NULL    |       |
| nama_pembeli   | varchar(30) | YES  |     | NULL    |       |
| alamat         | tinytext    | YES  |     | NULL    |       |
| kontak_pembeli | varchar(15) | YES  |     | NULL    |       |
+----------------+-------------+------+-----+---------+-------+
4 rows in set (0.005 sec)

alter table petugas drop column jenis_kelamin;

MariaDB [apotek]> desc petugas;
+----------------+-------------+------+-----+---------+-------+
| Field          | Type        | Null | Key | Default | Extra |
+----------------+-------------+------+-----+---------+-------+
| id_petugas     | int(6)      | NO   | PRI | NULL    |       |
| nama_petugas   | varchar(30) | YES  |     | NULL    |       |
| kontak_petugas | varchar(15) | YES  |     | NULL    |       |
+----------------+-------------+------+-----+---------+-------+
3 rows in set (0.003 sec)

UPDATE `pembeli` SET `id_pembeli` = 'PG05' WHERE `pembeli`.`id_pembeli` = 'PG5';

insert INTO pembeli VALUES
('PG1', 'Burhan', 'Antapani', '0822736889187'),
('PG2', 'Keenan', 'Cibabat', '080988761524'),
('PG3', 'Anatasya', 'Cibiru', '081982736099'),
('PG4', 'Farida', 'Cianjur', '089573847287'),
('PG5', 'Nisa', 'Ciamis', '087348294252');

+------------+--------------+----------+----------------+
| id_pembeli | nama_pembeli | alamat   | kontak_pembeli |
+------------+--------------+----------+----------------+
| PG1        | Burhan       | Antapani | 0822736889187  |
| PG2        | Keenan       | Cibabat  | 080988761524   |
| PG3        | Anatasya     | Cibiru   | 081982736099   |
| PG4        | Farida       | Cianjur  | 089573847287   |
| PG5        | Nisa         | Ciamis   | 087348294252   |
+------------+--------------+----------+----------------+

UPDATE `petugas` SET `id_petugas` = 'PG05' WHERE `petugas`.`id_petugas` = 'PG5';

alter table petugas MODIFY id_petugas varchar(6);

insert into petugas VALUES
('PT01', 'Raka', '082736789187'),
('PT02', 'Nida', '081435761524'),
('PT03', 'Firda', '081789736056'),
('PT04', 'Farhan', '088343525252'),
('PT05', 'Ridwan', '089937422357');

+------------+--------------+----------------+
| id_petugas | nama_petugas | kontak_petugas |
+------------+--------------+----------------+
| PT01       | Raka         | 082736789187   |
| PT02       | Nida         | 081435761524   |
| PT03       | Firda        | 081789736056   |
| PT04       | Farhan       | 088343525252   |
| PT05       | Ridwan       | 089937422357   |
+------------+--------------+----------------+

alter table obat MODIFY id_obat varchar(6);

insert into obat (id_obat, nama_obat, harga) VALUES
('OBT01', 'VTM', '15000'),
('OBT02', 'VIT B1', '15000'),
('OBT03', 'VIT B6', '22000'),
('OBT04', 'Amoxillin', '20000'),
('OBT05', 'Ibu Profen', '15000');

+---------+------------+-------+-------+--------------------+
| id_obat | nama_obat  | jenis | harga | tanggal_kadaluarsa |
+---------+------------+-------+-------+--------------------+
| OBT01   | VTM        | NULL  | 15000 | NULL               |
| OBT02   | VIT B1     | NULL  | 15000 | NULL               |
| OBT03   | VIT B6     | NULL  | 22000 | NULL               |
| OBT04   | Amoxillin  | NULL  | 20000 | NULL               |
| OBT05   | Ibu Profen | NULL  | 15000 | NULL               |
+---------+------------+-------+-------+--------------------+

UPDATE `obat` SET `jenis` = 'Tablet', `tanggal_kadaluarsa` = '2022-10-18' WHERE `obat`.`id_obat` = 'OBT01';
UPDATE `obat` SET `jenis` = 'Kapsul', `tanggal_kadaluarsa` = '2023-03-09' WHERE `obat`.`id_obat` = 'OBT02';
UPDATE `obat` SET `jenis` = 'Kapsul', `tanggal_kadaluarsa` = '2025-05-30' WHERE `obat`.`id_obat` = 'OBT03';
UPDATE `obat` SET `jenis` = 'Sirup', `tanggal_kadaluarsa` = '2025-02-28' WHERE `obat`.`id_obat` = 'OBT04';
UPDATE `obat` SET `jenis` = 'Tablet', `tanggal_kadaluarsa` = '2025-07-05' WHERE `obat`.`id_obat` = 'OBT05';

+---------+------------+--------+-------+--------------------+
| id_obat | nama_obat  | jenis  | harga | tanggal_kadaluarsa |
+---------+------------+--------+-------+--------------------+
| OBT01   | VTM        | Tablet | 15000 | 2022-10-18         |
| OBT02   | VIT B1     | Kapsul | 15000 | 2023-03-09         |
| OBT03   | VIT B6     | Kapsul | 22000 | 2025-05-30         |
| OBT04   | Amoxillin  | Sirup  | 20000 | 2025-02-28         |
| OBT05   | Ibu Profen | Tablet | 15000 | 2025-07-05         |
+---------+------------+--------+-------+--------------------+

MariaDB [apotek]> select id_pembeli, alamat from pembeli;
+------------+----------+
| id_pembeli | alamat   |
+------------+----------+
| PG01       | Antapani |
| PG02       | Cibabat  |
| PG03       | Cibiru   |
| PG04       | Cianjur  |
| PG05       | Ciamis   |
+------------+----------+
5 rows in set (0.001 sec)

MariaDB [apotek]> select kontak_petugas from petugas where id_petugas = 'PT03';
+----------------+
| kontak_petugas |
+----------------+
| 081789736056   |
+----------------+

select * from obat where harga = '15000';

+---------+------------+--------+-------+--------------------+
| id_obat | nama_obat  | jenis  | harga | tanggal_kadaluarsa |
+---------+------------+--------+-------+--------------------+
| OBT01   | VTM        | Tablet | 15000 | 2022-10-18         |
| OBT02   | VIT B1     | Kapsul | 15000 | 2023-03-09         |
| OBT05   | Ibu Profen | Tablet | 15000 | 2025-07-05         |
+---------+------------+--------+-------+--------------------+


