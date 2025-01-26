<?php
function fibonacci($n)
{
    if ($n <= 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$input = 10; // Bilangan ke-sekian dari deret Fibonacci
echo "Bilangan Fibonacci ke-{$input} adalah " . fibonacci($input) . "\n";
?>