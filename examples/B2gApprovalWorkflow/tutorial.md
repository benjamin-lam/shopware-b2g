# Tutorial: Proof-of-Concept Plugin "B2gApprovalWorkflow"

Dieses Tutorial beschreibt Schritt für Schritt, wie das Beispiel-Plugin aus diesem Repository aufgebaut ist und wie du es in einer Shopware-6-Installation ausprobieren kannst. Es basiert auf den Anforderungen aus `examples/approval-workflow/README.md`.

## Voraussetzungen
- Laufende Shopware-6-Instanz (Version ≥ 6.5).
- Shell-Zugriff auf den Server bzw. das lokale Projekt.
- PHP 8.1 oder höher, Composer und die Shopware-CLI (`bin/console`).

## 1. Repository-Struktur verstehen
Im Ordner `examples/B2gApprovalWorkflow` findest du das Plugin-Gerüst:

```
examples/B2gApprovalWorkflow/
├── composer.json
└── src/
    ├── B2gApprovalWorkflow.php
    ├── CustomEntity/
    │   ├── ApprovalRequestCollection.php
    │   ├── ApprovalRequestDefinition.php
    │   └── ApprovalRequestEntity.php
    ├── Migration/
    │   └── Migration1700000000CreateApprovalRequest.php
    ├── Resources/
    │   └── config/services.xml
    └── Subscriber/
        └── ApprovalSubscriber.php
```

Die Dateien sind so benannt, dass sie Shopware-Konventionen entsprechen. Kommentare und `@todo`-Markierungen zeigen offene Punkte.

## 2. Plugin in Shopware einbinden
1. Kopiere den Ordner `examples/B2gApprovalWorkflow` in deine Shopware-Installation, z. B. nach `custom/plugins/B2gApprovalWorkflow`.
2. Führe anschließend folgende Befehle aus:
   ```bash
   bin/console plugin:refresh
   bin/console plugin:install --activate B2gApprovalWorkflow
   bin/console cache:clear
   ```
3. Prüfe im Admin-Bereich, ob das Plugin aktiviert ist.

## 3. Datenbankmigration anwenden
Bei der Installation werden die Migrationen automatisch ausgeführt. Zur Kontrolle kannst du `bin/console database:migrate --all` starten. Die Migration `Migration1700000000CreateApprovalRequest` legt die Tabelle `b2g_approval_request` an.

## 4. Custom Entity verstehen
- `ApprovalRequestDefinition` definiert Felder wie `status`, `requested_by_id` und `payload`.
- `ApprovalRequestEntity` und `ApprovalRequestCollection` liefern PHP-Klassen zur typsicheren Arbeit mit den Daten.
- Erweiterungsideen:
  - Relationen zu Rollen oder Kostenstellen ergänzen.
  - State Machine Definition für mehrstufige Freigaben hinzufügen.

## 5. Event-Subscriber ausprobieren
Der `ApprovalSubscriber` reagiert auf `CheckoutOrderPlacedEvent` und legt bei Bestellungen über 500 € einen Datensatz an. Das Limit ist nur eine Platzhalterlogik (`@todo`).

Zum Testen:
1. Lege im Admin eine Test-Kundenbestellung über mehr als 500 € an oder erhöhe das Limit im Code.
2. Nach dem Checkout findest du in der Tabelle `b2g_approval_request` einen neuen Eintrag.
3. Ergänze eigene Business-Regeln, z. B. Prüfung auf Kostenstellen-Budget.

## 6. Services registrieren
`services.xml` bindet die Custom Entity und den Subscriber in den Symfony-Container ein. Bei Bedarf kannst du weitere Services (z. B. Benachrichtigungen, Eskalationsjobs) hinzufügen.

## 7. Weiterführende Schritte (`@todo`)
- Admin-Modul (Vue.js) zur Bearbeitung offener Genehmigungen.
- Storefront-Anpassung zur Anzeige des Genehmigungsstatus.
- Eskalationsmechanismen (z. B. zeitgesteuerte Erinnerungen).
- Integration mit Kostenstellen/Budget-Plugin für End-to-End-Freigaben.

## Fazit
Das Plugin-Gerüst stellt die Kernbausteine für einen Genehmigungsworkflow bereit und kann als Ausgangspunkt für eine vollwertige B2B-Funktion dienen. Nutze die Kommentare im Code, um die nächsten Implementierungsschritte zu planen.
