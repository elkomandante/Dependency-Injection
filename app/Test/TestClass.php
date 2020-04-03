<?php


namespace App\Test;


class TestClass implements TestClassInterface
{
    private $testArgument;

    public function __construct($testArgument)
    {
        $this->testArgument=$testArgument;
    }

    public function index()
    {
        return "test class index with argument ".$this->testArgument;
    }
}