<?php

class Reader
{
	const connexionString = "mysql:host=localhost;dbname=test";
	const userName = "root";
	const userPwd = "";


	protected function getPdoConnexion()
	{
		$bdd = new PDO(self::connexionString, self::userName, self::userPwd);
		return $bdd;
	}

}

?>