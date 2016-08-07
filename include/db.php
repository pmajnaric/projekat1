<?php

class DB extends mysqli
	
{
	public function select($fields, $table, $where, $limit='')
	{
		$ret=[];
		if(empty($table)){return false;}
		if(empty($fields)){$fields='*';}
		if(!empty($limit)){$limit="LIMIT {$limit}";}
		$where=$this->where($where);
		
		$q="SELECT {$fields} FROM {$table} {$where} {$limit}";
		
		if($result=$this->query($q))
		{
			while($row=$result->fetch_assoc())
			{
				$ret[]=$row;
			}
			$result->free();
		}
		else
		
		{
				printf("Error:%s\n", $this->error, $q);
				return false;
		}
				return $ret;
		}


	public function selectCount($table, $where)
	{
		$ret=$this->select(" COUNT(*)AS CNT", $table, $where);
		return isset($ret[0]['CNT']) ? $ret[0]['CNT'] : false;
	}
	
	
	public function where($where)
	{
		
		if(empty($where)){return '';}
		if(is_array($where))
		{
			$where=$this->real_escape_string($where);
				foreach($where as $k=> $v)
				{
					$where[$k]="`{$k}`='{$v}'";
					}
					$where=implode("AND" , $where);
		}
		return !empty($where) ? "WHERE{$where}" : '';
	}
	
	
	public function real_escape_string($to_escape)
	{
		if (empty ($to_escape)) { return; }
		if (is_array($to_escape))
		{
			foreach($to_escape as $key=>$val)
			{
				$val=parent::real_escape_string($val);
				$to_escape[$key]=$val;
			}
		}
			else
			{
				$to_escape=parent::real_escape_string($to_escape);
			}
			
			return $to_escape;
		}
	
		
	
	
};
?>	