<?php
$awal = 5;
while ($awal>=0) {
    echo $awal. "nisa cantik <br>";
    $awal--;
}
?>
<br> Do While <br>
<?php
$no = 1;
do {
    echo $no."//";
    $no++;
} while ($no <=10);
?>
<br> for <br>
<?php
for ($i=0; $i <6; $i++) {
    echo $i." - ";
}
?>
<br>
Tanggal:
<select>
    <?php
    $awal= 1;
    while ($awal<=30) {
        echo "<option>$awal </option>";
        $awal++;
    }
    ?>
</select> 
Bulan:
<select>   
    <?php
    for ($i=1; $i <=12; $i++) {
        echo "<option> Bulan $i</option>";
    }
    ?>
</select>   
Tahun 
<select>
    <?php
    for ($i=2000; $i <=2023; $i++) {
        echo "<option>Tahun $i</option>";
    }
    ?>
</select>

