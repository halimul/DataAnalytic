<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "dblatihan";
$koneksi = mysqli_connect($host,$username,$password,$db);

//CEK: KONEKSI database
// if ($koneksi){
//     echo "konek";
// }else {
//     echo "tidak konek";
// }

//Fungsi QUERY buat nampilin tabel di display_table.php
function query ($query) {
    global $koneksi;
    
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    
    //mysqli_fetch_array: mengembalikan array double atau 2x array dari data mahasiswa [fleksible mau 'title' atau angka]
	//mysqli_fetch_row: mengembalikan array numerik dari data mahasiswa [angka kolomnya]
	//mysqli_fetch_assoc: mengembalikan array namanya dari data mahasiswa ['titlenya']
	//mysql_fetch_object: mengembalikan array objek dari data mahasiswa tapi jarang dipake

    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function registrasi($data) {
    global $koneksi;

    $username = stripslashes($data["username"]);
    $password = mysqli_real_escape_string($koneksi,$data["password"]);
    $password2 = mysqli_real_escape_string($koneksi,$data["password2"]);
    
    
    //CEK: username udah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username_id FROM user WHERE username_id = '$username'");
    //var_dump($result);
    
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username/id sudah terdaftar!')</script>";
        return false;
    }    

    //CEK: konfirmasi password
    if ($password !== $password2) {
            echo "<script>
                alert('konfirmasi password tidak sesuai!');
                </script>";
            return false;
    }

    // enkripsi password
    //    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($koneksi,"INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($koneksi);



}
?>