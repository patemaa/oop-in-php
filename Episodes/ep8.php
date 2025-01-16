<?php

//class User
//{
//    public string $email;
//    public function __construct(string $email)
//    {
//        $this->email = $email;
//    }
//}
//
//$user = new User('example@gmail.com');
////$user->email = [];
//$user->email = 'dddddddddddddd';
//echo $user->email;

//class User
//{
//    public function __construct(private string $email)
//    {
//
//    }
//
//    public function getEmail()
//    {
//        return $this->email;
//    }
//
//    public function setEmail(string $email)
//    {
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            throw new InvalidArgumentException("Email must be valid.");
//        }
//        $this->email = $email;
//    }
//}
//
//$user = new User('example@gmail.com');
//$user->setEmail('ggggggggggggggg');
//echo $user->getEmail();

//class User
//{
//    public string $email{
//        get=> $this->email; // we can remove that but set method will work.
//        set {
//            if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
//                throw new InvalidArgumentException("Email must be valid.");
//            }
//
//            $this->email = $value;
//        }
//    }
//
//    public function __construct(string $email)
//    {
//        $this->email = $email;
//    }
//}
//
//$user = new User('example@gmail.com');
//
////$user->email = 'changed@ex.com';
//$user->email = 'changeddddedom';
//
//echo $user->email;

class User
{
    private(set) string $email {
        get => str_replace('@', '(at)', $this->email);
    }

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function updateEmail(string $email)
    {
        $this->email = $email;
    }
}

$user = new User('example@gmail.com');

$user->updateEmail('updated@ex.com');

echo $user->email;