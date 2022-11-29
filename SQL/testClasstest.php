//This class was created for this assignment; I am
//not using a class for this project, as I find it
//simpler and more efficient to have everything
//parsed through functions instead.

<?php
final class testClass{
	private $price_arr;
	private $storage_arr;
	private $ram_arr;
	
	private function __construct() {}	
	public function createPrice($post_price){
		if (!empty($post_price)){
			$price_arr = explode("-", $post_price);
		} else {
			$price_arr[0] = 0;
			$price_arr[1] = 5000;
		}
		return $price_arr;
	}
	
	public function createStorage($post_storage){
		if (!empty($post_storage)){
			$storage_arr = '(\'' . implode('\',\'', $post_storage) .'\')';
		} else { $storage_arr = '(\'128\',\'256\',\'512\',\'1024\',\'2048\')'; }
		return $storage_arr;
	}
	
	public function createRam($post_ram){
		if (!empty($post_ram)){
			$ram_arr = '(\'' . implode('\',\'', $post_ram) .'\')';
		} else { $ram_arr = '(\'4\',\'8\',\'16\',\'32\')'; }
		return $ram_arr;
	}
}
use PHPUnit\Framework\TestCase;
final class testClasstest extends TestCase{
	public function testPrice1(){
		$this->assertEquals([10, 20], testClass::createPrice('10-20'));
	}
	public function testPrice2(){
		$this->assertEquals([0, 5000], testClass::createPrice(NULL));
	}
	public function testStorage1(){
		$this->assertEquals('(\'128\',\'256\')', testClass::createStorage([128,256]));
	}
	public function testStorage2(){
		$this->assertEquals('(\'128\',\'256\',\'512\',\'1024\',\'2048\')', testClass::createStorage(NULL));
	}
	public function testRam1(){
		$this->assertEquals('(\'8\',\'16\')', testClass::createRam([8,16]));
	}
	public function testRam2(){
		$this->assertEquals('(\'4\',\'8\',\'16\',\'32\')', testClass::createRam(NULL));
	}
}
?>
