<?php
require '../Meli/meli.php';
require '../configApp.php';

$meli = new Melibox\Meli($appId, $secretKey);

//$meli = new Meli;

$params = array('access_token'=>'APP_USR-8505627827567894-032414-48bfa8d03a6bc15793c6cd5360b48c8c-648999526');

$url = '/items/MLB1804945095';

$result = $meli->get($url, $params);

echo '<pre>';
print_r($result);
echo '</pre>';