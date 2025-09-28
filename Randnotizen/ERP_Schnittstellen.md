# ERP-Schnittstellen – Stammdaten & Transaktionen

## Kundenanforderung
ERP als **Single Source of Truth** für Artikel/Preise/Bestände; Shop übergibt **freigegebene** Bestellungen zeitnah und nachvollziehbar ans ERP. Robust, sicher, auditierbar. [18][24]

## Umsetzung
- **Stammdaten (ERP → Shop):** Artikel, Preise, Bestände, Kategorien, Medien; Delta-Imports; Mapping; Performance/Batching. [18][19]  
- **Transaktionen (Shop → ERP):** Bestellungen inkl. Kostenstelle, PO-/Referenz, Leitweg-ID (falls relevant); ACK/Statusrückmeldungen speichern. [24]  
- **Resilienz:** Queue/Retry, Idempotenz, Dead-Letter-Handling, Backpressure; Fehlertransparenz im Admin. [18]  
- **Sicherheit:** Transport (HTTPS/SFTP/VPN), Secrets Rotation; Logs ohne PII.  
- **Governance:** Export nur nach Approval; Timeouts/Eskalationen; Änderungsprotokolle.

## Checkliste
- [x] Formate/Protokolle/Frequenz abgestimmt  
- [x] Mappingdoku + Testimporte erfolgreich  
- [x] Order-Export + ERP-Auftragsnummer Rückfluss [24]
- [x] Monitoring (Throughput/Fehler) + Alarme
- [x] Betriebshandbuch/On-Call-Kontakt

## Abhängigkeiten/Überschneidungen
- **Approval/Kostenstellen:** Export-Gate erst nach Freigabe/Budget.
- **Invoicing:** Rechnungsdaten/Leitweg-ID an ERP/Versandsystem.

> @todo (PO): Akzeptanzkriterien für ERP-Integrationen (z. B. Erfolgsquote, Latenz) definieren.

## Quellen
[18][19][24]
