<?php 
for($i = 1; $i <= 10; $i++) 
{
    echo("iki angka ke-$i"). "<br>";
};

// MENAMPILKAN ARRAY
echo '<hr>';

$hewan  = ['kijang', 'coala', 'jerapa', 'kura-kura', 'komodo'];
$nama   = ['nama' => 'Reno', 'alamat' => 'margosari', 'umur' => 17];

//mengunakan for
for($i = 0; $i < count($hewan); $i++) {
    echo ("hewan ini bernama $hewan[$i] <br>");
}

echo '<hr>';
//mengunakan foreach
foreach($hewan as $h) {
    echo ("hewan ini bernama $h <br>");
};

echo '<hr>';
// menampilkan assosiatif array
foreach($nama as $key => $value) {
    echo ("$key \t: $value <br>");
};
echo '<hr>';

$n = 10;
$i = 0;
while (true) {
    if($i == $n) {
        break;
    } else {
        echo $i. "<br>";
    }

    $i++;
}