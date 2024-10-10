<?php

// Esta clase define el método de plantilla que organiza el flujo del proceso de un pedido. Los pasos específicos de validación y procesamiento se delegan a las subclases.

namespace Payment;

abstract class AbstractOrderProcessor
{
    // Método de plantilla que define los pasos generales del proceso
    public function processOrder(): void
    {
        $this->validateOrder();
        $this->processPayment();
        $this->generateInvoice();
        $this->sendConfirmation();
    }

    // Método abstracto que las subclases deben implementar
    abstract protected function processPayment(): void;

    // Pasos comunes para todas las subclases
    protected function validateOrder(): void
    {
        echo "Validando el pedido...\n";
    }

    protected function generateInvoice(): void
    {
        echo "Generando la factura...\n";
    }

    protected function sendConfirmation(): void
    {
        echo "Enviando confirmación de pedido...\n";
    }
}
