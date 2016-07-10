<?php
$fruits = ['Apples', 'Bananas', 'Cantaloupes', 'Dates', 'Dates', 'Bananas'];
$unique = array_unique($fruits);
foreach ($unique as $fruit) {

print "<p>$fruit</p>";
}

?>