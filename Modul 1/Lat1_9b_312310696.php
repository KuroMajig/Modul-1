<?php
function power($x, $y)
{
    if ($y === 0) {
        return 1;
    } elseif ($y > 0) {
        return $x * power($x, $y - 1);
    } else {
        return 1 / power($x, -$y);
    }
}
$x = 2;
$y = 3;
echo "Hasil dari {$x} pangkat {$y} adalah " . power($x, $y) . "\n";
?>