<?php
/* Exemplo foreach1: somente valores */

$a = array(1, 2, 3, 17);

foreach ($a as $v) {
    echo "Current value of \$a: $v.\n";
}

/* Exemplo foreach 2: valor com acesso manual (apenas ilustrativo) */

$a = array(1, 2, 3, 17);

$i = 0; /* apenas para ilustrar */

foreach ($a as $v) {
    echo "\$a[$i] => $v.\n";
    $i++;
}

/* Exemplo foreach 3: chave e valor */

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "\$a[$k] => $v.\n";
}

/* Exemplo foreach 4: arrays multi dimencionais */
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}

/* Exemplo foreach 5: arrays dinâmicos */

foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?>