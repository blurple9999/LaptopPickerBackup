<?php

class LoginTest extends \PHPUnit\Framework\TestCase
{
    public function testThatgetEmailName()
    {
    $login = new App\Login;

    $login->setEmailName('sanjida.shanta64@gmail.com');
    
    $this->assertEquals($login->getEmailName(), 'sanjida.shanta64@gmail.com');
    }


    public function testThatgetCorrectPassword()
    {
    $login = new App\Login;

    $login->setCorrectPassword('Allahu97@');
    
    $this->assertEquals($login->getCorrectPassword(), 'Allahu97@');
    }

 public function testThatgetRememberMe()
    {
    $login = new App\Login;

    $login->setRememberMe('password:Allahu97@');
    
    $this->assertEquals($login->getRememberMe(), 'password:Allahu97@');
    }

    public function testThatgetViewLoginform()
    {
    $login = new App\Login;

    $login->setViewLoginform('can see the page');
    
    $this->assertEquals($login->getViewLoginform(), 'can see the page');
    }

    public function testThatgetCannotviewLoginform()
    {
    $login = new App\Login;

    $login->setCannotviewLoginform('can not  see the page');
    
    $this->assertEquals($login->getCannotviewLoginform(), 'can not  see the page');
    }
    
    public function testThatgetSignupBeforelogin()
    {
    $login = new App\Login;

    $login->setSignupBeforelogin('can not  see the page');
    
    $this->assertEquals($login->getSignupBeforelogin(), 'can not  see the page');
    }

   


}