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
	
	
	

public function select()
{
	
		$id_users=!empty($_POST['idadmin_users']) ? $_POST['idadmin_users'] : "";
		$username=!empty($_POST['username']) ? $_POST['username'] : "";
		$password=!empty($_POST['password']) ? $_POST['password'] : "";

	
		$user['idadmin_users']=App::DB()->select("*","admin_users",['idadmin_users'=>$id_users,'username'=>$username, 'password'=>$password]);
	
		if($user['idadmin_users']>0)
		{
		
			return true;
		}
		else{
		
			Msg::setErr("Nema registrovanih administratora!");
		
			return false;
	
			}
}

 

};




