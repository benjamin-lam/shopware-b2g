# Broker-Integration – Punchout & Katalog (OCI, cXML, PEPPOL BIS)

## Kundenanforderung
Anbindung an e-Procurement-Systeme (z. B. SAP SRM/Ariba, Jaggaer, Coupa): **Punchout** (Live-Katalog), **Katalog-Upload**, **Bestellimport**. Standards **OCI**, **cXML** und ggf. **PEPPOL BIS** sind einzuhalten. [15][16][23]

## Besonderheiten im B2G
- **Standardtreue:** Strikte Einhaltung von Feldnamen/Flows (OCI 5.0, cXML PunchOutSetupRequest/OrderMessage).  
- **Sicherheit/Auth:** One-Time-Token/Secrets, Session-Bindung, IP-Filter; Mandantentrennung.  
- **Sortiment/Preis:** Mandantenspezifische Kataloge/Konditionen; automatische Einschränkung beim Punchout. [23]  
- **Dokumentation:** Partner-Guides, Testdaten, Endpunkt-Matrix, Kontaktpunkte.

## Umsetzung (Kurz)
- Endpunkte: Setup, Session, Warenkorb-Rückgabe (OCI NEW_ITEM*, cXML PunchOutOrderMessage).  
- Mapping: Credentials → Organisation/Sales Channel; Attributübernahme (Kostenstelle/PO/Referenz).  
- Order-Flow: Optional cXML/UBL-OrderImport oder Rückgabe an ERP.  
- Monitoring: Endpunkt-Health, Fehlerraten, Protokollierung von Partnercalls.

## Checkliste
- [x] Standards/Partneranforderungen abgestimmt  
- [x] Setup-Flows/Sessionmanagement implementiert  
- [x] Katalogeinschränkung/Preise je Mandant [23]  
- [x] Warenkorb-Transfer (OCI/cXML)  
- [x] Fehlerfälle & Wiederholungen  
- [x] Partner-Doku & E2E-Tests

## Abhängigkeiten/Überschneidungen
- **ERP-Schnittstellen:** Preis-/Stammdatenquelle, Orderimport.  
- **Theming/Mandanten:** Branding je Organisation im Punchout.  
- **Audit/Monitoring:** Nachvollziehbarkeit & Alarme.

## Quellen
[10][15][16][17][23]
