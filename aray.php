<?php
$Karyawan[0] = "Bob";
$Karyawan[1] = "Sally";
$Karyawan[2] = "Charline";
$Karyawan[3] = "Clare";
$Karyawan[4] = "Beni";
$Karyawan[5] = "Nisa";

for ($i=0; $i <= count($Karyawan) - 1; $i++) {
    echo "Tolong Panggil $Karyawan[$i] <br>";
}
?>
<br>
<?php
$gaji['Nisa'] = 100000000;
$gaji['Beni'] = 5000;
$gaji['Reni'] = 3000;
$gaji['Opik'] = 2000;
foreach ($gaji as $key => $value) {
    echo "Gaji Atas Nama $key Adalah $value <br>";
}
?>
<br>
<?php
$gaji = array(
    "Nisa" => 100000000,
    "Beni" => 5000,
    "Reni" => 3000,
    "Opik" => 2000,
);
foreach ($gaji as $key => $value) {
    echo "Gaji Atas Nama $key Adalah $value <br>";
}
?>






