<!-- IF ELSE -->
<?php

$nilai = 70;
$absen = 90;

if($nilai >= 80 && $absen >= 80){
    echo "Anda Lulus".PHP_EOL;
} elseif($nilai >= 50 && $absen >= 50){
    echo "Anda Tidak Lulus".PHP_EOL;
}else{
    echo "Anda Dikeluarkan".PHP_EOL;
}

// Syntax Alternatif

if($nilai >= 80 && $absen >= 80):
    echo "Anda Lulus".PHP_EOL;
elseif($nilai >= 50 && $absen >= 50):
    echo "Anda Tidak Lulus".PHP_EOL;
else:
    echo "Anda Dikeluarkan".PHP_EOL;
endif

?>


<!-- SWITCH -->
<?php

$nilai = "A";

switch($nilai){
    case 'A':
        echo "Anda Lulus".PHP_EOL;
        break;
    case 'B':
        echo "Anda Tidak Lulus".PHP_EOL;
        break;
    default:
        echo "Anda Di Keluarkan".PHP_EOL;
}

// Syntax Alternatif

switch($nilai):
    case 'A':
        echo "Anda Lulus".PHP_EOL;
        break;
    case 'B':
        echo "Anda Tidak Lulus".PHP_EOL;
        break;
    default:
        echo "Anda Di Keluarkan".PHP_EOL;
    endswitch;

?>

<!-- Ternary Operator -->
<?php

$nilai = "PRIA";
$hi = $gender == "PRIA" ? "Hi bro" : "Hi nona";
echo $hi.PHP_EOL;

?>

<!-- Null Coalescing Operator -->
<?php

// Tanpa Null Coalescing Operator
$data = [];

if(isset($data['action'])){
    $action = $data['$action'];
}else{
    $action = 'nothing';
}
echo $action.PHP_EOL;

// Menggunakan Null Coalescing Operator
$action = $data['action'] ?? "Nothing";
echo $action.PHP_EOL;
?>