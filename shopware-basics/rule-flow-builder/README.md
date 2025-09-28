# Rule & Flow Builder Skeleton

## Was ist das?
Dieses Skeleton skizziert, wie eine Preisregel im Rule Builder vorbereitet wird und wie ein Flow Builder Flow für eine Bestellbestätigung mit zusätzlichem Header strukturiert sein kann. Es dient als Startpunkt für Teams, die Regeln und Flows versionierbar verwalten möchten.

## Typische Anwendungsfälle
- Rabatt- oder Versandregeln basierend auf Custom Fields.
- Flow-gesteuerte E-Mail-Anreicherungen nach Bestellungen.
- Automatisierte interne Benachrichtigungen bei speziellen Warenkörben.
- Export- oder Tagging-Flows zur Weiterverarbeitung.

## Kurzes How-to
1. Rule Builder Export in `src/Resources/flow/rules/` ablegen (JSON/YAML, Platzhalter in README kommentiert).
2. Flow Builder Definition in `src/Resources/flow/flows/` importierbar vorbereiten.
3. Projektinterne IDs und Bedingungen in `src/Docs/examples.md` dokumentieren.
4. Plugin/Bundle deployen und im Admin unter Rule Builder bzw. Flow Builder importieren.
5. Aktivieren, Testbestellung durchführen und Logging prüfen.
6. Cache leeren (`bin/console cache:clear`) und Regel-/Flow-Status überwachen.

## Wann einsetzen / Wann nicht
**Wann einsetzen:** Bei konfigurativen Prozessen, die Shopware-nativ mit Rules und Flows abbildbar sind, z. B. Marketing-Automationen.
**Wann nicht:** Bei hochkomplexen Workflows mit externen Systemen oder umfangreicher Programmierung – hier eigene Services und Queue-Verarbeitung bevorzugen.

## Wo erweitern?
- `src/Resources/flow/rules/` – Export-Dateien für Rule Builder.
- `src/Resources/flow/flows/` – Flow-Definitionen mit Sequenzen.
- `src/Docs/examples.md` – Dokumentation von Variablen, Bedingungen und Screenshots.

## Weiterführend
- Suchbegriff: "RuleConditions" im Core.
- Flow Actions: `SendMailAction` und `LogAction` als Referenz.
- Events: `OrderPlacedEvent` für Flow Trigger.

## Hinweise für Produktion
- Regeln und Flows versionieren, IDs und Namespaces konsistent halten.
- Automatisierte Tests für regelbasierte Preise durchrechnen.
- Observability: Flow-Logs im Admin prüfen und ggf. an Monitoring anbinden.
