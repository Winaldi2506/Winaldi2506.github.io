<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $occupation = $_POST["occupation"];
    $review = $_POST["review"];

    // Simpan ulasan ke dalam file teks (anda bisa memodifikasi ini untuk menyimpan ke database)
    $file = "reviews.txt";
    $current_reviews = file_get_contents($file);
    $current_reviews .= "Nama: $name\nPekerjaan: $occupation\nUlasan: $review\n\n";
    file_put_contents($file, $current_reviews);

    echo "Ulasan Anda telah berhasil disimpan!";
} else {
    echo "Permintaan tidak valid.";
}
?>
