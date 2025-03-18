<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="image/jpeg" href="testing2.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITUNG DASAR</title>
    <link rel="stylesheet" href="Belajar2.css">

</head>

<body>
    <img src="testing.png" alt="logo" width="40">

    <p>INI ADALAH WEB HITUNG SEDERHANA</p>

    <h4>Coba Masukan Angka</h4>

    <?php
    $bil1 = "";
    $bil2 = "";
    $hasil = "";
    $operator = "+";

    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bilangan1'];
        $bil2 = $_POST['bilangan2'];
        $operator = $_POST['operator'];

        if (is_numeric($bil1) && is_numeric($bil2)) {
            if ($operator == "+") {
                $hasil = $bil1 + $bil2;
            } elseif ($operator == "x") {
                $hasil = $bil1 * $bil2;
            }
        } else {
            $hasil = "Masukkan angka yang valid!";
        }
    }
    ?>

    <form action="" method="post">
        <input type="text" name="bilangan1" value="<?php echo $bil1 ?>" placeholder="Isikan angka">
        <select name="operator">
            <option value="+" <?php if ($operator == "+") echo "selected"; ?>>+</option>
            <option value="x" <?php if ($operator == "x") echo "selected"; ?>>x</option>
        </select>
        <input type="text" name="bilangan2" value="<?php echo $bil2 ?>" placeholder="Isikan angka">
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <h4>Hasil: <b><?php echo $hasil; ?></b></h4>

</body>

</html>