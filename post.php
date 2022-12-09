<?php
$conn = mysqli_connect('localhost','root','','smkn1');
require 'function.php';
if(isset($_POST['tambah'])){

    if(tambah($_POST)>0){
        echo "
        <script>
        alert('data berhasil di input');
        document.location.href = 'index.php'
        </script>
        ";
    }else{
        echo "
        <script>
        alert('data gagal di input');
        document.location.href = 'post.php'
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="post3.css">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <h1>ISI FORM DIBAWAH INI</h1>
        </div>
        <div class="kotak-form">
            <h1>FORM DATA</h1>
            <form action="" method="post">
                <div class="kotak-input">
                    <input type="text" placeholder="Isi Nama" class="nama" name="nama" require>
                    <input type="text" placeholder="Isi Nis" class="nis" name="nis" require>
                </div>
                <div class="kotak-input">
                    <input type="text" placeholder="Isi Email" name="email" require>
                    <input type="text" placeholder="Isi Jurusan" class="jurusan" name="jurusan" require>
                    <div class="tombol">
                        <input type="text" placeholder="Masukan Gambar" name="photo" require>
                    </div>
                </div>
                <div class="tombol">
                    <button type="submit" class="submit" name="tambah">Submit</button>
                </div>
            </form>
                
                
        </div>
    </div>
</body>
</html> 