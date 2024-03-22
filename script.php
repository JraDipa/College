<?php

$i = 100;
while ($i >= 1) {
    if ($i % 10 == 0) {
        echo "<br>", $i, " ";
    } else if ($i % 7 == 0){
        echo "<b>", $i,"</b>", " ";
    } else {
        echo $i," ";
    }
    $i--;
}
