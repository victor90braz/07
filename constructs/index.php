<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";

// Object Composition and Abstractions

class Subscription {

    protected StripeGateWay $gateway;

    public function __construct(StripeGateWay $gateway) {

        $this->gateway = $gateway;
    }

    public function create() {

    }

    public function cancel() {

        // api request
        // find stripe costumer
            $this->gateway->findStripeCostumer();
        // find stripe subscription by costumer
    }

    public function invoice() {

    }

    public function swap($newPlan) {

    }
}

class StripeGateWay {

    // behaviour class
    public function findStripeCostumer() {

    }

    // behaviour class
    public function findStripeSubscriptionByCostumer() {

    }
}