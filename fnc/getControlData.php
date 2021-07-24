<?php
include '../functions.php';

$json = array('password' => qcd('control-password'), 'lastUpdate' => qcd('lastUpdate'));

echo json_encode($json);

?>