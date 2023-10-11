# Object-Oriented Principles in PHP

## Run a local PHP server in the "constructs" directory:

php -S localhost:8888 -t constructs

# Subscription Class and StripeGateway README

This README provides an overview and usage guide for the `Subscription` class and its interaction with the `StripeGateWay` class.

## Subscription Class

The `Subscription` class represents a subscription in a system that integrates with the Stripe payment gateway. It has a protected property named `$gateway` of type `StripeGateWay`, which allows it to interact with the Stripe gateway for subscription-related operations.

### Constructor

```php
public function __construct(StripeGateWay $gateway)
```

- The constructor initializes a `Subscription` object with a `StripeGateWay` instance passed as a parameter. This allows the `Subscription` instance to utilize the capabilities of the Stripe gateway through the provided `StripeGateWay` object.

### Cancel Method

```php
public function cancel()
```

- The `cancel` method represents the cancellation of a subscription. Within this method, the `Subscription` class interacts with the `StripeGateWay` object to perform various operations:
  1. It calls the `findStripeCostumer` method of the `StripeGateWay` object to find a Stripe customer.
  2. It proceeds to find the Stripe subscription associated with the customer.

## StripeGateWay Class

The `StripeGateWay` class encapsulates behavior related to the Stripe payment gateway. It provides methods to interact with the Stripe API for customer and subscription-related operations.

### Methods

#### findStripeCostumer

```php
public function findStripeCostumer()
```

- The `findStripeCostumer` method represents the action of finding a customer within the Stripe platform. This method can be further extended to incorporate API requests and other logic required to retrieve customer information from Stripe.

#### findStripeSubscriptionByCostumer

```php
public function findStripeSubscriptionByCostumer()
```

- The `findStripeSubscriptionByCostumer` method represents the action of finding a subscription associated with a customer within the Stripe platform. Similar to the `findStripeCostumer` method, this method can be extended to include API requests and logic for retrieving subscription details from Stripe.

## Usage

To utilize the `Subscription` and `StripeGateWay` classes, follow these steps:

1. Instantiate a `StripeGateWay` object.
2. Use the `StripeGateWay` object to create a `Subscription` object, passing the `StripeGateWay` instance to the `Subscription` constructor.
3. Perform subscription-related actions such as cancellation using the `cancel` method of the `Subscription` object.

Example Usage:

```php
// Instantiate StripeGateway
$stripeGateway = new StripeGateWay();

// Instantiate Subscription with the StripeGateway instance
$subscription = new Subscription($stripeGateway);

// Cancel a subscription
$subscription->cancel();
```

Ensure that the necessary configurations and dependencies are set up for the Stripe gateway integration to work seamlessly with the `Subscription` class.

Sure, let's add a code snippet to the example usage in the README:

````markdown
## Usage

To utilize the `Subscription` and `StripeGateWay` classes, follow these steps:

1. Instantiate a `StripeGateWay` object.
2. Use the `StripeGateWay` object to create a `Subscription` object, passing the `StripeGateWay` instance to the `Subscription` constructor.
3. Perform subscription-related actions such as cancellation using the `cancel` method of the `Subscription` object.

Example Usage:

```php
<?php
require_once 'Subscription.php'; // Include the Subscription class file
require_once 'StripeGateWay.php'; // Include the StripeGateWay class file

// Instantiate StripeGateWay
$stripeGateway = new StripeGateWay();

// Instantiate Subscription with the StripeGateWay instance
$subscription = new Subscription($stripeGateway);

// Cancel a subscription
$subscription->cancel();
?>
```
````

Ensure that the necessary configurations and dependencies are set up for the Stripe gateway integration to work seamlessly with the `Subscription` class.

```

This code snippet provides an example of how to use the `Subscription` and `StripeGateWay` classes in a PHP environment. Make sure to replace `path/to/your/image.png` with the actual path to your image.
```
