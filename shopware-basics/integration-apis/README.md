# Integration APIs Skeleton

## Was ist das?
Dieses Skeleton beschreibt die Nutzung der Admin API sowie das Empfangen von Webhooks in Shopware. Es bietet einen Controller-Stub und Dokumentation zu Authentifizierung und Idempotenz.

## Typische Anwendungsfälle
- Synchronisation externer Systeme via Admin API.
- Empfang von Webhooks für Order/Customer Events.
- Aufbau eigener Endpunkte zur Eventweiterleitung.
- Verwaltung von API-Zugängen und Tokens.

## Kurzes How-to
1. Controller in `src/Controller/WebhookController.php` anpassen (HMAC-Validierung, Business-Logik).
2. Route in `src/Resources/config/routes.xml` registrieren.
3. Service-Definitionen in `src/Resources/config/services.xml` ergänzen.
4. Admin API Credentials anlegen (`bin/console user:create` mit API-Rolle) und dokumentieren.
5. Webhook-Absender konfigurieren (URLs, Secrets).
6. Tests durchführen und Monitoring aufsetzen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Für Integrationen mit externen Systemen, die Admin API benötigen oder Webhooks empfangen.
**Wann nicht:** Für Storefront-only Datenzugriffe – dort Store-API verwenden.

## Wo erweitern?
- `WebhookController.php` – Business-Logik und Sicherheitsprüfungen.
- `routes.xml` – Eigene Endpunkte.
- `services.xml` – Zusätzliche Services/Handler.

## Weiterführend
- Begriffe: Admin API, Integration, Webhook Event.
- Suche nach `WebhookDispatcher` im Core.
- Themen: Idempotenz, Retry-Strategien, OAuth.

## Hinweise für Produktion
- Secrets sicher speichern und regelmäßig rotieren.
- Request-Logging (z. B. Monolog Channel) aktivieren.
- Rate Limits und Error Handling dokumentieren.
