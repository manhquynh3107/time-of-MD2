<?php
include_once "Array_List.php";

$listInteger = new ArrayList();
$listInteger -> add(2);
$listInteger -> add(4);
$listInteger -> add(6);
$listInteger -> add(18);
echo $listInteger->get(2);