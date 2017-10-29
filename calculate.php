<?php

$a = $_POST['a'];
$b = $_POST['b'];

$client = new SoapClient("http://localhost:29418/Service1.svc?wsdl");
$parametersToSoap = array('b' => $b, 'a' => $a);
$resultWrapped = $client->add($parametersToSoap);

var_dump($resultWrapped);
echo "<br />";
$result = $resultWrapped->AddResult;
echo $a . "+" . $b . "=" . $result;
