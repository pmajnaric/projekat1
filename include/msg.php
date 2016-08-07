<?php


	
class Msg{

	
	public static function setErr($error)
	{
		$_SESSION['error'][]=$error; 
	}
	
	public static function getErr()
	{
		if(empty($_SESSION['error']) || !is_array($_SESSION['error'])){return false;}
		return $_SESSION['error'];
		   
		   }
	public static function clearErr()
	{
		$_SESSION['error']=[];
	
	}
	
	public static function setMsg($msg)
	{
		$_SESSION['msg'][]=$msg;
	}
	
	public static function getMsg()
	{
		if(empty($_SESSION['msg']) || !is_array($_SESSION['msg'])) {return false;}
		return $_SESSION['msg'];
	}
	
	public static function clearMsg()
	{
		$_SESSION['msg']=[];
	}
		
		
};



?>