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
			'name'=>'哈利波特1', 
			'price'=>'100', 
			'count'=>'1',
		]);
		$result = $ShoppingCart->getPrice();

		$this->assertEquals($target, $result);
	}
}

