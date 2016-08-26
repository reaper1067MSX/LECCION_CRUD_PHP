<?php

class programa{

	private $id;
	private $nombre;
	private $pais;
	//Constructor

	function __construct() {  
    
    }

    function __clone() {  
     $this->id = ++$this->id;   
    }   


	//Metodos SET & GET

    public function get_id(){
    	return $this->id;
    }

    public function set_id($id){
    	$this->id = $id;
    }

    public function get_nombre(){
    	return $this->nombre;
    }

    public function set_nombre($nombre){
    	$this->nombre = $nombre;
    }

    public function get_pais(){
    	return $this->pais;
    }

    public function set_pais($pais){
    	$this->pais = $pais;
    }

    

}

?>