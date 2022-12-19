<?php

namespace Sofyan\Belajar{

    class Customer{

        public function __construct(private string $name)
        {
            
        }

        public function sayHello($name = "Guest"):string
        {
            return "Hello $name nama saya adalah $this->name".PHP_EOL;
        }
    }
}