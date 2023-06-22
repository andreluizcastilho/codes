<?php

	class Connection{
		private static $conn;
		static function getConn(){
			if(is_null(self::$conn)){
				self::$conn = new PDO('mysql:host=localhost;dbname=db_poker','root','');
				self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			//echo 'conectado';
			return self::$conn;			
		}
	}
	
	

/*	

	abstract class Connection{
		
		private $serveDB   = 'mysql:host=localhost;dbname=db_yoganomads';
		private $user      = 'root';
		private $pass      = '';
		
		protected function connect(){
			try{
				$conn = new PDO($this->serveDB, $this->user ,$this->pass);
				$conn->exec('set names utf8');
				
				return $conn;
			}catch(PDOException $erro){
				$erro->getMessage();
			}
		}
		
	}

	class Connection{
		private static $conn;
		static function getConn(){
			if(is_null(self::$conn)){
				self::$conn = new PDO('mysql:host=localhost;dbname=db_yoganomads','root','');
				self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			//echo 'conectado';
			return self::$conn;			
		}
	}


	//acesso com banco hospedado
	class DB{
		private static $conn;
		static function getConn(){
			if(is_null(self::$conn)){
				self::$conn = new PDO('mysql:host=mysql743.umbler.com;dbname=db_yoganomads','yoganomad','praiaevento');
				self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			return self::$conn;
		}
	}
	
	db_yoganomads	yoganomad	mysql743.umbler.com
	
	https://www.youtube.com/watch?v=eaQibOqvLcA
*/	
	
	
?>