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



};




