<?php
$name = 100;
if ($name == "Rui Saitoh") {
    echo "私は　Rui Saitoh　です";
} else {
    echo "あなたの名前ではありません";
}
$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
$fruits = array("banana", "kiwi", "strawberry", "melon", "mango");
foreach($fruits as $fruit) {
    echo "要素は" . $fruit;
    echo "\n";
}
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    if ($i % 5 == 0) {
        echo $i;
    }
}