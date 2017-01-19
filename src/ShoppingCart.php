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
		$price = 0;
		if(count($this->book_list) == 1) {
			$price = $this->book_list[0]['price'];
		} else {
			foreach ($this->book_list as $key => $book) {
				$price += $book['price'];
			}

			$price *= 0.95;
		}

		return (int)$price;
	}	
}

