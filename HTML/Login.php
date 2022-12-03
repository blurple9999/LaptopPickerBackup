<?php

namespace App;

class Login
{

    public $email_name;

    public function setEmailName($emailName)
    {
        $this->email_name = $emailName;
    }
    
    public function getEmailName()
    {
        return $this->email_name;
    }


    public $correct_password;

    public function setCorrectPassword($correctPassword)
    {
        $this->correct_password = $correctPassword;
    }
    
    public function getCorrectPassword()
    {
        return $this->correct_password;
    }


    public $remember_me;

    public function setRememberMe($rememberMe)
    {
        $this->remember_me = $rememberMe;
    }
    
    public function getRememberMe()
    {
        return $this->remember_me;
    }
    
    public $view_loginform;

    public function setViewLoginform($viewLoginform)
    {
        $this->view_loginform = $viewLoginform;
    }
    
    public function getViewLoginform()
    {
        return $this->view_loginform;
    }


    public $cannotview_loginform;

    public function setCannotviewLoginform($cannotviewLoginform)
    {
        $this->cannotview_loginform = $cannotviewLoginform;
    }
public function getCannotviewLoginform()
    {
        return $this->cannotview_loginform;
    }

    public $signup_beforelogin;

    public function setSignupBeforelogin($signupBeforelogin)
    {
        $this->signup_beforelogin = $signupBeforelogin;
    }
    
    public function getSignupBeforelogin()
    {
        return $this->signup_beforelogin;
    }

  
}