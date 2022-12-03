<?php

class ProductTest extends \PHPUnit\Framework\TestCase
{
    public function testThatgetCpuSeries()
    {
        $product = new App\Product;

        $product->setCpuSeries('Intel Core i7');
    
        $this->assertEquals($product->getCpuSeries(), 'Intel Core i7');
    }


    public function testThatgetOperatingSystem()
    {
        $product = new App\Product;

        $product->setOperatingSystem('Windows 11');
    
        $this->assertEquals($product->getOperatingSystem(), 'Windows 11');
    }

    public function testThatgetTouchScreen()
    {
        $product = new App\Product;

        $product->setTouchScreen('Yes');
    
        $this->assertEquals($product->getTouchScreen(), 'Yes');
    }

    public function testThatgetTouchScreenNo()
    {
        $product = new App\Product;

        $product->setTouchScreen('No');
    
        $this->assertEquals($product->getTouchScreen(), 'No');
    }

    public function testThatgetAspectRatio()
    {
        $product = new App\Product;

        $product->setAspectRatio('16:9');
    
        $this->assertEquals($product->getAspectRatio(), '16:9');
    }

    public function testThatgetRefreshRate()
    {
        $product = new App\Product;

        $product->setRefreshRate('60 Hz');
    
        $this->assertEquals($product->getRefreshRate(), '60 Hz');
    }
}