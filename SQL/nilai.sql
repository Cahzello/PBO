CREATE TABLE siswa (
    NIS varchar(6) PRIMARY KEY,
    Nama_Siswa VARCHAR(30),
    Kelas VARCHAR(30)
);

CREATE TABLE guru (
    NUPTK varchar(6) PRIMARY KEY,
    Nama_guru VARCHAR(30),
    Alamat VARCHAR(30)
);

CREATE TABLE matapelajaran (
    Kode_mapel varchar(6) PRIMARY KEY,
    NUPTK VARCHAR(6) not null,
    Nama_matpel VARCHAR(30),
    FOREIGN KEY (NUPTK) REFERENCES guru (NUPTK)
); 

CREATE TABLE nilai (
    Kode_nilai varchar(6) PRIMARY KEY,
    NIS VARCHAR(6),
    Kode_mapel VARCHAR(6),
    Nilai varchar(30),
    FOREIGN KEY (NIS) REFERENCES siswa (NIS),
    FOREIGN KEY (Kode_mapel) REFERENCES matapelajaran (Kode_mapel)
); 

insert into siswa values 
('150130', 'Rahman Abdul', 'XA'),
('150140', 'Tegar Cahya', 'XB'),
('150150', 'Atikah', 'XB'),
('150160', 'Reisya', 'XA');

insert into guru VALUES
('11001', 'Andri Reflanto', 'Soreang'),
('11002', 'Ade Aso', 'Cipageran'),
('11003', 'M Noor Basuki', 'Baleendah'),
('11004', 'Agista', 'Gumuruh');

insert into matapelajaran values
('001', '11001', 'PKN'),
('002', '11002', 'IOT'),
('003', '11003', 'PBO'),
('004', '11004', 'INGGRIS');

insert into nilai VALUES
('PKN-01', '150130', '001', '70'),
('PKN-02', '150140', '001', '80'),
('PKN-03', '150150', '001', '90'),
('PKN-04', '150160', '001', '80'),
('IOT-01', '150130', '002', '80'),
('IOT-02', '150140', '002', '80'),
('IOT-03', '150150', '002', '50'),
('IOT-04', '150160', '002', '60'),
('PBO-01', '150130', '003', '70'),
('PBO-02', '150140', '003', '65'),
('PBO-03', '150150', '003', '75'),
('PBO-04', '150160', '003', '85'),
('ING-01', '150130', '004', '95'),
('ING-02', '150140', '004', '85'),
('ING-03', '150150', '004', '80'),
('ING-04', '150160', '004', '90');

select AVG(nilai) from nilai;

select min(nilai) from nilai;

select max(nilai) from nilai;

select count(Nama_matpel) from matapelajaran;

select count(nama_siswa) from siswa;

select count(nama_guru) from guru;

select nama_siswa from siswa where nama_siswa like '%b%';

select * from matapelajaran order by Nama_matpel asc;

select * from siswa order by Nama_siswa desc;

create user 'kasumi'@'localhost' IDENTIFIED BY '123456';

DROP USER 'kasumi'@'localhost';

create user 'kasumi'@'localhost' IDENTIFIED BY '123456';

SHOW GRANTS FOR 'kasumi'@'localhost';

GRANT INSERT ON apotek.obat TO 'kasumi'@'localhost';

INSERT INTO obat values
('OBT06', 'kadal', 'rokok', '9000000', '2002-08-12');

REVOKE INSERT ON apotek.obat FROM 'kasumi'@'localhost';

GRANT ALL ON apotek. * TO 'kasumi'@'localhost';

SELECT nilai.nis, nama_siswa, avg(nilai) as rata_rata from siswa, nilai where siswa.nis = nilai.nis group by nilai.nis;

SELECT nilai.nis, nama_siswa, avg(nilai) as rata_rata from siswa, nilai where siswa.nis = nilai.nis group by nilai.nis order by rata_rata;

select nilai.nis, nama_siswa, min(nilai) as terkecil, max(nilai) as terbesar from siswa,
    nilai where siswa.nis = nilai.nis group by nilai.nis
    ;

select sum(nilai) from nilai;

select nilai.nis, nama_siswa, sum(nilai) as total from siswa,
    nilai where siswa.nis = nilai.nis group by nilai.nis
;

select barang.id_barang as nomor from barang,
    pembelian where barang.id_barang = pembelian.id_barang group by pembelian.id_barang
; 

-- usfjusufsfjdsfjokldsjfokdshgjdfgjdgkjdrebgjrbj

select nama_siswa from siswa where nama_siswa like '%ya%';

select nilai from nilai order by nilai desc;

select nama_siswa from siswa where nis='150150';

select nama_guru from guru where nuptk='11003';

select nuptk, nama_guru from guru where nama_guru like 'a%';

select nama_matpel from matapelajaran where kode_mapel='003';

select count(nama_matpel) from matapelajaran;



