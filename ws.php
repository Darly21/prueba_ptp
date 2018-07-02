<?php
	
	$login = '6dd490faf9cb87a9862245da41170ff2';
	$tranKeyOriginal = '024h1IlD';
	$seed = date('c');
	$tranKey = sha1($seed.$tranKeyOriginal);

	$url = 'https://test.placetopay.com/soap/pse/?wsdl';
	$options = array( 'soap_version'=>SOAP_1_2, 'trace'=>1  );
	$pse = new SoapClient( $url, $options );

	//var_dump($client->__getFunctions());

?>