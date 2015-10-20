<?php

class Db
{
    function __construct()
    {
        $this->konek_db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }
    
    /* Total penjualan pada bulan Februari */
    function func1()
    {
        $sql = "SELECT `penjualan_detil`.`jumlah_dijual`
                 FROM `penjualan` LEFT JOIN `penjualan_detil`
                 ON `penjualan`.`id` = `penjualan_detil`.`id_penjualan`
                 WHERE DATE_FORMAT(`penjualan`.`tanggal`,'%m')='02'";
        $query = $this->konek_db->query($sql);
        return $query;
    }
    
    /* ID Barang yang paling banyak dibeli */
    function func2()
    {
        $sql = "SELECT `id_barang`
                 FROM `penjualan_detil`
                 WHERE `jumlah_dijual`=(SELECT MAX(`jumlah_dijual`) FROM `penjualan_detil`)";
        return $this->konek_db->query($sql);
    }
    
    /* Jumlah Transaksi keseluruhan */
    function func3()
    {
        $sql = "SELECT COUNT(`id_penjualan`) AS total_transaksi
                 FROM `penjualan_detil`";
        return $this->konek_db->query($sql);
    }
    
    /* Total penjualan per ID Barang */
    function func4()
    {
        $sql = "SELECT `id_penjualan`, SUM((`harga_satuan` * `jumlah_dijual`)) AS total_penjualan
                 FROM `penjualan_detil`
                 GROUP BY `id_penjualan`";
        return $this->konek_db->query($sql);
    }
    
    /* Jumlah Barang dan Total Penjualan setiap transaksi */
    function func5()
    {
        $sql = "SELECT `id_penjualan`, COUNT(`id_barang`) AS jumlah_barang, SUM((`harga_satuan` * `jumlah_dijual`)) AS total_penjualan
                 FROM `penjualan_detil`
                 GROUP BY `id_penjualan`";
        return $this->konek_db->query($sql);
    }
    
}