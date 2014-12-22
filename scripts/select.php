<?php
header("Access-Control-Allow-Origin: *");

$response = http_get("http://192.168.2.106:8983/solr/iann/select?q=*%3A*&wt=json&indent=true&rows=2147483647", array("timeout"=>10), $info);
print_r($info);
?>
