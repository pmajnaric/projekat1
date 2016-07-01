<?php

error_reporting(E_ALL);

require_once "/const.php";


class App
{
	
	private static $defTitle='Novi sajt';
	private static $page_meta=[];
	private static $vars=[];
	private static $prefix='template/';
	private static $sufix='.tpl.php';
	
	
	public static function setTitle($title,$addTitle=true){
		
		if(empty($title)){return;}
		if($addTitle){$title=self::$defTitle."-{$title}";}
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
		
	
};






