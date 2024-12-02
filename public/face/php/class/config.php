<?php
class	db{

private	$mysqli;
private	static	$instance	=	NULL;

const Host = "localhost"; 
const USER_DB = "root"; 
const PASS_DB = ""; 
const NAME_DB = "face"; 



public	static	function getinstance(){

    if(!self::$instance){
        self::$instance = new self();


    };

return self::$instance;

}
public function	__construct(){		

	$this->mysqli	=	 new mysqli(self::Host,
									self::USER_DB,
									self::PASS_DB,
									self::NAME_DB);
	if(!$this->mysqli){
	die($this->mysqli->connect_error);
			};
	}
		

	public	function retrn(){
		
		return $this->mysqli;
		
		}
}



