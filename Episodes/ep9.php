<?php

class Subscription
{
    public function __construct(protected BillingPortal $BillingPortal)
    {

    }

    public function create()
    {
        //interact with a billing provider, like Stripe
        // get a stripe customer
        // get a stripe subscription

        $this->BillingPortal->getCustomer();
    }

    public function cancel()
    {

    }

    public function swap(string $newPlan)
    {

    }

    public function invoice()
    {

    }
}

interface BillingPortal
{
    public function getCustomer();

    public function getSubscription();
}

class StripeBillingPortal implements BillingPortal
{
    public function getCustomer()
    {

    }

    public function getSubscription()
    {

    }
}
//class BraintreeBillingPortal implements BillingPortal
//{
//    public function getCustomer()
//    {
//
//    }
//
//    public function getSubscription()
//    {
//
//    }
//}

//$stripeBillingPortal = new StripeBillingPortal();
//$stripeBillingPortal->getSubscription();

$subscription = new Subscription(
    new StripeBillingPortal()
);

$subscription->create();