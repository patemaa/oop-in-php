<?php

//class  Vehicle
//{
//    public function accelerate()
//    {
//        echo "Accelerating";
//    }
//}
//
//class Cart extends Vehicle
//{
//    public function accelerate()
//    {
//        echo 'Rolling';
//    }
//}
//
//(new Cart)->accelerate();
//
////--we can override the parent method

//--------------------------------------------------
//class Notification
//{
//    public function __construct(public string $message)
//    {
//
//    }
//    public function send()
//    {
//        echo 'Show pop up message';
//    }
//}
//
//class EmailNotification extends Notification
//{
//    public function send()
//    {
//        echo 'Fire off an email notification';
//    }
//}
//
//class OSNotification extends Notification
//{
//    public function send()
//    {
//        echo 'Dispatcch an OS-specific notification';
//    }
//}
//
//$notification = new EmailNotification('here is my notification');
////echo $notification->message;
//$notification->send();

class User
{

}

abstract class Achievement
{
    public function __construct(public string $name, public string $description, public string $icon)
    {

    }

    abstract public function qualifier(User $user);
}

class FirstPostAchievement extends Achievement
{
    public function qualifier(User $user)
    {
        return true;
    }
}

class TalkativeAchievement extends Achievement
{
    public function qualifier(User $user)
    {
        //$user->$comments()->count() >= 200;
    }
}

$firstPost = new FirstPostAchievement(
    'First Post',
    'Granted when you create your first post.',
    'first-post.svg'
);

echo $firstPost->qualifier(new User) ? 'They qualify' : 'They do not qualify';
