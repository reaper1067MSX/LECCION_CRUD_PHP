<?php

class reporte{

	private $id;
	private $nombre_becario;
    private $id_pograma;
    private $idPrograma;
    private $nombre_programa;
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

    public function get_nombre_becario(){
    	return $this->nombre_becario;
    }

    public function set_nombre_becario($nombre_becario){
    	$this->nombre_becario = $nombre_becario;
    }

    public function get_idPrograma(){
    	return $this->idPrograma;
    }

    public function set_idPrograma($idPrograma){
    	$this->idPrograma = $idPrograma;
    }


    public function get_nombre_programa(){
        return $this->nombre_programa;
    }

    public function set_nombre_programa($nombre_programa){
        $this->nombre_programa = $nombre_programa;
    }

    public function get_pais(){
        return $this->pais;
    }

    public function set_pais($pais){
        $this->pais = $pais;
    }

    

}

?>