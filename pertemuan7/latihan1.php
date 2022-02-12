<?php
// variabel Scope / lingkup variabel
$x = 10;

function tampilx() {
    // global fungsinya untuk mengkases variabel lokal atau variabel luar dari fungsi
    global $x; 
    echo $x;
}

tampilx();

?>