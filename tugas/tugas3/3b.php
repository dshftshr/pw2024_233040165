<?php
function urutanAngka($angka) {

    $currAngka = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $currAngka++ . " ";
        }
        echo "<br>";
    }
}

urutanAngka(5);