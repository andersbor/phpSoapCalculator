<?php

$a = $_POST['a'];
$b = $_POST['b'];

$wsdl = "http://anbo-soapprovidercalculator.azurewebsites.net/Service1.svc?wsdl";
$client = new SoapClient($wsdl);
$parametersToSoap = array('b' => $b, 'a' => $a);
$resultWrapped = $client->add($parametersToSoap);

print_r($resultWrapped);
echo "<br />";
$result = $resultWrapped->AddResult;
echo $a . "+" . $b . "=" . $result;
