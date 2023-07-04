<?php
$value = "G";

// Match Expression mirip seperti switch case
$result = match($value){
    "A","B","C" => "Anda Lulus",
    "D" => "Anda Tidak Lulus",
    "E" =>  "Sepertinya Anda Lulus Jurusan",
    default => "Nilai apa itu ?"
};
echo $result.PHP_EOL;

?>

<?php
// Match Expression Non Equals, merupakan pengecekan untuk perbandingan dengan memakai logika

$value = 50;

$result = match(true){
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result.PHP_EOL;
?>

<?php
// Match Expression dengan kondisi, merupakan pengecekan untuk perbandingan dengan memakai logika

$name = "Mrs. Eko";

$result = match(true){
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
};

echo $result.PHP_EOL;
?>

