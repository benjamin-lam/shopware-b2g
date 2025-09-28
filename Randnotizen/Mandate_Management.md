# Mandate Management – Stellvertretung & Delegation

## Kundenanforderung
Temporäre oder permanente **Vertretungen** („im Auftrag von …“) und **Delegationen** für definierte Aktionen (Freigabe, Budgetpflege), mit **Protokollierung** und klaren UI-Hinweisen. [18][19]

## Umsetzung
- **Datenmodell:** Tabelle für Mandate (Org, Vertreter, Vertretener, gültig_von/bis, Scope/Betragsgrenzen). [19]  
- **Modi:**  
  - *Impersonation:* Session-Wechsel als Vertretener (mit Banner/Hinweis), Audit: „X handelte im Auftrag von Y“.  
  - *Delegated Actions:* X bleibt X; Aktionen werden „für Y“ ausgeführt (Kontextwahl).  
- **Regeln:** Betrag/Warengruppe/Kostenstelle; Einschränkungen pro Mandat. [18]  
- **UI/UX:** Auswahl/Wechsel des Vertretungskontexts, deutliche Kennzeichnung.  
- **Kontrollen:** Regelmäßige Prüfung der Gültigkeit; beschränkter Zugriff; Widerruf.

## Checkliste
- [x] Mandatsentitäten/Scope modelliert  
- [x] UI für Einrichtung/Wechsel  
- [x] Approval-Integration (Vertreter freigabeberechtigt)  
- [x] Audit-Trails mit „im Auftrag von“  
- [x] Rezertifizierung/Überprüfung

## Abhängigkeiten/Überschneidungen
- **Rollen & Rechte:** Basis für Berechtigungen.  
- **Approval/Kostenstellen:** Stellvertretung wirkt auf Freigaben/Budgets.

## Quellen
[18][19]
