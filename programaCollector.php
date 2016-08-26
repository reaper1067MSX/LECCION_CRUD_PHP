<?php


	require_once("colector.php");

	class programaCollector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarPrograma(){

			try{

				$result = $this->modelo->Listar("programa");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertPrograma($nombre, $pais){

			try{

				$result = $this->modelo->operacion("INSERT INTO programa(nombre, pais) values('".$nombre."', '".$pais."') ");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdatePrograma($id ,$nombre, $pais){

			try{

				$result= $this->modelo->operacion("UPDATE programa SET nombre = '".$nombre."', pais = '".$pais."' WHERE id ='".$id."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END UPDATE

		public function DeletePrograma($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("DELETE from programa WHERE id = '".$id."' ");
				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		

	}//END CLASS

?>