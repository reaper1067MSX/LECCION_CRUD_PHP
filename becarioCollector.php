<?php


	require_once("colector.php");

	class becarioCollector{

		private $modelo;

		public function __construct(){

			$this->modelo = new colector(); //Al crear el objeto modelo se crea un objeto de tipo colector
		}

		//FUNCION CONSULTAR
		public function ListarBecario(){

			try{

				$result = $this->modelo->Listar("becario");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}
		}//END FUNCTION


		public function InsertBecario($nombre, $id_programa){

			try{

				$result = $this->modelo->operacion("INSERT INTO becario(nombre, id_programa) values('".$nombre."', '".$id_programa."') ");

				return $result;

			}catch(Exception $e){

				die($e->getMessage());

			}//END TRY

		}//END INSERT

		public function UpdateBecario($id ,$nombre, $id_programa){

			try{

				$result= $this->modelo->operacion("UPDATE becario SET nombre = '".$nombre."', id_programa = '".$id_programa."' WHERE id ='".$id."' ");

				return $result;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END UPDATE

		public function DeleteBecario($id){
			$flag = false;
			try{

				$result = $this->modelo->operacion("DELETE from becario WHERE id = '".$id."' ");
				
				//EXPerimental
				$flag = true;
				return $flag;

			}catch(Exception $e){
				die($e->getMessage());

			}

		}//END DELETE

		

	}//END CLASS

?>