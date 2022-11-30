<?php

// membuat multidimensional array
$favorites = array(

    array(

        "namaruangan" => "IGD UMUM",

        "statuspasien" => "BARU",

    ),

    array(

        "namaruangan" => "Poliklinik Penyakit Dalam",

        "statuspasien" => "LAMA",

    ),

    array(

        "namaruangan" => "Poliklinik Penyakit Dalam",

        "statuspasien" => "BARU",

    ),

    array(

        "namaruangan" => "Poliklinik Penyakit Dalam",

        "statuspasien" => "LAMA",

    ),

    array(

        "namaruangan" => "TESTING BAYI",

        "statuspasien" => "BARU",

    )

);

// menampilkan outputnya

echo "Nama Ruangan: " . $favorites[0]["namaruangan"], "\n";

echo "Jumlah pasien: " . $favorites[0]["statuspasien"];

?>