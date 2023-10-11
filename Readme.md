# Object-Oriented Principles in PHP

## Run a local PHP server in the "constructs" directory:

php -S localhost:8888 -t constructs

Certainly! Let's refactor the README while incorporating the provided class code without changing the layout:

---

# Object-Oriented Principles in PHP

## Introduction

This repository explores object-oriented principles in PHP, focusing on object composition and abstractions. It includes two classes: `Subscription` and `StripeGateWay`, illustrating the usage of these principles.

## Class Details

### Subscription Class

The `Subscription` class represents a subscription in a system that integrates with the Stripe payment gateway. It defines methods for subscription-related operations and relies on a `StripeGateWay` object for gateway interactions.

```php
class Subscription {

    protected StripeGateWay $gateway;

    public function __construct(StripeGateWay $gateway) {
        $this->gateway = $gateway;
    }

    public function cancel() {
        // Perform cancellation logic
        $this->gateway->findStripeCostumer();
        // Find stripe subscription by customer
    }

    // Other methods: create, invoice, swap
}
```

### StripeGateWay Class

The `StripeGateWay` class encapsulates behavior related to the Stripe payment gateway. It provides methods to interact with the Stripe API for customer and subscription-related operations.

```php
class StripeGateWay {

    // Behavior: Find a Stripe customer
    public function findStripeCostumer() {
        // Implementation details
    }

    // Behavior: Find a Stripe subscription by customer
    public function findStripeSubscriptionByCustomer() {
        // Implementation details
    }
}
```

## Usage

To use the `Subscription` and `StripeGateWay` classes, follow these steps:

1. Instantiate a `StripeGateWay` object.
2. Use the `StripeGateWay` object to create a `Subscription` object, passing the `StripeGateWay` instance to the `Subscription` constructor.
3. Perform subscription-related actions such as cancellation using the `cancel` method of the `Subscription` object.

Example Usage:

```php
<?php
// Include necessary files and functions
$basePath = "C:\\Users\\braz9\\Desktop\\projects\\laracasts\\object-oriented-principles-php\\07\\";
require_once $basePath . "functions.php";
require_once $basePath . "Subscription.php";
require_once $basePath . "StripeGateWay.php";

// Instantiate StripeGateWay
$stripeGateway = new StripeGateWay();

// Instantiate Subscription with the StripeGateWay instance
$subscription = new Subscription($stripeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```

---

In this refactored README, we've retained the provided class code, maintaining the original layout and structure while incorporating it into the README for context and clarity.
