<?php

namespace ShoppingCart;

use PHPUnit\Framework\TestCase;

/**
* 
*/
class ShoppingCartTest extends TestCase
{
	
	public function test_購買一本哈利波特1，價格應該為100()
	{
		$target = 100;

		$ShoppingCart = new ShoppingCart([
			new Book('哈利波特1', 100, 1),
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}

	public function test_第一集買了一本，第二集也買了一本，價格應為190()
	{
		$target = 190;

		$ShoppingCart = new ShoppingCart([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}

	public function test_一二三集各買了一本，價格應為270()
	{
		$target = 270;

		$ShoppingCart = new ShoppingCart([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
			new Book('哈利波特3', 100, 1),
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}

	public function test_一二三四集各買了一本，價格應為320()
	{
		$target = 320;

		$ShoppingCart = new ShoppingCart([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
			new Book('哈利波特3', 100, 1),
			new Book('哈利波特4', 100, 1),
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}

	public function test_一次買了整套，一二三四五集各買了一本，價格應為375()
	{
		$target = 375;

		$ShoppingCart = new ShoppingCart([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
			new Book('哈利波特3', 100, 1),
			new Book('哈利波特4', 100, 1),
			new Book('哈利波特5', 100, 1),
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}
}

