<?php
include 'Node.php';
include 'demo.php';

$LINK = new demo();
$LINK->addFirst(3);
$LINK->addFirst(4);
$LINK->addFirst(5);



$LINK ->addLast(6);
echo "<pre>";
 var_dump($LINK);

