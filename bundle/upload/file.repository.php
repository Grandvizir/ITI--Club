<?php

require_once("file.class.php");

class FileRepository
{
	private function getPdoConnexion()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		return $bdd;
	}

	public function flushUpload(Upload $file){

		$bdd = FileRepository::getPdoConnexion();
		$req = $bdd->prepare('INSERT INTO file(name, path, timeUpload, userId) VALUES(:name, :path, :timeUpload, :userId)');
		$req->execute(array(
						'name' => $file->getName(),
						'path' => $file->getPath(),
						'timeUpload' => $file->getTimeUpload(),
						'userId' => $file->getUserID()
					));
	}
}

?>