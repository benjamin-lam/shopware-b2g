# Invoicing & XRechnung (optional ZUGFeRD/Factur-X)

## Kundenanforderung
Erzeugung **valider XRechnung (EN 16931)** inkl. **Leitweg-ID** sowie Versand über **PEPPOL/Portale** oder E-Mail; **Archivierung** (XML/PDF) und **Korrekturen** (Credit Notes). Optional ZUGFeRD/Factur-X. [8][22][17]

## Besonderheiten (B2G)
- **Pflichtangaben:** Leitweg-ID, Bestellkennzeichen/Referenzen; Validierung vor Versand (Schematron/KoSIT). [8][22]  
- **Übertragungswege:** PEPPOL/Access Point, Portal-Uploads, E-Mail – projektspezifisch festlegen. [8]  
- **Archiv/GoBD:** 10 Jahre Aufbewahrung; Download/Export für Prüfung. [8]  
- **Shopware OOTB:** Kein XRechnung-Support; Felder/Generierung/Versand sind **custom** oder via Plugin. [7]

## Technische Umsetzung
- **Datenmodell:** Custom Fields an Kunde/Order (Leitweg-ID etc.); gepflegt im Stammdatensatz oder Checkout-Abfrage.  
- **Dokumente:** Parallel zur PDF-Rechnung XML erzeugen; Schema/Schematron-Prüfung; Fehlerdialoge.  
- **Versand:** E-Mail (XML+PDF) oder PEPPOL-Integration; Retries; Fehlermonitoring.  
- **Admin-Funktionen:** Export/Bulk-Export; Korrekturen (Credit Notes); Statusübersicht.

## Checkliste
- [x] Pflichtfelder modelliert & gepflegt  
- [x] XML-Generator + Validierung integriert  
- [x] Versandweg definiert & getestet  
- [x] Archivierung/Backup geregelt
- [x] Korrekturprozesse dokumentiert
- [x] ERP-Integration (Felder/Belege) [8][22]

## Abhängigkeiten/Überschneidungen
- **ERP:** Belegdaten/Nummernkreise, Versandpfad.
- **Audit:** Nachweise/Versandprotokolle.

> @todo (PO): Akzeptanzkriterien für XRechnung (Validierungsnachweis, PEPPOL-Test, Archivprüfung) ergänzen.

## Quellen
[8][9][14][16][17][22]
