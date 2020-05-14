<?php

namespace client;

class Client{

	private $id;
	private $name;
	private $age;
	private $weigth;
	private $height;
	private $plan;

	function __construct($id, $name, $age, $weigth, $height, $plan){
    	$this->id = $id;
    	$this->name = $name;
    	$this->age = $age;
    	$this->weigth = $weigth;
    	$this->height = $height;
    	$this->plan = $plan;
    }

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getAge(){
		return $this->age;
	}

	public function getWeigth(){
		return $this->weigth;
	}

	public function getHeight(){
		return $this->height;
	}

	public function getPlan(){
		return $this->plan;
	}

	public function getBMI(){
		return $this->weigth/($this->height*$this->height);
	}
}

?>