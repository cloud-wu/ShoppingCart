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

		do {
			$count = 0;
			$discount_price = 0;

			foreach ($this->book_list as $key => $book) {
				if ($book->count >= 1) {
					$count++;
					$book->count -= 1;
					$discount_price += $book->price;
				}
			}

			$discount_price *= $this->getDiscount($count);
			$price += $discount_price;

		} while ($count > 0);

		return (int)$price;
	}

	public function getDiscount($count)
	{
		$discount = 1;
		switch ($count) {
			case '1':
				$discount = 1;
				break;
			case '2':
				$discount = 0.95;
				break;
			case '3':
				$discount = 0.9;
				break;
		}

		return $discount;
	}
}

/**
* 
*/
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

