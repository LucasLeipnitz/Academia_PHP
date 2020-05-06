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
    	$this->weigth = $height;
    	$this->plan = $plan;
    }

	public function getId(){
		return $id;
	}

	public function getName(){
		return $name;
	}

	public function getAge(){
		return $age;
	}

	public function getWeigth(){
		return $weight;
	}

	public function getHeight(){
		return $height;
	}

	public function getPlan(){
		return $plan;
	}
}

?>