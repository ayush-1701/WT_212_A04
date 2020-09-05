<?php

class davidResto
{
	private $dishes;
	function __construct(array $dishes)
	{
		if(sizeof($dishes) > 0)
		{
			$this->dishes = $dishes 

		}
		else
		{
			throw new Exception("Data UNAVAILABLE!!!")
		}
	}

	public function MenuItem()
	{
		$Items = array();

		foreach($this->dishes as $list)
		{
			$Items[] = array("Id" => $list['id'], 
							 "Name" => $list['name']);
		}
		return json_encode($Items);
	}

	public function Details($id)
	{
		$itemDetails = ['Not Found!!!'];
		foreach($this->dishes as $list)
		{
			if($id == $list['id'])
			{
				$data = $list;
				break;
			}
		}
		return json_encode($data);
	}
}
?>