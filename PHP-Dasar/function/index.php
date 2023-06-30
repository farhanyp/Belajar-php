<!-- Function menggunakan Argument, default argument, type declaration dan return-->
<?php
function sayHello(string $name = "Yp"): string 
{
    return "Hello {$name}";
}

echo sayHello("Farhan");
echo PHP_EOL;

?>


<!-- Function menggunakan variabel length Argument -->
<?php
function sum(...$number): string 
{
    $total = (int) 0;
    foreach($number as $num){
        $total += $num;
    }
    return $total;
}

echo sum(1,2,3,4,5);
echo PHP_EOL;

?>


<!-- Function menggunakan variabel function -->
<?php
// Contoh
function foo()
{
    echo "FOO". PHP_EOL;
}

$functionName = "foo";
$functionName();

// Contoh Pemakaian
function sayHello2(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName".PHP_EOL;
}

sayHello2("yp","strtoupper");
sayHello2("yp","strtolower");
echo PHP_EOL;

?>

<!-- Function menggunakan Anonymous function sebagai argument -->
<?php
// Contoh
function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye {$finalName}".PHP_EOL;
}

sayGoodBye("Yp", function(string $name){
    return "maman";
});

echo PHP_EOL;

?>

<!-- Function menggunakan Arrow function -->
<?php
// Contoh
$sayHelloYp = fn() => "Hello Yp". PHP_EOL;

echo $sayHelloYp();

?>


<!-- Contoh Recursive Function -->
<?php
function factorialRecursive(int $value): int{
    if($value == 1){
        return 1;
    }else{
        return $value * factorialRecursive($value - 1);
    }
}

echo factorialRecursive(5);

?>