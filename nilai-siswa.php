<?php
$siswa=[
    "Dea"     => 85, 
    "RIDEA"   => 63,
    "Vera"    => 90,
    "Lisna"   => 75,
    "Hanifah" => 80,
    "alfin"   =>100
];
foreach ($siswa as $v=> $a) {
    if($a > 75){
        $keterangan = "LULUS";
    } else {
        $keterangan = "TIDAK LULUS";
    }
    echo "Nama : $v, Nilai :$a, Keterangan : $keterangan<br>";
}
?>