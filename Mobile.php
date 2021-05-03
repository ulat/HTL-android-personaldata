<?php
/* 
A domain Class to demonstrate RESTful web services
*/
Class Staff {
	
	private $mobiles = array(
		1 => 'Apple iPhone 6S',  
		2 => 'Samsung Galaxy S6',  
		3 => 'Apple iPhone 6S Plus',  			
		4 => 'LG G4',  			
		5 => 'Samsung Galaxy S6 edge',  
		6 => 'OnePlus 2');
		
	/*
		you should hookup the DAO here
	*/
	public function getAllMobile(){
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