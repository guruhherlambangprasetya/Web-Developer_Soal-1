<?php

// membuat multidimensional array
$favorites = array(

    array(
        "norec" => "a516faf0-1980-11ed-85c9-5d3d2533",
        "namapasien" => "CHAERUNNISA",
        "tglregistrasi" => "2022-09-12 00:00:00",

    ),

    array(
        "norec" => "a565e9a0-3f97-11ed-b717-635bc9ec",
        "namapasien" => "HARI MULYONO",
        "tglregistrasi" => "2022-09-29 08:39:29",

    ),

    array(
        "norec" => "bb5c3c30-3f9c-11ed-920d-a3e252d9",
        "namapasien" => "TEST",
        "tglregistrasi" => "2022-09-29 09:15:49",

    ),

    array(
        "norec" => "befb9dd0-3fa3-11ed-942b-79197053",
        "namapasien" => "MOCHAMAD RAGA PERBAWA",
        "tglregistrasi" => "2022-09-29 10:05:55",

    ),

    array(
        "norec" => "53c41c30-3fa5-11ed-9706-cb3e77b0",
        "namapasien" => "TESTING BAYI",
        "tglregistrasi" => "2022-09-29 10:16:42",

    )

);

// menampilkan outputnya
echo "Norec: " . $favorites[0]["norec"], "\n"; 
echo "Tanggal Registrasi: " . $favorites[0]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[0]["namapasien"];
echo "\n";
echo "\n";

echo "Norec: " . $favorites[1]["norec"], "\n"; 
echo "Tanggal Registrasi: " . $favorites[1]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[1]["namapasien"];
echo "\n";
echo "\n";

echo "Norec: " . $favorites[2]["norec"], "\n"; 
echo "Tanggal Registrasi: " . $favorites[2]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[2]["namapasien"];
echo "\n";
echo "\n";

echo "Norec: " . $favorites[3]["norec"], "\n"; 
echo "Tanggal Registrasi: " . $favorites[3]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[3]["namapasien"];
echo "\n";
echo "\n";

echo "Norec: " . $favorites[4]["norec"], "\n"; 
echo "Tanggal Registrasi: " . $favorites[4]["tglregistrasi"], "\n";
echo "Nama pasien: " . $favorites[4]["namapasien"];
echo "\n";
echo "\n";
?>
