<?php

namespace Upload
{
	class ControllerUpload extends File
	{


		public function isSecureUpload(array $file)
		{
			$extension=strrchr($file['name'],'.');
			echo $extension;
			die;


			/**
			*
	*	// secure Extension is_array + type MIME

	var_dump($_FILES['upld']);
	$path = "bundle/upload/ressource/".$_FILES['upld']['name'];

	//instance FILE + FLUSH (save destination bdd)

	move_uploaded_file($_FILES['upld']['tmp_name'], $path);
			**/

			//if()
		}

		public function getExtension(){
			return $this->extension;
		}

		public function setExtension(array $array){
			if(is_array($array)){
				$this->extension = $array;
			}
		}
	}
}

?>