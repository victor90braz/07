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

Sure, let's incorporate the provided interface and extend the README with an explanation of object composition and abstractions. We'll retain the original layout and structure while including the interface and the additional content.

---

# Object-Oriented Principles in PHP

## Introduction

This repository explores object-oriented principles in PHP, focusing on object composition and abstractions. It includes classes and an interface: `Subscription`, `StripeGateWay`, and `GateWay`, illustrating the usage of these principles.

## Class Details

### Subscription Class

The `Subscription` class represents a subscription in a system that integrates with the Stripe payment gateway. It defines methods for subscription-related operations and relies on a `GateWay` object for gateway interactions.

```php
class Subscription {

    protected GateWay $gateway;

    public function __construct(GateWay $gateway) {
        $this->gateway = $gateway;
    }

    public function create() {
        // Implementation for subscription creation
    }

    public function cancel() {
        // Implementation for subscription cancellation
    }

    public function invoice() {
        // Implementation for generating an invoice
    }

    public function swap($newPlan) {
        // Implementation for changing subscription plan
    }
}
```

### GateWay Interface

The `GateWay` interface defines the behavior for a gateway, including methods to find a Stripe customer and find a Stripe subscription by customer.

```php
interface GateWay {

    // Behavior: Find a Stripe customer
    public function findStripeCustomer();

    // Behavior: Find a Stripe subscription by customer
    public function findStripeSubscriptionByCustomer();
}
```

### StripeGateWay Class

The `StripeGateWay` class implements the `GateWay` interface and encapsulates behavior related to the Stripe payment gateway.

```php
class StripeGateWay implements GateWay {

    public function findStripeCustomer() {
        // Implementation for finding a Stripe customer
    }

    public function findStripeSubscriptionByCustomer() {
        // Implementation for finding a Stripe subscription by customer
    }
}
```

## Usage

To use the `Subscription` and `StripeGateWay` classes, follow these steps:

1. Instantiate a `StripeGateWay` object.
2. Use the `StripeGateWay` object to create a `Subscription` object, passing the `StripeGateWay` instance to the `Subscription` constructor.
3. Perform subscription-related actions such as creation, cancellation, invoicing, or plan swapping using the appropriate methods of the `Subscription` object.

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

## Object Composition

Object composition is a fundamental principle of object-oriented programming where complex objects are built by combining simpler objects, which may be instances of classes or interfaces. This allows for creating more flexible and modular systems by breaking down complex behaviors into smaller, manageable components.

In the `Subscription` class, object composition is evident as it encapsulates a `GateWay` instance to handle subscription operations, promoting a modular and maintainable design.

## Abstractions

Abstraction is a key concept in object-oriented programming that involves hiding complex implementation details and exposing only relevant behaviors or properties. In this example, the `GateWay` interface serves as an abstraction by defining the contract for interacting with various gateway implementations, allowing for flexibility and interchangeability.

---

In this refactored README, we've incorporated the provided interface and extended the content to explain object composition and abstractions while maintaining the original layout and structure.
