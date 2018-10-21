<?php

class MySQLClass{
	private $db_server,$db_username,$db_password,$db_name,$db_link,$db_port;
	
	function MySQLClass($db_server=null,$db_username=null,$db_password=null,$db_name=null,$db_port=null){
		if(empty($db_server)){
			#database info defined in congig.php
			$this->db_server=db_host;
			$this->db_username=db_user;
			$this->db_password=db_password;
			$this->db_name=db_name;
			$this->db_port=db_port;
		}else{
			$this->db_server=$db_server;
			$this->db_username=$db_username;
			$this->db_password=$db_password;
			$this->db_name=$db_name;
			$this->db_port=$db_port;
		}
	}		
	
	function transaction($sqls, $params){
		$dbh = null;
		$error_msg = "";
		try {
			$dsn = "mysql:host=".$this->db_server.";dbname=".$this->db_name.";port=".$this->db_port;
			$dbh = new PDO($dsn, $this->db_username, $this->db_password);
			$dbh->exec("set names utf8");
			$dbh->exec("SET TIME_ZONE='+8:00'");
			$dbh->exec("set @GenesisUser='".$_SESSION["account"]."'");
			$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
			$dbh->beginTransaction();
			
			for($i=0 ; $i<count($sqls) ; $i++){
				$stmt = $dbh->prepare($sqls[$i]);
				$stmt->execute($params[$i]);
			}
		 
			$dbh->commit();
		} catch(PDOException $ex) {
			if($dbh != null){
				$dbh->rollBack();
				//$error_msg = implode(":",$dbh->errorInfo());
				$error_msg = $ex->getMessage();
				//echo $error_msg;
			}else{
				$error_msg = "connection is nothing . please check connection.";
			}
		}
		return $error_msg;
	}
	
		
	function fetch_array($sql , $params = null){
		try{
			$dsn = "mysql:host=".$this->db_server.";dbname=".$this->db_name.";port=".$this->db_port;;
			$dbh = new PDO($dsn, $this->db_username, $this->db_password);
			$dbh->exec("set names utf8");
			$dbh->exec("SET TIME_ZONE='+8:00'");
			$sth = $dbh->prepare($sql);
			if(count($params)>0) {
				$sth->execute($params);
			}else{
				$sth->execute();
			}
			return $sth->fetchAll();
		} catch(Exception $ex) {
			throw $ex;
		}
	}
}
//$db=new MySQLClass();
?>