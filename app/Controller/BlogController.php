<?php


namespace App\Controller;


use App\Test\TestClass;
use App\Test\TestClassInterface;

class BlogController
{
    private $testClass;
    private $mail;

    public function __construct(TestClassInterface $class,$mail,$pera)
    {
        $this->testClass=$class;
        $this->mail=$mail;

    }

    public function pera()
    {
        echo "mail is ".$this->mail."<br>";
        echo $this->testClass->index();
    }

}