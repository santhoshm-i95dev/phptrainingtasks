<?php declare(strict_types=1);

function samplefunction($parameter) {
    echo "$parameter alphabet.<br>";
}

familyName("a");
familyName("b");
familyName("c");
familyName("d");
familyName("e");

// since strict is enabled and "5 days" is not an integer, an error will be thrown

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");




?>