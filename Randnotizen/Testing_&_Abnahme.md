# Testing & Abnahme

## Ziel
Sicherstellen, dass alle B2G-spezifischen Funktionen (z. B. Punchout, XRechnung, Approval-Workflow, Barrierefreiheit) korrekt, normkonform und revisionssicher umgesetzt sind.

## Anforderungen
- **End-to-End-Tests:** Von Login über Bestellung, Freigabe, Schnittstellen-Sync bis zur Rechnungsstellung. [18]
- **Schnittstellentests:** Validierung von OCI/cXML-Requests, PEPPOL/UBL-Dokumenten, ERP-Sync (Import/Export). [15][16][24]
- **XRechnung/EN16931-Validierung:** Schematron-Tests, KoSIT-Testportal. [8][22]
- **Barrierefreiheitstests:** Kombination aus Tooling (axe, Lighthouse) und manuellen Screenreader-Checks. [3][7]
- **Abnahmeprotokolle:** Dokumentation der Testfälle und Ergebnisse für Revision/Prüfung.

## Prozesse
- **Automatisiert:** CI/CD-Pipelines für Regressionstests.  
- **Manuell:** Fachliche Abnahmetests (User Acceptance Testing) mit Dokumentationspflicht.  
- **Prüfobjekte:** Neben Funktionalität auch Performance, Sicherheit und A11y.  
- **Nachweise:** Testprotokolle revisionssicher archivieren.

## Checkliste
- [x] Testplan erstellt  
- [x] Automatisierte Tests (CI/CD) eingerichtet  
- [x] Fachliche Abnahme dokumentiert  
- [x] Schnittstellen-Endpunkte mit Partnern getestet
- [x] Validierung XRechnung erfolgreich
- [x] A11y-Tests (WCAG/BITV) durchgeführt

> @todo (PO): Akzeptanzkriterien für Abnahmen (z. B. minimaler Testumfang, Nachweisformate) definieren.
> @todo (PO): Abhängigkeiten zu Change/Betrieb/Monitoring dokumentieren.

## Quellen
[3][7][8][15][16][18][22][24]
