<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pwl_uts";

$conn = mysqli_connect($servername,$username,$password,$dbname);

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}
function register($data){
    global $conn;
    $name = strtolower(stripslashes($data['name']));
    $username = $data['username'];
    $email = $data['email_user'];
    $notelp =$data['notelp'];
    $pw = mysqli_real_escape_string($conn, $data['password']);
    $pw2 = mysqli_real_escape_string($conn, $data['password']);
    //Cek kesamaan username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username='$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>alert('username sudah dipakai!');</script>";
        return false;
    }
    //Cek konfirmasi pw
    if($pw !== $pw2){
        echo "<script>alert('password konfirmasi tidak sama!');</script>";
        return false;
    }
    //Enkrip pw
    $pw = md5($pw);
    //Insert DB
    mysqli_query($conn, "INSERT INTO user(name, username, email_user, notelp, password) VALUES('$name','$username', '$email', '$notelp', '$pw')");

    return mysqli_affected_rows($conn);
}
function hapusAkun($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM user WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusProduct($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM product WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusBerita($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM berita WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusVideo($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM video WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusFoto($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM foto WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusAduan($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM aduan WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function hapusKomen($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM komen WHERE id=$id");
    return mysqli_affected_rows($conn);
}

/* if ($conn){
    echo("Success");
}
else{
    die("Connection Fail: ".mysqli_connect_error());
} */

?>