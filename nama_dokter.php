<?php

// membuat multidimensional array
$favorites = array(

    array(

        "namadokter" => "dr. DERYANT IMAGODEI NORON",

        "statuspasien" => "BARU",

    ),

    array(

        "namadokter" => "dr. PANJI GUGAH BHASKARA, Sp. PD",

        "statuspasien" => "LAMA",

    ),

    array(

        "namadokter" => "dr. PANJI GUGAH BHASKARA, Sp. PD",

        "statuspasien" => "BARU",

    ),

    array(

        "namadokter" => "dr. PANJI GUGAH BHASKARA, Sp. PD",

        "statuspasien" => "LAMA",

    ),

    array(

        "namadokter" => "dr. MOHAMMAD WAHYU F. Sp. OG",

        "statuspasien" => "BARU",

    )

);

// menampilkan outputnya

echo "Nama Dokter : " . $favorites[4]["namadokter"], "\n";

echo "Jumlah Pasien : " . $favorites[4]["statuspasien"];

?>