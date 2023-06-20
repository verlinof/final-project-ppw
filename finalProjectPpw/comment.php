<?php
include "connect.php";

$nama = $_POST['name'];
$comment = $_POST['comment'];

// Proses penyimpanan data ke database di sini
$sql = "INSERT INTO comments(nama,comment) values('$nama', '$comment')";

if ($conn->query($sql) === TRUE) {
    // Data berhasil disimpan
    echo "success";
} else {
    // Terjadi kesalahan saat menyimpan data
    echo "failed";
}

$conn->close();
?>