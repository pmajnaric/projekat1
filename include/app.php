<?php

error_reporting(E_ALL);

require_once __DIR__ . "/const.php";  
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/../admin/include/admin_users.php";
require_once __DIR__ . "/msg.php";


class App
{
	private static $db;
	private static $defTitle='Velikani';
	private static $page_meta=[];
	private static $vars=[];
	private static $prefix='template/';
	private static $sufix='.tpl.php';
	private static $page_css=[];
	
	
	public static function setDB()
	{
		
		self::$db=new DB(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		
		if(self::$db->connect_errno)
		{
			printf("Connection faild:s%\n", self::$db->connect_errno);
			exit();
		}
	}
	
	public static function DB()
		
	{
		
		return self::$db;
	}
	
	public static function setTitle($title, $addTitle=true){
		
		if(empty($title)){return;}
		if($addTitle) {$title=self::$defTitle . " - {$title}" ; }
		
		 self::$page_meta['title']=$title;	
		}
	
	public static function getTitle(){
		
		return !empty(self::$page_meta['title']) ? self::$page_meta['title'] : self::$defTitle;
	}

	
	public static function template ($template)
	{
		if(empty($template)){return;}
		if(!is_array($template)){$template=array($template);}
		
		foreach(self::$vars as $key=>$val)
		{
			$$key=$val;	
		}
		foreach($template as $val)
		{
			require self::$prefix.$val.self::$sufix;
		}
	}
		public static function setCss($css)
		{
			if(empty($css)){return;}
			if(!is_array($css)){$css=array($css);}
			
			self::$page_css=array_merge(self::$page_css, $css);
		}
	
		public static function getCss()
		{
			array_unique(self::$page_css);
			return self::$page_css;
		}
	
};



session_start();
App::setDB();

?>