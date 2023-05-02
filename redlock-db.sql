DROP TABLE 
IF EXISTS users;

CREATE TABLE users
(
    ID VARCHAR(5) PRIMARY KEY,
    Nama VARCHAR(100) NOT NULL,
    Alamat VARCHAR(100) NOT NULL,
    Jabatan VARCHAR(100) NOT NULL
);

INSERT INTO users (ID, Nama, Alamat, Jabatan)
VALUES
('ID001', 'Darren', 'Gajah Mada', 'Mahasiswa'),
('ID002', 'Leyton', 'Tanah Abang', 'Murid SMP'),
('ID003', 'Budi', 'Bekasi', 'Bos'),
('ID004', 'Alisa', 'Orchard Street', 'Kepala Manager'),
('ID005', 'Supreme', 'Ion Mall', 'Cleaning service');