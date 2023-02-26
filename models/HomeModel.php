<?php
	namespace models;
	class HomeModel extends Model
	{

		//Aqui é o método para puxar os clientes!
		public static function pegaClientes(){
		$clientes = \MySql::connect()->prepare("SELECT * FROM clientes");
		$clientes->execute();


		return $clientes->fetchAll();
		}
		
	}
?>