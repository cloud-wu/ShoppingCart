<?php

use App\Book;
use App\ShoppingCart;
use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{
	
	public function test_購買一本哈利波特1，價格應該為100()
	{
		$target = 100;

		$ShoppingCart = new ShoppingCart();
		$result = $ShoppingCart->getPrice([
			new Book('哈利波特1', 100, 1)
		]);

		$this->assertEquals($target, $result);
	}

	public function test_第一集買了一本，第二集也買了一本，價格應為190()
	{
		$target = 190;

		$ShoppingCart = new ShoppingCart();
		$result = $ShoppingCart->getPrice([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1)
		]);

		$this->assertEquals($target, $result);
	}

	public function test_一二三集各買了一本，價格應為270()
	{
		$target = 270;

		$ShoppingCart = new ShoppingCart();
		$result = $ShoppingCart->getPrice([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
			new Book('哈利波特3', 100, 1)
		]);

		$this->assertEquals($target, $result);
	}

	public function test_一二三四集各買了一本，價格應為320()
	{
		$target = 320;

		$ShoppingCart = new ShoppingCart();
		$result = $ShoppingCart->getPrice([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
			new Book('哈利波特3', 100, 1),
			new Book('哈利波特4', 100, 1)
		]);

		$this->assertEquals($target, $result);
	}

	public function test_一次買了整套，一二三四五集各買了一本，價格應為375()
	{
		$target = 375;

		$ShoppingCart = new ShoppingCart();
		$result = $ShoppingCart->getPrice([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
			new Book('哈利波特3', 100, 1),
			new Book('哈利波特4', 100, 1),
			new Book('哈利波特5', 100, 1),
		]);

		$this->assertEquals($target, $result);
	}

	public function test_一二集各買了一本，第三集買了兩本，價格應為370()
	{
		$target = 370;

		$ShoppingCart = new ShoppingCart();
		$result = $ShoppingCart->getPrice([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 1),
			new Book('哈利波特3', 100, 2)
		]);

		$this->assertEquals($target, $result);
	}

	public function test_第一集買了一本，第二三集各買了兩本，價格應為460()
	{
		$target = 460;

		$ShoppingCart = new ShoppingCart();
		$result = $ShoppingCart->getPrice([
			new Book('哈利波特1', 100, 1),
			new Book('哈利波特2', 100, 2),
			new Book('哈利波特3', 100, 2),
		]);

		$this->assertEquals($target, $result);
	}
}

