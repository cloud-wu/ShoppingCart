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
			['name'=>'哈利波特1', 'price'=>'100', 'count'=>'1']
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}

	public function test_第一集買了一本，第二集也買了一本，價格應為190()
	{
		$target = 190;

		$ShoppingCart = new ShoppingCart([
			['name'=>'哈利波特1', 'price'=>'100', 'count'=>'1'],
			['name'=>'哈利波特2', 'price'=>'100', 'count'=>'1']
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}

	public function test_一二三集各買了一本，價格應為270()
	{
		$target = 270;

		$ShoppingCart = new ShoppingCart([
			['name'=>'哈利波特1', 'price'=>'100', 'count'=>'1'],
			['name'=>'哈利波特2', 'price'=>'100', 'count'=>'1'],
			['name'=>'哈利波特3', 'price'=>'100', 'count'=>'1']
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}
}

