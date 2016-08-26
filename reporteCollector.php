<?php


	require_once("colector.php");

	class reporteCollector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarReporte(){

			try{

				$result = $this->modelo->operacion("SELECT * from becario join programa on id_programa=programa.id; ");

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