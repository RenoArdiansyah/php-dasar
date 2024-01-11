<?php 

function sayHello($nama = 'orang', $role = 'user') {
    return "Hallo $nama, rolle kamu adalah = $role";
}

$hasil = sayHello('renn', 'admin');
echo $hasil;



echo "<hr>";
$a = 10;
function hitung($b = 0) {
    global $a;
    $hasil = $a + $b;
    return $hasil;
}

echo hitung(10);