<?php
include '../functions.php';

$json = array('id' => queryAll(''), 'lastUpdate' => qcd('lastUpdate'));

echo json_encode($json);

?>