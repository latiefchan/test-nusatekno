<!DOCTYPE html>
<html>
<head>
    <title>Soal ke 3 - Tabel Penjualan</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="navbar">
        <a href="index.php">3A</a> 
        <a href="soal2.php">3B</a> 
        <a href="soal3.php">3C</a> 
        <a href="soal4.php">3D</a> 
        <a class="current" href="soal5.php">3E</a>
    </div>
    <div class="container">
        <h1>Jumlah Barang dan Total Penjualan setiap transaksi</h1>
        <table class="zebra-table">
            <thead>
                <tr>
                    <th>ID Penjualan</th>
                    <th>Jumlah Barang</th>
                    <th>Total Penjualan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require("db.php");
                $Lib  = new Db();
                $execute = $Lib->func5();
                while ($data = $execute->fetch(PDO::FETCH_OBJ)) { ?>
                    <tr>
                        <td><?php echo $data->id_penjualan ?></td>
                        <td><?php echo $data->jumlah_barang ?></td>
                        <td><?php echo $data->total_penjualan ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table><br>
    </div>
</body>
</html>