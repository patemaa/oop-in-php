<?php

////Encapsulate : Restriction of access to an object's internals.
//class Person
//{
//    public function __construct(public string $name)
//    {
//
//    }
//    public function job()
//    {
//
//    }
//    public function favoriteTeam()
//    {
//
//    }
//    private function thingsThatKeepUpAtNight()
//    {
//        return 'Bob is afraid of dying';
//    }
//}
//
//$bob = new Person('Bob');
//var_dump($bob->thingsThatKeepUpAtNight()); // -> it is not going to work

class Example
{
    public string $email;
    public function getEmail(): ?string
    {
        return $this->email;
    }
}

$ex = new Example();
$ex->email;

// Getters allow for: greater control, opportunity for validation, backward compatibility.
// Public properties tie you to a specific implementation, while getters give you a stable interface that can evolve over time.
