<?php


class Cadastro{


	public $idnome;
	public $usuario;
	public $email;
	public $senha;


//() 0 +  = 
public function insert(){
$sql = new Sql();
$results = $sql->select("INSERT INTO cadastro (usuario, email, senha) VALUES ('zaneti', 'atleta', 'atleta@mail.com')");
if (count($results) > 0) {
			$this->setData($results[0]);
		}

}

}

?>