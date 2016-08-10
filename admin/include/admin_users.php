<?php

class Admin_users
{
	
public function login($username, $password)

{
	

	
	$user['idadmin_users']=App::DB()->selectCount("admin_users", ['username'=>$username, 'password'=>$password]);
	
	if($user['idadmin_users']>0)
	{
		
		$_SESSION['idadmin_users']=$user;
		$_SESSION['username']=$username;
		return true;
	}
	else{
		
		Msg::setErr("Pogresan username ili password");
		
		return false;
	
	}
	}
	
	public function is_logged()
	{
		if($_SESSION['idadmin_users'])
		{
			Msg::setMsg("Dobro dosli na stranicu za administraciju!");
			return true;
			
		}else{
			
			Msg::setErr("Morate biti ulogovani!");
			return false;
		
		}
		
	}
	



};




