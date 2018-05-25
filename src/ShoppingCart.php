<?php

namespace App;

use App\Book;

class ShoppingCart
{
	/**
	 * Get the price of books
	 * @param  array   $books  the books in shopping cart
	 * @return double          price
	 */
	public function getPrice($books)
	{
		$count = 0;
		$BookSetPrice = 0;

		foreach ($books as $book) {
			if (! $book->isEmpty()) {
				$count++;
				$book->minus();
				$BookSetPrice += $book->getPrice();
			}
		}

		if ($count === 0) {
			return 0;
		}

		return $BookSetPrice * $this->getDiscountPercent($count) + $this->getPrice($books);
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
