<?php 
// $conn = mysqli_connect('localhost','root','','smkn1');
// $result = mysqli_query($conn, "SELECT * FROM data_siswa");
// $row = mysqli_fetch_assoc($result);
require 'function.php';
$data = query("SELECT * FROM data_siswa ORDER BY id DESC");
//Searchinng
if(isset($_POST["cari"])){
    $data = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index1.css">
</head>
<body>
<div class="container">

    <div class="h">
        <br>
        <br>
        <!-- searching -->
        <form action="" method="post">
            <input type="text" name="keyword" autofocus placeholder="Cari data...." autocomplete="off">
            <button type="submit" name="cari">Cari</button>
        </form>
    </div>
    <div class="tambah">
        <a href="post.php"><button class="btn">Tambah Data</button></a>
    </div>


        <div class="kotak">

            <table border="1px solid black">
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Nis</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Photo</th>
                    <th>Ubah?</th>
                </tr>
                <?php $i =1; ?>
                <?php foreach($data as $row){?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['nis']?></td>
                    <td><?= $row['email']?></td>
                    <td><?= $row['jurusan']?></td>
                    <td><img src="./img/<?= $row['photo']?>" alt=""></td>
                    <div class="edit">
                        <td>
                            <a href="delete.php?id=<?= $row['id']?>"onclick= "return confirm('yakin?')">DELETE</a>
                            <a href="ubah.php?id=<?= $row['id']?>"onclick= "return confirm('yakin?')">EDIT</a>
                        </td>
                    </div>
                </tr> 
                <?php $i++ ?>
                <?php }?>
            </table>
            
        </div> 
</div>

</body>
</html>