<?php

class becario{

	private $id;
	private $nombre;
	private $id_programa;
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

    public function get_id_programa(){
    	return $this->id_programa;
    }

    public function set_id_programa($id_programa){
    	$this->id_programa = $id_programa;
    }

    

}

?>