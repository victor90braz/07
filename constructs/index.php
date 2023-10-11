<?php
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";

// Object Composition and Abstractions

class Subscription {

    public function create() {

    }

    public function cancel() {

        // api request
        // find stripe costumer
        // find stripe subscription by costumer
    }

    public function invoice() {

    }

    public function swap($newPlan) {

    }
}

class BillableSubscription extends Subscription {

    // behaviour class
    protected function findStripeCostumer() {

    }

    // behaviour class
    protected function findStripeSubscriptionByCostumer() {

    }
}