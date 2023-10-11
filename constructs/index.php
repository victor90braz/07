<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";

// Object Composition and Abstractions

    class Subscription {

    protected GateWay $gateway;

    public function __construct(GateWay $gateway) {

        $this->gateway = $gateway;
    }

    public function create() {

    }

    public function cancel() {
    }

    public function invoice() {

    }

    public function swap($newPlan) {

    }
}

interface GateWay {

    // behaviour class
    public function findCostumer();

    // behaviour class
    public function findSubscriptionByCostumer();

}

class StripeGateWay implements GateWay {

    // behaviour class
    public function findCostumer() {}

    // behaviour class
    public function findSubscriptionByCostumer() {}
}