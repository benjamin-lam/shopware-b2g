# Approval Workflow – Mehrstufige Genehmigungen & Eskalation

## Kundenanforderung
Bestellungen müssen vor finalem Absenden **regelbasiert** genehmigt werden (mehrstufig, AND/OR-Kombinationen, Stellvertretungen). Fristen/Eskalationen, Kommentare/Begründungen, Historie und Revision sind Pflicht. [12]

## Warum ist das so?
Behörden arbeiten formalisiert und fristgebunden. Jede Zeichnung muss **nachvollziehbar** und **berechtigt** sein (Vier-Augen-Prinzip, Funktionstrennung). [12]

## Anforderungen & Besonderheiten (B2G)
- **Stufen & Bedingungen:** Betragsschwellen, Warengruppen, Kostenstellen, Mandant/Organisation, Haushaltsstellen.  
- **AND/OR-Kombinationen:** z. B. (Abteilungsleitung ODER Stellvertretung) UND (Haushaltsstelle). [12]  
- **Eskalation:** Fristablauf → nächsthöhere Instanz; Vakanzen abbildbar.  
- **Versionierung:** Ablehnung → Warenkorbänderung → neue Runde; Historie bleibt erhalten.  
- **Schnittstelle Vergabe:** Ggf. Übergabe an eVergabe/Fachverfahren nach interner Freigabe.

## Umsetzung – Technische Leitplanken
- **Regelwerk:** Konfigurierbare Policies (Betrag, Kategorie, Kostenstelle, Rolle).  
- **Workflow-Engine/Events:** Statuswechsel, Benachrichtigungen (Mail/API), erneute Einreichung.  
- **UI/UX:** Freigeberübersicht, Kommentare, Stellvertreterauswahl; klare Rückmeldungen im Checkout.  
- **Audit:** Jede Entscheidung (wer/wann/was/warum) unveränderbar protokollieren (s. Audit_Logging).  
- **Sicherheit:** Rechteprüfung serverseitig (kein reines Frontend-Gate).

## Checkliste
- [x] Regelwerk modelliert (Stufen, Bedingungen, OR/AND)  
- [x] Eskalationsketten/Fristen definiert  
- [x] Stellvertretung integriert (s. Mandate_Management)  
- [x] UI für Genehmiger & Besteller konzipiert  
- [x] Audit-Trail & Reporting implementiert  
- [x] E2E-Tests/Betragsschwellen/Edge-Cases

## Abhängigkeiten/Überschneidungen
- **Rollen & Rechte:** Wer darf freigeben?  
- **Kostenstellen & Budgets:** Budgetlogik ↔ Freigabe.  
- **ERP/Schnittstellen:** Nur freigegebene Orders exportieren.

## Quellen
[12] (Abschnitt „Approval-Workflow“ in der Recherche)
