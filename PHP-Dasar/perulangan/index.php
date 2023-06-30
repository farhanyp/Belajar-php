<!-- FOR LOOP -->
<?php
for($counter = 1; $counter <= 10; $counter++){
    echo "Hello For Loop: ". $counter.PHP_EOL;
}

// Syntax Alternative

for($counter = 1; $counter <= 10; $counter++):
    echo "Hello For Loop: ". $counter.PHP_EOL;
endfor
?>

<!-- WHILE LOOP -->
<?php

$counter = 1;

while($counter <= 10){
    echo "Hello For Loop: ". $counter.PHP_EOL;
    $counter++;

    if($counter > 5){
        break;
    }
}

// Syntax Alternative

while($counter <= 10):
    echo "Hello For Loop: ". $counter.PHP_EOL;
    $counter++;

    if($counter > 5){
        break;
    }
endwhile;
?>

<!-- DO WHILE LOOP -->
<?php

$counter = 1;

do{
    echo "Hello For Loop: ". $counter.PHP_EOL;
    $counter++;

    if($counter % 2 == 0){
        continue;
    }

}while($counter <= 10);
?>

<!-- FOR LOOP -->
<?php

$counter = 1;

do{
    echo "Hello For Loop: ". $counter.PHP_EOL;
    $counter++;

    if($counter % 2 == 0){
        continue;
    }

}while($counter <= 10);
?>

<!-- FOR EACH -->
<?php

$name = ["FARHAN", "YUDHA", "PRATAMA"];

foreach($names as $name){
    echo "Hello $name".PHP_EOL;
}

// Dengan key

$person = [
    "first_name" => "Eko",
    "middle_name" => "Kurniawan",
    "last_name" => "Khannedy"
];

foreach($names as $key => $value){
    echo "$key: $value".PHP_EOL;
}
?>