<?php

class LogEvent
{
	private $id;
	private $time;
	private $path;
	private $section;
	private $ip;
	private $userId;
	private $div;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getTime(){
		return $this->time;
	}

	public function setTime($time){
		$this->time = $time;
	}

	public function getPath(){
		return $this->path;
	}

	public function setPath($path){
		$this->path = $path;
	}

	public function getSection(){
		return $this->section;
	}

	public function setSection($section){
		$this->section = $section;
	}

	public function getIp(){
		return $this->ip;
	}

	public function setIp($ip){
		$this->ip = $ip;
	}

	public function getUserId(){
		if($this->user = NULL)
		{
			return FALSE;
		}
		else
			return $this->userId;
	}

	public function setUserId($userId){
		$this->userId = $userId;
	}

	public function getDiv(){
		if($this->div == NULL){
			return FALSE;
		}
		else
			return $this->div;
	}

	public function setDiv($div){
		$this->div = $div;
	}
}

?>