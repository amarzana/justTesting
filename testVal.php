<?php

function getMicro()
{
    $splitted = split(' ', microtime());
    $micro = (float)$splitted[0] + (float)$splitted[1];
    return $micro;
}

$str = "Hello World";


// ．oor holboh
$start = getMicro();
for ($i = 0; $i < 1000000; $i++) {
	$err = 'Output is :'.$str;
}
$end = getMicro();
$time = $end - $start;
echo $time . "
";

// "dotor bichih"
$start = getMicro();
for ($i = 0; $i < 1000000; $i++) {
	$err = "Output is :$str";
}
$end = getMicro();
$time = $end - $start;
echo $time . "
";

?>
