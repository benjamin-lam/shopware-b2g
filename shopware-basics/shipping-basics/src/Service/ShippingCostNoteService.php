<?php

declare(strict_types=1);

namespace Acme\SwBasics\ShippingBasics\Service;

use Shopware\Core\Checkout\Cart\Cart;
use Shopware\Core\Framework\Context;

/**
 * Liefert Zusatzhinweise zu Versandarten (z. B. basierend auf Rules oder Gewichten).
 */
class ShippingCostNoteService
{
    public function buildNote(Cart $cart, Context $context): string
    {
        // TODO: Versandart-Informationen ermitteln und Hinweis generieren.
        return 'Versandhinweis Platzhalter';
    }
}
