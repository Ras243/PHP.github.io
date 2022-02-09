<?php
// Pengulangan
// for, while, do while
// foreach : pengulangan khusus array
echo "======for======<br>";
for($i = 0; $i < 5; $i++) {
    echo "Hello world <br>";
}

echo "======while======<br>";
$j = 0;
while($j < 5) {
    echo "Hello world <br>";
$j++;
}

$a = 0;
echo "=====do while=====<br>";
do {
    echo "Hello world <br>";
    $a++;
} while ($a <= 10);
?>