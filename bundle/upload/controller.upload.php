<?php
require_once("file.class.php");
require_once("file.repository.php");

class ControllerUpload extends Upload
{
	public function isSecureUpload(array $file)
	{
		//secure Extension is_array + type MIME
		$extension = strtolower(strrchr($file['name'],'.'));

		$file = new Upload($file, $_SESSION['userId']);
		if(in_array($extension, $file->getExtension())){
			return 1;
		}
		else
		 return 0;
	}

	public function flushUpload(array $file)
	{

		$path = "bundle/upload/ressource/".$file['name'];
		$file['path'] = $path;
		$newFile = new Upload($file, $_SESSION['userId']);
		FileRepository::flushUpload($newFile);


		if(move_uploaded_file($file['tmp_name'], $path))
		{
			return 1;
		}
		else
			return 0;
	}
}
?>