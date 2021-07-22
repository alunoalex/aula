<!DOCTYPE html>
<html>
<head>
	<title>Manutenção</title>
</head>
<body>
<a href="home.php">home</a>
<?php 

require_once("Sql.php");
require_once("Cadastro.php");



//() 0 +  = 

/*$sql = new Sql();

$results = $sql->select("INSERT INTO aula (firstname, lastname, email) VALUES ('ganso', 'atacante', 'ganso@mail.com')");
if (count($results) > 0) {
			$this->setData($results[0]);
		}*/

	$app = new Cadastro();
	$app->insert();





 ?>
</body>
</html>