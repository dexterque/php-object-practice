<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2019/1/22
 * Time: 17:11
 */

class ShopProduct {
	private $title;
	private $producerMainName;
	private $producerFirstName;
	protected $price;
	private $discount = 0;

	public function __construct($title, $firstName, $mainName, $price) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}

	public function getProductFirstName(){
		return $this->producerFirstName;
	}

	public function getProductMainName(){
		return $this->producerMainName;
	}

	
}

class ShopProductWriter{
	private $products = [];

	public function addProduct(ShopProduct $shopProduct){
		$this->products[] = $shopProduct;
	}

	public function write(){
		$str = "";
		foreach ($this->products as $product) {
			$str .= "{$product->title}";
			$str .= "{$product->productFirstName}";
			$str .= "{$product->productMainName}";
			$str .= "{$product->price}";
		}
		print($str);
	}
}


$obj = new ShopProduct("www", "dex", "mmm", "2");
print_r($obj->getProducer());
