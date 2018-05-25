<?php

namespace App;

class Book
{
	private $name;
	private $price;
	private $count;

	function __construct($name, $price, $count)
	{
		$this->name = $name;
		$this->price = $price;
		$this->count = $count;
	}

    /**
     * Get the price of book
     * @return int          price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Check the book's count is empty or not
     * @return boolean       the book's count is empty or not
     */
    public function isEmpty()
    {
        return empty($this->count);
    }

    /**
     * Minus the book's count
     * @param  int   $count   minus count
     */
    public function minus(int $count = 1)
    {
        if ($count > $this->count) {
            throw new RangeException("Book's count is less than zero.");
        }

        $this->count -= $count;
    }
}
