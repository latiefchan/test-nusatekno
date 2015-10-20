<!DOCTYPE html>
<html>
<head>
    <title>Soal ke 3 - Tabel Penjualan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="navbar">
    <a href="index.php" class="current">3A</a>
    <a href="soal2.php">3B</a>
    <a href="soal3.php">3C</a>
    <a href="soal4.php">3D</a>
    <a href="soal5.php">3E</a>
</div>
<div class="container">
    <?php
    require("db.php");
    $Lib  = new Db();
    $execute = $Lib->func1();?>
    <h1>Total penjualan pada bulan februari = <?php echo $execute->fetch(PDO::FETCH_OBJ)->jumlah_dijual; ?></h1>
</div>
</body>
</html>