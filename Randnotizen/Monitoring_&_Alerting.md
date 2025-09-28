# Monitoring & Alerting – Verfügbarkeit, Sicherheit, Nachweise

## Ziele
Transparenz über Verfügbarkeit/Leistung, **Schnittstellenintegrität** und **Sicherheitsereignisse**; revisionsfähige Berichte; 24/7-Alarmierung mit Eskalation. [9][13]

## Mindestumfang
- **Basis-KPIs:** Uptime, Latenz, Fehlerquoten, Ressourcen (CPU/RAM/Disk), Queue-Füllstände.  
- **Schnittstellen:** ERP-Sync-Aktualität, Punchout-Endpoints, E-Rechnungsversand; Heartbeats. [9][13][16]  
- **Security-Signale:** Fehl-/Massen-Logins, 5xx-Spikes, ungewöhnliche Orderprofile → Alarm/SIEM. [4][12]  
- **Berichte:** Monatsreport (SLAs, Incidents, Trends); Audit-Export.

## Betrieb
- **Alarmwege:** E-Mail/SMS/Pager; Bereitschaftskette; Probealarme. [9]  
- **Datenschutz:** PII-arme Logs, IP-Policies; Aufbewahrung begrenzen.  
- **IR-Kopplung:** Automatic Ticket/Incident; Runbooks je Alarm.

## Checkliste
- [x] Dashboards/Alarme eingerichtet  
- [x] Schnittstellen-Synthetics & Thresholds  
- [x] SIEM-Regeln für Security-Events
- [x] Reports/Export für Revision
- [x] Probealarme erfolgreich

## Abhängigkeiten/Überschneidungen
- **Audit-Logging:** Ereignisquelle/Correlation.
- **ERP/Punchout:** Synthetische Checks/Partner-Sichtbarkeit.

> @todo (PO): Akzeptanzkriterien für Monitoring (SLA-Nachweise, Alarm-Reaktionszeiten) definieren.

## Quellen
[4][9][12][13][16]
