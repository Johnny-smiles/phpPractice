<?php

class Subscription
{
    /**
     * @var Gateway
     */
    protected Gateway $gateway;
    // this will cause the subscription to conform to the
    // interface structure.

    public function __construct(Gateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        // pseudo code to find strip customer
        $this->gateway->findCustomer();
    }

    public function invoice()
    {

    }
}

interface Gateway
{
    // this will set up the rules for the new vendor classes.
    public function findCustomer();

    public function findSubscriptionByCustomer();


}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {
        // adding code specific to stripe
    }
    public function findSubscriptionByCustomer()
    {

    }
}

class VenmoGateway implements Gateway
{
    public function findCustomer()
    {
        // Venmo specific code.
    }
    public function findSubscriptionByCustomer()
    {
        // TODO: Implement findSubscriptionByCustomer() method.
    }
}

// how to invoke for Stripe
new Subscription(new StripeGateway());

//or invoke for Venmo
new Subscription(new VenmoGateway());