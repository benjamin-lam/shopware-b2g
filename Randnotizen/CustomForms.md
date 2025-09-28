# Custom Forms – Dynamische Formulare & Fachverfahren

## Kundenanforderung
Individuelle Formulare im Frontend (Anträge, Bedarfsanforderungen, Zusatzdaten) mit Validierung, Ablage/Export und **Anbindung an Fachverfahren** (DMS, eVergabe, Tickets, interne APIs). [16]

## Warum ist das so?
Das **OZG** treibt die Digitalisierung von Verwaltungsleistungen. Formulare vermeiden Medienbrüche, sichern Datenqualität und beschleunigen Prozesse – intern wie extern. [16]

## Umsetzung
- **Form-Builder/Schema-Driven:** Felder, Regeln, Pflichtangaben, Anhänge; Barrierefreiheit beachten (Labels, Fehler, `aria-live`).  
- **Validierung:** Client- und serverseitig; klare Fehlerrückmeldungen; Datentypen/Masken.  
- **Datenwege:** JSON/XML-Exports, direkte Schnittstellen (REST/SOAP), sichere Übertragung (VPN/HTTPS).  
- **Datenschutz:** Zweckbindung, Speicherdauer, Lösch-/Anonymisierung nach Übergabe; Verschlüsselung.  
- **Betrieb:** Versionsstände, Änderungsprotokolle, Redaktionszugriffe.

## Checkliste
- [x] Formularmodelle & Pflichtfelder definiert  
- [x] A11y-gerechte UI & Fehlermeldungen  
- [x] Export/Integration in Fachverfahren  
- [x] Datenschutz-Hinweise pro Formular  
- [x] Monitoring der Übermittlungen + Retry

## Abhängigkeiten/Überschneidungen
- **Accessibility:** A11y-Regeln aus Accessibility_Barrierefreiheit.  
- **ERP/eVergabe/DMS:** Zielsystem-Schnittstellen & Mappings.

## Quellen
[16]
