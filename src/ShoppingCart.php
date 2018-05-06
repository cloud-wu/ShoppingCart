<?php

namespace App;

use App\Book;

class ShoppingCart
{
	protected $books;

	function __construct()
	{
		$this->books = [];
	}

	/**
	 * add book in shopping cart
	 * @param  Book   $book    book
	 */
	public function add(Book $book)
	{
		$this->books[] = $book;
	}

	/**
	 * Get the price of books
	 * @param  int   $count    the count of books
	 * @return double          price
	 */
	public function getPrice()
	{
		$price = 0;

		do {
			$count = 0;
			$BookSetPrice = 0;

			foreach ($this->books as $book) {
				if ($book->count >= 1) {
					$count++;
					$book->count -= 1;
					$BookSetPrice += $book->price;
				}
			}

			$price += $BookSetPrice * $this->getDiscountPercent($count);

		} while ($count > 0);

		return $price;
	}

	/**
	 * Get the discount percent of book's set
	 * @param  int   $count    the count of books
	 * @return double          discount percent
	 */
	protected function getDiscountPercent($count)
	{
		switch ($count) {
			case 2:
				$discount = 0.95;
				break;
			case 3:
				$discount = 0.9;
				break;
			case 4:
				$discount = 0.8;
				break;
			case 5:
				$discount = 0.75;
				break;
			default:
				$discount = 1;
				break;
		}

		return $discount;
	}
}
