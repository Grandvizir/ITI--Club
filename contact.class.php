<?php

class Contact
{
  	private $id;
	private $name;
	private $lastName;
	private $mail;
	private $content;
	private $ip;
	private $sendTime;
	private $view;

	private function getPdoConnexion(){
		$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');
		return $bdd;
	}

	public function newContact(Contact $contact)
	{
		$bdd = Contact::getPdoConnexion();
		$req = $bdd->prepare('INSERT INTO contact(name, lastName, mail, contenu, ip, sendTime) VALUES(:name, :lastName, :mail, :content, :ip, :sendTime)');
		$req->execute(array(
					'name' => $contact->getName(),
					'lastName' => $contact->getLastName(),
					'mail' => $contact->getMail(),
					'content' => $contact->getContent(),
					'ip' => $contact->getIp(),
					'sendTime' => $contact->getSendTime()
				));

	}

	public function getAllContact(){
		$bdd = Contact::getPdoConnexion();
		$reponse = $bdd->query('SELECT * FROM contact');
		$array = array();

		while($donnees = $reponse->fetch())
		{
			$cont = new Contact();
			$cont->setId($donnees['id']);
			$cont->setName($donnees['name']);
			$cont->setLastName($donnees['lastName']);
			$cont->setIp($donnees['ip']);
			$cont->setMail($donnees['mail']);
			$cont->setContent($donnees['contenu']);
			$cont->setSendTime($donnees['sendTime']);
			$cont->setView($donnees['view']);
			//more
			array_push($array, $cont);
		}
		return $array;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getLastName(){
		return $this->lastName;
	}

	public function setLastName($lastName){
		$this->lastName = $lastName;
	}

	public function getMail(){
		return $this->mail;
	}

	public function setMail($mail){
		$this->mail = $mail;
	}

	public function getContent(){
		return $this->content;
	}

	public function setContent($content){
		$this->content = $content;
	}

	public function getIp(){
		return $this->ip;
	}

	public function setIp($ip){
		$this->ip = $ip;
	}

	public function getSendTime(){
		return $this->sendTime;
	}

	public function setSendTime($sendTime){
		$this->sendTime = $sendTime;
	}

	public function getView(){
		return $this->view;
	}

	public function setView($view){
		$this->view = $view;
	}
}

?>