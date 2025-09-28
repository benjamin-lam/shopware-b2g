# Headless Store-API Skeleton

## Was ist das?
Dieses Skeleton beschreibt die grundlegende Nutzung der Shopware Store-API in Headless-Szenarien. Es stellt dokumentierte Beispiel-Requests bereit und gibt Hinweise zu Authentifizierung, SEO und Performance.

## Typische Anwendungsfälle
- Headless-Frontend (Nuxt/Next) mit Store-API Backend.
- Mobile Apps, die Warenkörbe und Checkout über APIs abwickeln.
- Server-Side-Rendering-Layer für SEO-freundliche Auslieferung.
- Integrationen mit CMS-Systemen, die Shopware-Daten anzeigen.

## Kurzes How-to
1. Zugriffstoken über `POST /store-api/oauth/token` beschaffen und in `examples/requests.http` eintragen.
2. Produkt-Listing und Detail-Requests anpassen.
3. Warenkorb-Workflow (create, add, checkout) anhand der Samples nachvollziehen.
4. Backend-Ratenlimits und Caching planen.
5. In der Headless-App die Endpunkte anbinden und Fehler-Handling ergänzen.
6. Deployment: API-URLs als Environment-Variablen konfigurieren.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Wenn ein separates Frontend oder Device die Shop-Daten konsumiert und keine klassische Twig-Storefront benötigt wird.
**Wann nicht:** Bei reinem Storefront-Projekt; dort CMS/Theme verwenden. Ebenso ungeeignet für reine Admin-Integrationen (Admin API nutzen).

## Wo erweitern?
- `examples/requests.http` – konkrete Request-Beispiele, Tokens und Payloads.
- `OVERVIEW.md` – Zusatzhinweise zu Auth, Cache, SEO.
- `README.md` – Dokumentation der Architekturentscheidungen.

## Weiterführend
- Begriffe: Store API, Sales Channel Context, Context Token.
- Suche im Core nach `StoreApiRoute` für Erweiterungen.
- Themen: Rate Limiting, SEO URL Endpoint, Webhook für Bestellungen.

## Hinweise für Produktion
- Token-Rotation und Refresh-Strategien planen.
- Monitoring: API-Latenzen und Fehler (HTTP 429/500) loggen.
- Tests: Contract-Tests mit Frontend und API durchführen.
