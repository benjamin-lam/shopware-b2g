# Beispiel – Kostenstellen & Budgets

## Warum Plugin?

Die Verwaltung von Kostenstellen und Budgets erfordert neue Datenmodelle, Admin-Oberflächen und Änderungen am Checkout-Prozess (Budgetprüfung).  Eine Shopware-App könnte Budgetdaten extern verwalten, aber für eine nahtlose Integration in Checkout, Warenkorb und Reporting ist ein internes **Plugin** notwendig.

## Mini-How-To: Plugin erstellen

1. Erzeuge mit `bin/console plugin:create B2gCostCenter` ein Plugin-Gerüst.  
2. Lege die Entitäten `b2g_cost_center` und `b2g_budget_transaction` in `src/CustomEntity` an und erstelle Migrations.
3. Erweitere den Checkout-Controller über einen Subscriber, der die Budgetprüfung durchführt, den Bestellstatus setzt und ggf. einen Approval-Request erzeugt.
4. Implementiere ein Admin-Modul, um Kostenstellen anzulegen, Budgets zu definieren und Buchungen zu sehen.  Ermögliche CSV-Import/Export.
5. Nutze System Config, um Budgetperioden und Schwellenwerte zu konfigurieren.

## Struktur (Ausschnitt)
```
custom/plugins/B2gCostCenter/
 ├── src/
 │   ├── B2gCostCenter.php
 │   ├── Migration/
 │   ├── CustomEntity/
 │   ├── Subscriber/
 │   ├── Service/
 │   └── Resources/
 └── composer.json
```

## Verknüpfte Dokumente

Das Plugin setzt die Anforderungen aus [docs/b2g-requirements/budgets_invoicing.md](../../docs/b2g-requirements/budgets_invoicing.md) um.  Leitlinien zum Shopware-DAL und Plugin-Struktur finden sich in [docs/shopware-basics/overview.md](../../docs/shopware-basics/overview.md).
