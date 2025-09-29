# Beispiel – Genehmigungsworkflow

## Warum Plugin?

Ein Genehmigungsworkflow erfordert serverseitige Datenmodelle (Approval Request), Statusübergänge und komplexe Logik (Eskalationen, Mandate).  Shopware-Apps eignen sich für entkoppelte Dienste, können aber nicht in den internen Status einer Bestellung eingreifen.  Daher wird hier ein Shopware-**Plugin** verwendet, das über das DAL Entities erstellt, Events abonniert und Admin-Module bereitstellt.

## Mini-How-To: Plugin erstellen

1. Führe den Befehl aus: `bin/console plugin:create B2gApprovalWorkflow --create-config` im Shopware-Verzeichnis.  Es wird ein Plugin-Gerüst in `custom/plugins/B2gApprovalWorkflow` angelegt.
2. Implementiere die Basis-Klasse `B2gApprovalWorkflow\B2gApprovalWorkflow.php`, die von `Plugin` erbt.  Registriere Event-Subscriber in der `activate()`-Methode.
3. Lege in `src/Migration` Migrations an (z. B. `Migration1680000000CreateApprovalRequest.php`), um die Entity `b2g_approval_request` zu erzeugen.  Registriere die Entity in `src/CustomEntity/ApprovalRequestDefinition.php`.
4. Erstelle einen Subscriber (z. B. `ApprovalSubscriber.php`), der auf `CheckoutOrderPlacedEvent` reagiert, eine Approval Request erstellt und den Order-Status ändert.
5. Implementiere ein Admin-Modul in `src/Resources/app/administration` (Vue.js), um offene Genehmigungen anzuzeigen und zu bearbeiten.  Nutze die Shopware Admin UI-Komponenten.
6. Aktualisiere das Frontend-Theme über eine Twig-Erweiterung (`src/Resources/views`), um den Genehmigungsstatus im Kundenkonto anzuzeigen.
7. Installiere und aktiviere das Plugin: `bin/console plugin:refresh` gefolgt von `bin/console plugin:install --activate B2gApprovalWorkflow`.

Weiterführende Informationen zur Plugin-Entwicklung findest du in der offiziellen Shopware-Dokumentation („Plugin Base Guide“).

## Struktur (Ausschnitt)
```
custom/plugins/B2gApprovalWorkflow/
 ├── src/
 │   ├── B2gApprovalWorkflow.php
 │   ├── Migration/
 │   │   └── Migration1680000000CreateApprovalRequest.php
 │   ├── CustomEntity/
 │   │   └── ApprovalRequestDefinition.php
 │   ├── Subscriber/
 │   │   └── ApprovalSubscriber.php
 │   └── Resources/
 │       ├── app/administration/
 │       └── views/
 └── composer.json
```

## Verknüpfte Dokumente

Dieses Beispiel implementiert die Anforderungen aus [docs/b2g-requirements/workflows_roles.md](../../docs/b2g-requirements/workflows_roles.md) (Genehmigungs-Workflows) und nutzt die Leitplanken aus [docs/shopware-basics/overview.md](../../docs/shopware-basics/overview.md).  Offene Punkte (`@todo`), wie mehrstufige Eskalationen, sind im Code markiert.
