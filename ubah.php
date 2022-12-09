<?php 
require 'function.php';

//ambil data di url
$id = $_GET["id"];

// query  data siswa berdasarkan id
$data = query("SELECT * FROM data_siswa WHERE id = $id")[0];


//cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"])){

    //cek apakah data berhasil di ubah atau tidak
    if(ubah($_POST) > 0 ) {
        echo"
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
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
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="container">

        <h1>Edit Data Siswa</h1>
        <div class="form">

            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $data["id"]?>">
                <ul>
                    <li><label for="nama">Nama : </label>
                    <div class="nama">
                        <input type="text" name="nama" id="nama" require value="<?= $data["nama"]; ?>">
                    </div>
                    </li>
                
                    <li>
                        <label for="nis">Nis : </label>
                        <div class="nis">
                            <input type="text" name="nis" id="nis" value="<?= $data["nis"]; ?>">
                        </div>
                    </li>
                    
                    <li>
                        <label for="email">Email : </label>
                        <div class="email">
                            <input type="text" name="email" id="email" value="<?= $data["email"]; ?>">
                        </div>
                    </li>
                    
                    <li>
                        <label for="jurusan">Jurusan : </label>
                        <div class="label">
                            <input type="text" name="jurusan" id="jurusan" value="<?= $data["jurusan"]; ?>">
                        </div>
                    </li>
                    
                    <li>
                        <label for="photo">Photo : </label>
                        <div class="photo">
                            <input type="text" name="photo" id="photo" value="<?= $data["photo"]; ?>">
                        </div>
                    </li>
                    
                    <li>
                        <button type="submit" name="submit">Edit Data!</button>
                    </li>
                    
                </ul>
            </form>
        </div>
    </div>
</body>
</html>