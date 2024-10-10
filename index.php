<?php

require_once 'vendor/autoload.php';

use Payment\CreditCardOrderProcessor;
use Payment\PayPalOrderProcessor;

// Procesar un pedido con tarjeta de crédito
echo "Proceso con tarjeta de crédito:\n";
$creditCardProcessor = new CreditCardOrderProcessor();
$creditCardProcessor->processOrder();

echo "\n";

// Procesar un pedido con PayPal
echo "Proceso con PayPal:\n";
$payPalProcessor = new PayPalOrderProcessor();
$payPalProcessor->processOrder();
