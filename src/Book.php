<?php

namespace App;

class Book
{
	public $name;
	public $price;
	public $count;

	function __construct($name, $price, $count)
	{
		$this->name = $name;
		$this->price = $price;
		$this->count = $count;
	}
}
