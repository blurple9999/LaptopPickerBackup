<?php

namespace App;

class Contact
{
    public $first_name;
    public $last_name;
   
    public $email_address;
    public $home_address;
    public $phone_number;
   

    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }
    
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
    }
    
    public function getLastName()
    {
        return $this->last_name;
    }

    public function setFullName($fullName)
    {
        $this->full_name = $fullName;
    }
    
    public function getFullName()
    {
        return $this->full_name;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->email_address = $emailAddress;
    }
    
    public function getEmailAddress()
    {
        return $this->email_address;
    }

    public function setHomeAddress($homeAddress)
    {
        $this->home_address = $homeAddress;
    }
    public function getHomeAddress()
    {
        return $this->home_address;
    }

    public function setPhoneNumber($phoneNumber)
    {
        $this->phone_number = $phoneNumber;
    }
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }
    

}
    