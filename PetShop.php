<?php
abstract class Pet {
    abstract function reaction(); 
}

class petshopCustomer {
    public function touch(Pet $pet) {
        $pet->reaction();
    }
}

class Dog extends Pet
{
    public function reaction()
    {
        echo "ワン";
    }
}

class Cat extends Pet
{
    public function reaction()
    {
        echo "ニャン";
    }
}

$customer = new petshopCustomer();
$customer->touch(new Dog());
$customer->touch(new cat());

class PetShop {
public function __counstruct(
    protected App $app,
    protected bool $withoutLogging = false
) {}

private function paycheck()
{
    if(!$this->withoutLogging) {
        $this->app->getLogger()->Log("begin");
    }

    if(!$this->withoutLogging) {
        $this->app->getLogger()->log("end");
    }
}
}

$shop = new PetShop($app,true);

