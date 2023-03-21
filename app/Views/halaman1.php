<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UCA SELALU JAYA</title>
</head>
<body>
    <h1>INI HALAMAN PERTAMA SAYA UNTUK INPUT </h1>
    <form action="<?php echo base_url('test/data')?>" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>FAKULTAS</td>
                <td><input type="text" name="fakultas"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><textarea name="alamat" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td><input type="submit" value="SUBMIT" name="submit"></td>
                <td><input type="reset" value="RESET"></td>
            </tr>
        </table>
    </form>
</body>
</html>