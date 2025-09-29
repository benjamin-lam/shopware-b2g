# Budgets, Kostenstellen & elektronische Rechnungen

## Kundenanforderung

Jede Bestellung einer Behörde muss einer Kostenstelle zugeordnet und gegen das verfügbare Budget geprüft werden【38†L66-L75】.  Die Plattform soll automatisch verhindern, dass Budgets überzogen werden, und elektronische Rechnungen im vorgeschriebenen Format (XRechnung oder ZUGFeRD) erzeugen【38†L76-L83】.

## Warum ist das so?

Behörden unterliegen strikter Haushaltsführung.  Budgets sind auf Kostenstellen verteilt, und Ausgaben dürfen nur innerhalb dieser Limits erfolgen【38†L66-L75】.  Seit 2020 akzeptieren viele Behörden nur noch E-Rechnungen (XRechnung)【38†L76-L83】, weil sie strukturierte Daten für automatisierte Verarbeitung bieten und gesetzlich vorgeschrieben sind.  Eine korrekte Leitweg-ID, Validierung gegen Schematron-Regeln und Archivierung der Rechnungen sind notwendig【38†L76-L83】.

## Anforderungen & Besonderheiten (B2G)

1. **Kostenstellenverwaltung:** Organisationseinheiten können beliebig viele Kostenstellen mit Budgets anlegen.  Budgets werden jährlich oder quartalsweise zugewiesen und müssen verwaltet werden.
2. **Budgetprüfung:** Bei jeder Bestellung wird das Budget der gewählten Kostenstelle reserviert und geprüft.  Überschreitungen blockieren den Checkout oder lösen Genehmigungen aus【38†L66-L75】.
3. **Budgetrückbuchung:** Stornos oder Retoursen buchen freigegebene Beträge zurück.
4. **Budgetreporting:** Benutzer sehen den aktuellen Verbrauch und das Restbudget pro Kostenstelle.  Daten können exportiert werden.
5. **Elektronische Rechnungen:** Generierung von XRechnung (XML nach EN 16931) und optional ZUGFeRD/Factur-X (PDF mit eingebettetem XML).  Leitweg-ID, Bestellreferenzen und Pflichtfelder müssen enthalten sein; Validierung vor Versand【38†L76-L83】.
6. **Archivierung & Aufbewahrung:** Rechnungen sind mindestens zehn Jahre revisionssicher zu speichern【38†L76-L83】.

## Umsetzung – Technische Leitplanken

- **Cost Center Entity:** Definieren Sie eine `b2g_cost_center`-Tabelle mit Budget, Zeitraum und Organisationseinheit.  Verknüpfen Sie Bestellungen über ein Foreign-Key-Feld `cost_center_id`.
- **Budgetservice:** Implementieren Sie einen Service, der beim Hinzufügen eines Artikels zum Warenkorb das Budget reserviert, bei Bestellung abbucht und bei Storno zurückbucht.  Bei Budgetüberschreitungen wird der Bestellstatus auf „pending approval“ gesetzt und ein Approval-Request erstellt.
- **Reporting:** Entwickeln Sie ein Admin-Modul, das Budgets visualisiert (Restbudget, Verbräuche, Prognosen).  Exportfunktionen (CSV) ermöglichen den Abgleich mit ERP.
- **XRechnung Generator:** Erstellen Sie eine Bibliothek zur Generierung von XRechnungen: XML mit Leitweg-ID, USt-ID, Summen und Positionen.  Integrieren Sie Schematron-Validierung (z. B. mittels KoSIT-Regeln).  Optional ZUGFeRD-Generator (PDF + XML).  Bei Fehlern vor Versand loggen und Bestellstatus nicht weiter verarbeiten.
- **Versand & Archivierung:** Bieten Sie mehrere Versandoptionen: Download, E-Mail, Upload an behördliche Rechnungseingangsportale oder PEPPOL/AS4.  Archivieren Sie Rechnungsdateien revisionssicher (DMS oder Object-Storage).

## Checkliste

- [ ] Kostenstellen können angelegt und Budgets verwaltet werden.
- [ ] Budgetprüfung erfolgt automatisch bei jeder Bestellung und löst ggf. Freigaben aus.
- [ ] Budgetrückbuchungen bei Stornos funktionieren.
- [ ] Reporting und Exportfunktionen für Budgets sind verfügbar.
- [ ] XRechnungen/ZUGFeRD werden korrekt erzeugt, validiert und versendet.
- [ ] Rechnungen werden revisionssicher archiviert (mindestens 10 Jahre).
- [ ] `@todo` vermerkt offene Punkte (z. B. Import von Budgetdaten aus ERP).

## Abhängigkeiten/Überschneidungen

Die Budgetprüfung beeinflusst den Genehmigungsworkflow (siehe **Workflows & Rollen**).  Die Rechnungsstellung ist mit dem Integrationslayer verknüpft, wenn das ERP die Rechnungen erzeugt.  Archivierung hängt vom Compliance-Modul ab.

## Akzeptanzkriterien

1. Bestellungen können nur abgeschlossen werden, wenn das Budget ausreicht oder genehmigt wurde.
2. Ein vollständiger E-Rechnungsworkflow (Erstellung → Validierung → Versand → Archivierung) ist implementiert.
3. Budgets und Kostenstellen können im Admin verwaltet, importiert und exportiert werden.
4. Alle Komponenten sind getestet (Schematron-Validierung, Budgetrückbuchung, Reporting).

## Offene Fragen

- Wie werden Budgets importiert (manuell, Schnittstelle zum ERP)?
- Welche Felder müssen in der XRechnung enthalten sein und wie wird die Validierung automatisiert?
- Welche Aufbewahrungspflichten gelten je nach Bundesland?

## Quellen

Siehe Quellen [6], [7], [13] im Quellenverzeichnis.
