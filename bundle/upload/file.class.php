<?php

namespace Upload
{
	class File
	{
		private $id;
		private $extension = array("jpg","jpeg","png");

		function getId(){
			return $this->id;
		}

		function setId($id){
			$this->id = $id;
		}
	}
}

?>