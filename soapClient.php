<?php
try{
  $sClient = new SoapClient('http://localhost/webservice/data.wsdl');
  $params = "Aqila";
  $response = $sClient->doHello($params);
  var_dump($response);
} catch(SoapFault $e){
  var_dump($e);
}
?>
