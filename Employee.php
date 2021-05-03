<?php
/* 
A domain Class to demonstrate RESTful web services
*/
Class Employee {
	
		
	/*
		you should hookup the DAO here
	*/
	public function getAllEmployees(){
		$personal_file = fopen("personal_data.json", "r") or die("Unable to open file!");
		$personal_data = fread($personal_file,filesize("personal_data.json"));
		fclose($personal_file);
		return $personal_data;
	}
	
	/*public function getMobile($id){
		
		$mobile = array($id => ($this->mobiles[$id]) ? $this->mobiles[$id] : $this->mobiles[1]);
		return $mobile;
	}	*/
}
?>