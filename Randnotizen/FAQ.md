# FAQ – B2G Besonderheiten

## Welche Pflichtfelder braucht eine XRechnung?
- Leitweg-ID des Auftraggebers  
- Bestellnummer (PO)  
- Zahlungsbedingungen  
- Lieferantendaten inkl. USt-ID/EORI  
- Format: XML nach EN 16931 (Schematron-validiert)

## Wie testen wir Punchout/OCI?
- Mit simulierten OCI/cXML Requests (z. B. SAP SRM Test-User)  
- Prüfen: SetupRequest → Login → Katalog → Warenkorb → PunchOutOrderMessage  
- Monitoring: Session-Logs + E2E-Testskripte

## Wie stellen wir Barrierefreiheit sicher?
- Audit anhand WCAG 2.1 AA  
- Kombination: automatisiertes Tooling (axe, Lighthouse) + manuelle Tests (Screenreader, Tastatur)  
- Erklärung & Feedback-Prozess veröffentlichen

## Wie erfolgt die Genehmigung bei Budgetüberschreitung?
- Regel im Approval-Workflow: Bestellung „wartet“  
- Genehmiger oder Vertreter bestätigt → Bestellung geht an ERP  
- Logging: Event „ORDER_APPROVED“ inkl. Benutzer/Rolle

## Wer trägt Verantwortung für DR/Backup?
- Betriebsteam legt RTO/RPO fest
- Regelmäßige Restore-Tests dokumentieren
- Ergebnisse im Notfallhandbuch ablegen

> @todo (PO): Akzeptanzkriterien/Checkliste für FAQ-Abdeckung definieren (Welche Themen müssen beantwortet werden?).
