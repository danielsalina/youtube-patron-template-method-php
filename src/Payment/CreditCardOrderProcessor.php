<?php

// Esta clase sobrescribe el método processPayment para manejar pagos con tarjeta de crédito.

namespace Payment;

class CreditCardOrderProcessor extends AbstractOrderProcessor
{
    protected function processPayment(): void
    {
        echo "Procesando el pago con tarjeta de crédito...\n";
        // Aquí irían las validaciones adicionales para la tarjeta de crédito
    }
}
