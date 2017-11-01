<?php require 'vendor/autoload.php';

$client = new GuzzleHttp\Client();
$res = $client->request('GET', 'http://webreinvent.com/', [
    'auth' => ['user', 'pass']
]);
echo $res->getStatusCode();
// "200"
echo $res->getHeader('content-type');
// 'application/json; charset=utf8'
echo $res->getBody();
// {"type":"User"...'
 
?>