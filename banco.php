<?php

class Banco
{
	private $pdo;
	private $numRows;
	private $array;

	public function __construct($host, $dbname, $dbuser, $dbpass)
	{
		try{

			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);

		}catch(PDOExeption $e){
			echo "Falhou! " . $e->getMessage();
		}

	}

	public function query($sql)
	{
		$query = $this->pdo->query($sql);
	}
}