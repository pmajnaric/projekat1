<?php

error_reporting(E_ALL);

require_once "/const.php";
require_once "template/header.tpl.php";

class App
{
	
	private static $defTitle='Novi sajt';
	private static $meta_page=[];
	
	
	public static function setTitle($title,$addTitle=true){
		
		if(empty($title)){return;}
		if($addTitle){$title=self::$defTitle."{$title}";}
		 self::$page_meta['title']=$title;	
		}
	
	public static function getTitle(){
		
		return !empty(self::$page_meta['title']) ? self::$page_meta['title'] : self::$defTitle;
	} 
	
};





?><?php

error_reporting(E_ALL);

require_once "/const.php";
require_once "template/header.tpl.php";

class App
{
	
	private static $defTitle='Novi sajt';
	private static $meta_page=[];
	
	
	public static function setTitle($title,$addTitle=true){
		
		if(empty($title)){return;}
		if($addTitle){$title=self::$defTitle."{$title}";}
		 self::$page_meta['title']=$title;	
		}
	
	public static function getTitle(){
		
		return !empty(self::$page_meta['title']) ? self::$page_meta['title'] : self::$defTitle;
	} 
	
};





?>
