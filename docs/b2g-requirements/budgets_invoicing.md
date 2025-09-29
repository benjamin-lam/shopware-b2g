# Budgets, Kostenstellen & elektronische Rechnungen

Behörden verwalten Budgets strikt nach Kostenstellen.  Jeder Einkauf muss einer Kostenstelle zugeordnet und gegen das verbleibende Budget geprüft werden.  Gleichzeitig ist die elektronische Rechnungsstellung nach XRechnung/ZUGFeRD gesetzlich vorgeschrieben:

- **Budgetverwaltung:** Bei der Anlage eines Warenkorbs wird eine Kostenstelle ausgewählt.  Das System reserviert den Betrag und prüft gegen das Budget.  Überschreitungen lösen entweder Blockaden oder einen Genehmigungsworkflow aus.  Budgetverbräuche werden zurückgebucht, wenn Bestellungen storniert oder Positionen reduziert werden.  Ein Reporting zeigt Verbrauch und Restbudgets je Kostenstelle.
- **Elektronische Rechnung (XRechnung/ZUGFeRD):** Öffentliche Auftraggeber akzeptieren nur strukturierte e-Rechnungen.  XRechnung basiert auf EN 16931 und wird als XML übertragen; ZUGFeRD/Factur-X kombiniert PDF und eingebettetes XML.  Rechnungen müssen Leitweg-ID, Referenznummern und alle Pflichtfelder enthalten.  Vor dem Versand ist eine Validierung gegen Schematron-Regeln (z. B. KoSIT) durchzuführen.  Rechnungen sind mindestens zehn Jahre aufzubewahren.

**Umsetzung in Shopware:**

Budgets und Kostenstellen können als Custom-Entities modelliert werden.  Ein Plugin erweitert den Checkout um die Auswahl der Kostenstelle und prüft den verfügbaren Betrag.  Für die Rechnungsstellung müssen Generatoren für XRechnung/ZUGFeRD implementiert oder externe Bibliotheken eingebunden werden.  Validierung und Versand über PEPPOL oder Upload-Portale sollten konfigurierbar sein.

**Offene Fragen / Akzeptanzkriterien:**

- Wie werden Budgets importiert (manuell, Schnittstelle zum ERP)?
- Welche Felder müssen in der XRechnung enthalten sein und wie wird die Validierung automatisiert?
- Welche Aufbewahrungspflichten gelten je nach Bundesland?
