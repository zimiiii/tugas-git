<?php 
$conn = mysqli_connect('localhost','root','','smkn1');

function query ($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row= mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
$nama = $data ['nama'];
$nis = $data ['nis'];
$email = $data ['email'];
$jurusan = $data ['jurusan'];
$foto = $data ['photo'];
$query = "INSERT INTO data_siswa VALUES ('','$nama','$nis','$email','$jurusan','$foto')";
mysqli_query($conn,$query);
return mysqli_affected_rows($conn);
}

function delete ($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM data_siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
$id = $data ['id'];
$nama = htmlspecialchars ($data ['nama']);
$nis = htmlspecialchars ($data ['nis']);
$email = htmlspecialchars ($data ['email']);
$jurusan = htmlspecialchars ($data ['jurusan']);
$foto = htmlspecialchars ($data ['photo']);

$query = "UPDATE data_siswa SET
nama = '$nama',
nis = '$nis',
email = '$email',
jurusan = '$jurusan',
photo = '$foto'
    WHERE id=$id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
//Searching
function cari($keyword){
    $query = "SELECT * FROM data_siswa
    WHERE
    nama LIKE '%$keyword%'OR
    nis LIKE '%$keyword%'OR
    email LIKE '%$keyword%'OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}
?>