
<!-- Tipe Data Integer -->
<?php
echo "Decimal: ";
var_dump(1234);

echo "Octal: ";
var_dump(0123);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b111111);

echo "Underscore di Number: ";
var_dump(3_000_000);

?>


<!-- Tipe Data Floating Point -->

<?php

echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point dengan E Notation plus (1.2 x 1000): ";
var_dump(1.2e3);

echo "Floating Point dengan E Notation minus (7 x 0.001): ";
var_dump(7e-3);

echo "Underscore di Floating Point: ";
var_dump(1_234.56);

?>

<!-- Integer Overflow -->
<!-- Jika melebihi kapasitas dari tipe data integer maka akan diadikan floating point -->
<?php

echo "Integer Overflow: ";
var_dump(9223372036854775808); // melewati kapasitas
var_dump(9223372036854775807); // belum melewati kapasitas
