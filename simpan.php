<?php
//include koneksi database
include('./koneksi.php');
//get data dari form
$Name = $_POST['name'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$No_hp = $_POST['no_hp'];
$Message = $_POST['message'];


//query insert data ke dalam database
$query = "INSERT INTO pemesanan (name, email, subject, no_hp, message) VALUES ('$Name','$Email','$Subject','$No_hp','$Message')";

//tambahkan data
$insert = mysqli_query($connection, $query);
if ($insert) {
    echo "
                <script>
                    alert('Pemesanan berhasil ditambahkan!')
                    window.location.href='index.php'
                </script>
            ";;
    exit();
}
//pesan error gagal insert data
echo "Data Gagal Disimpan!";

// //kondisi pengecekan apakah data berhasil dimasukkan atau tidak
// if ($connection->query($query)) {
//     //redirect ke halaman index.php
    
// } else {
//     //pesan error gagal insert data
//     echo "Data Gagal Disimpan!";
// }