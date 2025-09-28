<?php

declare(strict_types=1);

namespace Acme\SwBasics\PaymentHandler\Payment;

use Shopware\Core\Checkout\Payment\Cart\PaymentHandler\AsynchronousPaymentHandlerInterface;
use Shopware\Core\Checkout\Payment\Cart\PaymentTransactionStruct;
use Shopware\Core\Framework\Context;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Asynchroner Payment Handler mit Platzhaltern für Redirect/Capture/Refund.
 */
class AcmePaymentHandler implements AsynchronousPaymentHandlerInterface
{
    public function pay(Request $request, PaymentTransactionStruct $transaction, Context $context): RedirectResponse
    {
        // TODO: Redirect-URL des PSP generieren.
        return new RedirectResponse('https://payment.example/redirect');
    }

    public function finalize(Request $request, PaymentTransactionStruct $transaction, Context $context): void
    {
        // TODO: PSP-Rückgabe auswerten und Status setzen.
    }

    public function capture(Context $context, PaymentTransactionStruct $transaction, ?Request $request = null): void
    {
        // TODO: Capture API des PSP aufrufen.
    }

    public function refund(Context $context, PaymentTransactionStruct $transaction, ?Request $request = null): void
    {
        // TODO: Refund API des PSP aufrufen.
    }
}
