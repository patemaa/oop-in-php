<?php

class User
{

}

class NewsLetter
{
    public function __construct(public NewsLetterProvider $provider)
    {
    }

    public function subscribe(User $user)
    {
        $this->provider->addToList('default', $user->email);

        // Update the user and mark them as subscribed.
        $user->update(['subscribed' => true]);

        return true;
    }
}

interface NewsLetterProvider
{
    public function addToList(string $list, string $email): void;
}

class CampaignMonitorProvider implements NewsLetterProvider
{
    public function addToList(string $list, string $email) :void
    {
        // interact with CampaignMonitor
        $cm = new CampaignMonitorAPI();

        $cm->addApiKey('asdasdasdf');

        $list = $cm->lists->find($list);

        $list->addToList($email);
    }
}

$newsLetter = new NewsLetter(
    new CampaignMonitorProvider()
);

$newsLetter->subscribe(new User);