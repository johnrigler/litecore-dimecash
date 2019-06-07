<?php
$FIRST="D";
$WORD="DC$_GET[word]" . "xxxxxxxxxx";
$NUM=30;
$CMD="~/unspendable/unspendable.py";

$output = shell_exec("$CMD $FIRST $WORD $NUM");

?>

<meta http-equiv="refresh" content="0;url=http://dogechain.info/address/<?php echo $output ?>" />
