<?php

class ContactTest extends \PHPUnit\Framework\TestCase
{
    public function testThatgetFirstName()
    {
        $contact = new App\Contact;

        $contact->setFirstName('Rafi');

        $this->assertEquals($contact->getFirstName(), 'Rafi');
    }

    public function testThatgetLastName()
    {
        $contact = new App\Contact;

        $contact->setLastName('Sultan');

        $this->assertEquals($contact->getLastName(), 'Sultan');
    }

    public function testThatgetFullName()
    {
        $contact = new App\Contact;

        $contact->setFullName('Rafi_Sultan');
       
        $this->assertEquals($contact->getFullName(), 'Rafi_Sultan');
    }

    public function testThatgetEmailAddress()
    {
        $contact = new App\Contact;

        $contact->setEmailAddress('hj2729@wayne.edu');
       
        $this->assertEquals($contact->getEmailAddress(), 'hj2729@wayne.edu');
    }
    
    public function testThatgetHomeAdddress()
    {
        $contact = new App\Contact;

        $contact->setHomeAddress('Detroit');
       
        $this->assertEquals($contact->getHomeAddress(), 'Detroit');
    }

    public function testThatPhoneNumber()
    {
        $contact = new App\Contact;

        $contact->setPhoneNumber('3133278811');
       
        $this->assertEquals($contact->getPhoneNumber(), '3133278811');
    }

}