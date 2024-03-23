<?php 
// Variable Scope / Lingkup variable
// Variable lokal merupakan variable yang berada pada luar function atau dalam function
// Variable global merupakan variable keseluruhan baik itu yang didalam function maupun di luar function 

//variable yang di luar function merupakan variable lokal untuk halaman ini
$x = "desi";

function tampilX() {
    //Variable yang berada didalam function merupakan variable lokal
    //yang berada pada function itu aja
    global $x;
    echo $x;
}

tampilX();
echo "<br>";
echo $x

?>