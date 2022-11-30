<?php

// membuat multidimensional array
$favorites = array(

    array(

        "namapasien" => "CHAERUNNISA",

        "tglregistrasi" => "2022-09-12 00:00:00",

    ),

    array(

        "namapasien" => "HARI MULYONO",

        "tglregistrasi" => "2022-09-29 08:39:29",

    ),

    array(

        "namapasien" => "TEST",

        "tglregistrasi" => "2022-09-29 09:15:49",

    ),

    array(

        "namapasien" => "MOCHAMAD RAGA PERBAWA",

        "tglregistrasi" => "2022-09-29 10:05:55",

    ),

    array(

        "namapasien" => "TESTING BAYI",

        "tglregistrasi" => "2022-09-29 10:16:42",

    )

);

// menampilkan outputnya

echo "Tanggal Registrasi: " . $favorites[0]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[0]["namapasien"];
echo "\n";
echo "\n";

echo "Tanggal Registrasi: " . $favorites[1]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[1]["namapasien"];
echo "\n";
echo "\n";

echo "Tanggal Registrasi: " . $favorites[2]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[2]["namapasien"];
echo "\n";
echo "\n";

echo "Tanggal Registrasi: " . $favorites[3]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[3]["namapasien"];
echo "\n";
echo "\n";

echo "Tanggal Registrasi: " . $favorites[4]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[4]["namapasien"];
echo "\n";
echo "\n";
?>