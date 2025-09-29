# Analyse der Example-README-Dateien

## Übersicht
Die folgenden Abschnitte fassen die Inhalte der drei Markdown-Dateien im Ordner `examples` zusammen und bewerten, welche Art von Shopware-Erweiterung (Plugin oder App) empfohlen wird.

## `examples/approval-workflow/README.md`
- **Zielsetzung:** Abbildung eines mehrstufigen Genehmigungsworkflows für Bestellungen inklusive Eskalationen und Darstellung im Admin- sowie Storefront-Bereich.
- **Empfohlener Ansatz:** Shopware **Plugin**, da Datenmodelle, Statusänderungen und Admin-Module serverseitig implementiert werden müssen.
- **Technische Kernelemente:**
  - Eigene DAL-Entitäten (`ApprovalRequest`).
  - Event-Subscriber (z. B. `CheckoutOrderPlacedEvent`).
  - Administration-Module (Vue.js) und Twig-Erweiterungen.
  - Datenbank-Migrationen für neue Tabellen.
- **Komplexität:** Hoch, da Backend- und Frontend-Anpassungen nötig sind. Eine solide Grundlage für ein Beispiel-Plugin ist vorhanden.

## `examples/cost-centers/README.md`
- **Zielsetzung:** Verwaltung von Kostenstellen und Budgets mit Integration in Checkout und Reporting.
- **Empfohlener Ansatz:** Shopware **Plugin**, weil tiefgreifende Eingriffe in Checkout, Datenhaltung und Konfiguration verlangt werden.
- **Technische Kernelemente:**
  - Mehrere Custom Entities (`CostCenter`, `BudgetTransaction`).
  - Subscriber zur Budgetprüfung beim Checkout.
  - Admin-Modul für Pflege und Reporting, inklusive CSV-Import/-Export.
  - Systemkonfiguration für Schwellenwerte.
- **Komplexität:** Ebenfalls hoch; Fokus auf betriebswirtschaftliche Regeln und Datenfluss.

## `examples/customer-sso/README.md`
- **Zielsetzung:** Anbindung eines externen Identity Providers via SAML oder OpenID Connect.
- **Empfohlener Ansatz:** Shopware **App**, da die Logik in einem externen Service liegt und nur über APIs mit Shopware kommuniziert.
- **Technische Kernelemente:**
  - `manifest.xml` mit Berechtigungen und Webhooks.
  - Externer Service zur Token-Validierung und User-Provisionierung.
  - Admin-Konfigurationsoberfläche innerhalb der App.
- **Komplexität:** Mittel bis hoch, da externe Infrastruktur notwendig ist; weniger Eingriff in Shopware-Kern als bei Plugins.

## Schlussfolgerung
Aus den Dokumenten lassen sich zwei Plugin-Szenarien (Genehmigungsworkflow, Kostenstellen) und eine App-Idee (SSO) ableiten. Für die weitere Ausarbeitung wird in diesem Repository ein **Beispiel-Plugin für den Genehmigungsworkflow** erstellt, weil die Dokumentation bereits eine klare Struktur vorgibt und ein durchgängiges Beispiel für serverseitige Erweiterungen liefert.
