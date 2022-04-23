-- CREATE TABLE TRANSAKSI
CREATE TABLE transaksi (
  id int(50) NOT NULL,
  tanggal_order datetime,
  status_pelunasan varchar(100),
  tanggal_pembayaran datetime,
  PRIMARY KEY (id)
);

-- SEED DATA TABLE TRANSAKSI
INSERT INTO transaksi (id, tanggal_order, status_pelunasan, tanggal_pembayaran) VALUES
(1, '2020-12-01 11:30:00', 'lunas', '2020-12-01 12:00:00'),
(2, '2022-05-05 14:12:00', 'hutang', '2020-09-01 04:00:00'),
(3, '2020-12-02 10:30:00', 'pending', NULL);

-- CREATE TABLE DETAIL TRANSAKSI
CREATE TABLE detail_transaksi (
  id int(50) NOT NULL,
  id_transaksi int(50),
  harga int(100),
  jumlah int(20),
  subtotal int(100),
  PRIMARY KEY (id)
);

-- SEED DATA TABLE DETAIL TRANSAKSI
INSERT INTO detail_transaksi (id, id_transaksi, harga, jumlah, subtotal) VALUES
(1, 1, 20000, 2, 40000),
(2, 3, 25000, 4, 100000);

-- QUERY
SELECT t.id, t.tanggal_order, t.status_pelunasan, t.tanggal_pembayaran, dt.harga, dt.jumlah
FROM transaksi t
JOIN detail_transaksi dt ON dt.id_transaksi = t.id 
