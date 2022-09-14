<?php
$_myvar
//Es valida por que comieza con un guion bajo seguido de una letra.
$_7var
//Es valida por que comienza con un guion bajo seguido de un numero.
$myvar
//Es valida por que comienza con una letra y es seguida tambien de una letra.
$var7
//Es valida por que comienza con una letra y es seguida tambien de una letra.
$_elementl
//Es valida por que comieza con un guion bajo seguido de una letra.
?>
<?php
$a = 'ManejadorSQL';
$b = "MySQL";
$c = &$a;
print_r( $a, $b, $c);

$a = 'PHP server';
$b = &$a;
print_r( $a, $b);
//Resultado
//WARNING print_r() expects at most 2 parameters, 3 given on line number 5
?>























