<?php include_once('Aes.php'); ?>
<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['key'])) {
        $b = $_POST['key'];
        $a = $_POST['plaintext'];
        $aes = new Aes($b);

        // $a2 = hex2bin($a);
        $hasil = bin2hex($aes->encrypt($a));
    }

    if (isset($_POST['key-dekrip'])) {
        $c = $_POST['key-dekrip'];
        $hasil3 = $_POST['text-dekrip'];
        // echo bin2hex($hasil);
        $aes = new Aes($c);
        $hasil2 = hex2bin($hasil3);

        $d = $aes->decrypt($hasil2);
    }

    // $hasil2 = $aes->decrypt($hasil);
    // $a = bin2hex($hasil);
    // echo "<p>hasil enkripsi : " . bin2hex($hasil) . "</p>";
    // echo "<p>hasil enkripsi2 : " . hex2bin($a) . "</p>";
    // echo "<p>hasil enkripsi : " . bin2hex($a) . "</p>";
    // echo "<p>hasil enkripsi : " . $hasil . "</p>";
    // echo "<p>hasil dekripsi : " . $hasil2 . "</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <title>AES php</title>
<style>
body{
    height: 100vh;
    background-image:url("po.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #752BEA;
    color: #fff;
    font-size: 20px;
}
</style>
</head>
<body>
    <div class="container" class="">
    <h2 class="text-center">AES KELOMPOK2</h2>
    <hr>
    <div class="row">
        <div class="col-md-6">
        <h3>Plaintext</h3>
        <form action="" method="post">
        <!-- <input type="plaintext" name="plaintext" id="" placeholder="masukkan plaintext"> -->
        <textarea rows="4" cols="50" class="form-control" name="plaintext"></textarea><br>

        <h4>Kunci</h4>
        <input type="text"  class="form-control" name="key" id="" placeholder="Kunci" value="<?php if (isset($b)) echo $b ?>"><br>
        <input type="submit" value="submit" class="btn btn-primary" name="submit">
		
		<h4>Hasil Enkripsi</h4>
		<textarea rows="4" cols="50" class="form-control" name="text2"><?php if (isset($hasil)) echo ($hasil) ?></textarea><br>
    </form>
        </div>

        <div class="col-md-6">
        <h3>Dekripsi</h3>
        <form action="" method="post">
        <!-- <input type="text" name="text" id="" placeholder="masukkan text"> -->
        <textarea rows="4" cols="50" class="form-control" name="text-dekrip"></textarea><br>
        
		<h4>Kunci</h4>
        <input type="text" class="form-control" name="key-dekrip" id="" placeholder="Kunci" value="<?php if (isset($c)) echo $c ?>"><br>
        <input type="submit" value="submit" class="btn btn-primary" name="submit">
		
		<h4>Hasil Deskripsi</h4>
		<textarea rows="4" cols="50" class="form-control" name="text"><?php if (isset($d)) echo $d ?></textarea><br>
    </form>
        </div>

        
    </div>