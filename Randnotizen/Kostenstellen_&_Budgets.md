# Kostenstellen & Budgets – Steuerung & Compliance

## Kundenanforderung
Zuordnung von Bestellungen zu **Kostenstellen** (Pflicht) mit **Budgetprüfung** und Reporting; ERP-Abgleich von Kostenstellen/Budgets. [10]

## Umsetzung
- **Datenmodell:** Entity Kostenstelle (Mandant/Org, Verantwortliche, Budgetzyklen); Relation zu User/Organisation.  
- **Checkout:** Pflichtauswahl; Validierung gegen Restbudget; Verhalten bei Überschreitung (Block/Warnung → Approval).  
- **Buchung:** Budgetabzug bei Freigabe; Rückgabe bei Storno; Periodenwechsel.  
- **ERP-Sync:** Import Stammdaten/Budgets; Export Order-Kennzeichen.  
- **UI/Reporting:** Verbrauch je Periode/Kostenstelle; Exporte.

## Checkliste
- [x] Import/Mapping + Admin-UI  
- [x] Pflichtauswahl & Validierung  
- [x] Abzugslogik & Storno-Gutschrift
- [x] Reports/Exporte
- [x] ERP-Roundtrip getestet

## Abhängigkeiten/Überschneidungen
- **Approval:** Überschreitung → Freigabestufe.
- **Rollen:** Wer darf Budgets pflegen/sehen?

> @todo (PO): Akzeptanzkriterien für Budgetprüfungen (Fehlerfälle, Schwellenwerte, Reporting) festlegen.

## Quellen
[10]
