INSERT INTO tb_anggota VALUES
('1234', 'Ayunda'),
('1235', 'Moona'),
('1236', 'Iofi'),
('1237', 'Ollie'),
('1238', 'Reine');

INSERT INTO tb_buku VALUES
('1001', 'Mencari Siput', 'Maya'),
('1002', 'Robotku', 'Yukina'),
('1003', 'Sepatuku', 'Otae'),
('1004', 'Pahlawan', 'Mashiro'),
('1005', 'Persahabatan', 'Moca');

alter table tb_petugas_perpus add column username varchar(20);
alter table tb_petugas_perpus add column password varchar(10);

INSERT INTO tb_petugas_perpus VALUES
('1', 'Toyama Kasumi', 'kirakria', 'dokidoki'),
('2', 'Arisa Ichigaya', 'kasumi', 'daisuki'),
('3', 'Tae Hanazono', 'usagi', 'mitai'),
('4', 'Rimi Ushigome', 'choco', 'korone'),
('5', 'Saya Yamabuki', 'pan', 'taberu');




