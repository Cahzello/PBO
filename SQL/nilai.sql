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




