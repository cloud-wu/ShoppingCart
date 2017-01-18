<?php

namespace ShoppingCart;


/**
* 
*/
class ShoppingCart
{
	protected $book_list;

	function __construct($book_list)
	{
		$this->book_list = $book_list;
	}

	public function getPrice()
	{
		return 100;
	}	
}

