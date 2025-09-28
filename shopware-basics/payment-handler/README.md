# Payment Handler Skeleton

## Was ist das?
Dieses Skeleton liefert einen asynchronen Payment Handler für Shopware. Er zeigt die notwendigen Methoden und Konfigurationsdateien, um Zahlungsanbieter anzubinden.

## Typische Anwendungsfälle
- Anbindung eines externen Zahlungsdienstleisters mit Redirect-Flow.
- Verarbeitung von Capture/Refund über asynchrone Workflows.
- Logging und Statusverwaltung für Zahlungen.
- Erweiterung bestehender Payment-Integrationen.

## Kurzes How-to
1. Handler in `src/Payment/AcmePaymentHandler.php` implementieren (pay/finalize/capture/refund).
2. Payment-Method Definition in `src/Resources/config/payment-method.xml` anpassen.
3. Service in `src/Resources/config/services.xml` registrieren.
4. Plugin installieren, Payment-Methode aktivieren (`bin/console payment:method:activate`).
5. Zahlungsanbieter konfigurieren (API-Keys, Redirect-URLs).
6. Testbestellungen durchführen und Logs überwachen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Wenn ein eigener oder externer Zahlungsdienstleister eingebunden werden muss.
**Wann nicht:** Bei Nutzung bereits existierender Zahlungsplugins oder wenn kein Redirect/Asynchronität benötigt wird.

## Wo erweitern?
- `AcmePaymentHandler.php` – Implementierung der Zahlungslogik.
- `payment-method.xml` – Definition der Payment-Methode.
- `services.xml` – Handler-Registrierung und Abhängigkeiten.

## Weiterführend
- Begriffe: `AsynchronousPaymentHandlerInterface`, `PaymentTransactionStruct`.
- Suche nach `AsyncPaymentTransactionStateHandler` im Core.
- Themen: Capture, Refund, Webhook-Rückmeldungen.

## Hinweise für Produktion
- API-Keys sicher speichern und Secrets rotieren.
- Error-Handling und Retry-Strategien implementieren.
- Tests für Zahlungsabläufe (Unit/Integration) erstellen.
