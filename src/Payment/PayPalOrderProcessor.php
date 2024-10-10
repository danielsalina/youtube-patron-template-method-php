<?php

// Esta clase sobrescribe el método processPayment para manejar pagos mediante PayPal.

namespace Payment;

class PayPalOrderProcessor extends AbstractOrderProcessor
{
    protected function processPayment(): void
    {
        echo "Procesando el pago con PayPal...\n";
        // Aquí iría la lógica específica para PayPal
    }
}
