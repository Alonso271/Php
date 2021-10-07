<?php
$A=random_int(1, 10);
$B=random_int(1, 10);
$C=0;
elMayor($A,$B,$C);
echo $C;
function elMayor($A, $B, &$C) {
    if ($A>$B) {
        $C = $A;
    }
    if ($B>$A) {
        $C = $B;
    }
}