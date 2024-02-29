<?php
echo "<h4>Menghitung Luas Lingkaran</h4><br>";
function hitungLuasLingkaran($r) {
  echo "Jari-jari = $r <br>";
  $i = ($r * $r) * 3.14;
  echo "LuasLingkaran = $i cm²";
}

hitungLuasLingkaran(10);

echo "<hr />";
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r) {
  echo "Jari-jari = $r <br>";
  $j = 2 * 3.14 *$r;
  echo "Keliling Lingkatan = $j cm";
}

hitungKelilingLingkaran(20);