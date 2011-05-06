<?php
	
	require_once "mainModel.php";

	class usuarioModelo extends mainModel{

		/*--------- Modelo agregar usuario ---------*/
		protected static function agregar_usuario_modelo($datos){
			$sql=mainModel::conectar()->prepare("INSERT INTO usuarios(usuarios_ci,usuarios_nombre,usuarios_apellido,usuarios_usuario,usuarios_clave,usuarios_estado,usuarios_privilegio) VALUES(:ci,:Nombre,:Apellido,:Usuario,:Clave,:Estado,:Privilegio)");

			$sql->bindParam(":Ci",$datos['Ci']); 
			$sql->bindParam(":Nombre",$datos['Nombre']);
			$sql->bindParam(":Apellido",$datos['Apellido']); 
			$sql->bindParam(":Usuario",$datos['Usuario']);
			$sql->bindParam(":Clave",$datos['Clave']);
			$sql->bindParam(":Estado",$datos['Estado']);
			$sql->bindParam(":Privilegio",$datos['Privilegio']);
			$sql->execute();

			return $sql;
		}

	}