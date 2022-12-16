CREATE VIEW Cekout AS
SELECT WK.Transactionnumber as id_transaksi, ling.total_harga as total_harga 
FROM form_transactions WK
LEFT JOIN pembayarans ling on ling.id_transaksi = WK.Transactionnumber