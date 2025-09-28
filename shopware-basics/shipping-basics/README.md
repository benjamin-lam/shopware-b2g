# Versand Basics Skeleton

## Was ist das?
Dieses Skeleton bietet Dokumentation und einen Service-Stub rund um Versandarten in Shopware. Es zeigt, wie Regeln und Hinweise eingebunden werden können.

## Typische Anwendungsfälle
- Versandarten über Rule Builder differenzieren.
- Zusätzliche Hinweise für Kunden generieren.
- Versandlogik in Services kapseln.
- Integration externer Versanddienstleister vorbereiten.

## Kurzes How-to
1. Versandarten im Admin konfigurieren (Einstellungen → Versand). Regeln und Preise dort pflegen.
2. `src/Service/ShippingCostNoteService.php` nutzen, um Hinweise dynamisch zu erzeugen.
3. Rule-Builder-Regeln dokumentieren (z. B. Gewicht, Custom Fields).
4. Service per Dependency Injection einbinden und in Storefront oder API nutzen.
5. Cache leeren (`bin/console cache:clear`) nach Anpassungen.
6. Versandkostenberechnungen testen (verschiedene Warenkörbe).

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Wenn Versandkonfigurationen dokumentiert und leicht erweitert werden sollen.
**Wann nicht:** Für komplexe, eigene Versandberechnungen – dort dedizierte Calculator-Services implementieren.

## Wo erweitern?
- `ShippingCostNoteService.php` – Logik für Hinweise oder Aufpreise.
- `OVERVIEW.md` – Dokumentation von Regeln und Szenarien.
- `README.md` – Ergänzende Prozesse (z. B. Zoll).

## Weiterführend
- Begriffe: Versandart, Rule Builder, Delivery Time.
- Suche im Core nach `ShippingMethodEntity`.
- Themen: Rule-Matching, Checkout Validatoren.

## Hinweise für Produktion
- Versandkosten regelmäßig prüfen (Preisänderungen, Carrier-Updates).
- Monitoring für Fehlerraten beim Checkout.
- Tests für Regelkombinationen (z. B. via Behat/Cypress) einplanen.
