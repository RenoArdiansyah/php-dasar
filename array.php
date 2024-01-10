<?php 
$hewan  = ['kijang', 'coala', 'jerapa', 'kura-kura', 'komodo'];
$nama   = ['nama' => 'Reno', 'alamat' => 'margosari', 'umur' => 17];

print_r($hewan);
echo '<br>'.$hewan[1]. '<br>';


print_r(array_reverse($hewan));
echo '<br>';
shuffle($hewan);
print_r($hewan);

echo '<br>';
echo count($hewan);

echo '<br>';
sort($hewan);
print_r($hewan);

echo '<br>';
print_r($nama);

echo '<br>';
print_r(array_values($nama));
echo '<br>';
print_r(array_keys($nama));
echo '<br>';
print_r(array_merge($nama));