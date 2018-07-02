<?php
	require_once 'ws.php';
	$params = array (
		'auth'=>[
			'login'=>$login,
			'tranKey'=>$tranKey,
			'seed'=>$seed
		]
	);
	$result = $pse->getBankList( $params );
	$bankList = $result->getBankListResult;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Place to play</title>
	</head>
	<body>

	<h1>PSE</h1>
	<h3>Indique el tipo de cuenta con la cual realizará el pago</h3>
	<h3>Seleccione de la lista la entidad financiera con la que desea realizar el pago</h3>
	<form method="post" action="#">
		<select>
		<?php for ($i = 0; $i < count($bankList->item); $i++)
			echo '<option value="'.$bankList->item[$i]->bankCode.'">'.$bankList->item[$i]->bankName.'</option>';
		 ?>
		</select>
		<button type="submit">Seleccionar</button>
	</form>

</body>
</html>
