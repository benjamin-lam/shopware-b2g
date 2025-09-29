# Betrieb, Monitoring & Governance

## Kundenanforderung

Behörden betrachten ein B2G-Portal als kritische Infrastruktur.  Sie fordern hohe Verfügbarkeit, Sicherheit, lückenlose Überwachung und dokumentierte Prozesse.  Der Betrieb muss jederzeit nachweisen können, dass alle Vorgaben eingehalten werden, und Störungen schnell beheben【38†L112-L120】.

## Warum ist das so?

Öffentliche Beschaffung betrifft sensible Daten und ist zentral für die Funktionsfähigkeit von Behörden.  Ausfälle oder Sicherheitslücken können zu Versorgungsengpässen und öffentlichen Skandalen führen.  Gesetzliche Regelungen wie das IT-SiG und Vorgaben des BSI (Mindeststandards) schreiben Mindestmaßnahmen für Protokollierung und Angriffserkennung vor【38†L112-L120】.  Zudem müssen Audits den Betrieb jederzeit nachvollziehen können.

## Anforderungen & Besonderheiten (B2G)

1. **Monitoring & Alerting:** Erfassung von Uptime, Latenzen, Fehlerraten, Schnittstellenstatus.  SIEM-Anbindung zur Erkennung von Sicherheitsvorfällen【38†L112-L120】.
2. **Backup & Disaster Recovery:** Regelmäßige Datenbank- und Dateisicherungen, definierte Wiederherstellungsprozesse mit RTO/RPO-Werten.  Dokumentierte Notfallpläne und regelmäßige Tests.
3. **Change- & Release-Management:** Prozesse für Änderungen: Change-Requests, Tests auf Staging, Freigaben durch Verantwortliche, rollierender Roll-Out.  Nachvollziehbare Versions- und Deploy-Dokumentation.
4. **Audit-Trails & Reporting:** Vollständige Protokollierung aller Aktionen (Login, Bestellung, Genehmigung, Rollenänderung).  Bereitstellung von Berichten (z. B. SLA-Einhaltung, Sicherheitsvorfälle, Backup-Status) an Auftraggeber.
5. **Betriebshandbuch & Notfallprozeduren:** Ein ausformuliertes Betriebshandbuch mit Ansprechpartnern, Wartungsfenstern, Recovery-Anleitungen und Sicherheitsmaßnahmen.
6. **Testing & Abnahme:** End-to-End-Tests (E2E) inkl. Genehmigungen, Integrationstests (OCI, cXML, XRechnung), Barrierefreiheitstests.  Dokumentierte Abnahme durch Behörden.

## Umsetzung – Technische Leitplanken

- **Monitoring-Stack:** Nutzen Sie Tools wie Prometheus, Grafana oder New Relic zur Erfassung von Metriken; ELK/Elastic Stack für Log-Aggregationen; Anbindung an ein zentrales SIEM.  Definieren Sie Alarme (Schwellwerte, Anomalien) und Eskalationsketten (24/7-Rufbereitschaft).
- **Backup & Restore:** Planen Sie tägliche Datenbank-Backups, wöchentliche Full-Backups des Dateisystems und monatliche Test-Restores.  Halten Sie RTO (Recovery Time Objective) und RPO (Recovery Point Objective) ein und dokumentieren Sie Recovery-Prozeduren.
- **Change-Management:** Verwenden Sie GitLab CI/CD für automatisierte Tests und Deployments.  Änderungen werden in einem Ticket-System dokumentiert, von Fachverantwortlichen freigegeben und auf Staging getestet.  Releases erfolgen mit Blue-Green oder Rolling Deployments, um Downtime zu minimieren.
- **Audit & Reporting:** Entwickeln Sie Report-Generatoren, die Audit-Logs zusammenfassen (z. B. Anzahl Logins, Genehmigungen, abgelehnte Bestellungen).  Schnittstellen überwachen und Reports an Behörden liefern (Monats-/Quartalsberichte).  Audit-Daten müssen manipulationssicher aufbewahrt werden.
- **Betriebshandbuch:** Schreiben Sie ein Markdown-Dokument, das Infrastruktur, Komponenten, Monitoring, Backup, Incident-Response und Notfallpläne beschreibt.  Halten Sie Ansprechpartner und Eskalationsstufen fest.  Legen Sie das Dokument im Repository (z. B. `docs/architecture/betriebshandbuch.md`).
- **Testing:** Automatisieren Sie Unit-, Integration- und E2E-Tests.  Für E2E können Tools wie Cypress oder Playwright genutzt werden.  Barrierefreiheitstests (axe-core) gehören in die Pipeline.  Abnahmeszenarien werden in enger Abstimmung mit den Behörden definiert.

## Checkliste

- [ ] Monitoring mit Metriken, Logs und SIEM-Integration eingerichtet.
- [ ] Backup- & Restore-Konzepte dokumentiert und getestet.
- [ ] Change-, Release- und Incident-Management definiert und in Tools abgebildet.
- [ ] Audit-Trails werden gesammelt und regelmäßig ausgewertet.
- [ ] Betriebshandbuch erstellt und aktuell gehalten.
- [ ] Automatisierte Tests (Unit, Integration, E2E, Accessibility) vorhanden; Abnahmen dokumentiert.

## Abhängigkeiten/Überschneidungen

Der Betrieb stützt sich auf alle Module: Audit-Logs aus Vergabe & Genehmigung, Schnittstellen aus Integration, Budgets & Rechnungen, Barrierefreiheitstests, Mandantenmetrik.  Entscheidungen im Change-Management beeinflussen die Verfügbarkeit der gesamten Plattform.  Das Betriebshandbuch verlinkt auf detaillierte Module (z. B. Genehmigungsworkflow, Budgetservice).

## Akzeptanzkriterien

1. Monitoring zeigt alle relevanten Daten; bei Störungen werden Alerts ausgelöst und innerhalb definierter Zeit behoben.
2. Es existiert ein dokumentiertes Backup- und Recovery-Prozedere; regelmäßige Restore-Tests sind erfolgreich.
3. Alle Änderungen am System sind nachverfolgbar und werden ordnungsgemäß freigegeben und deployed.
4. Audit-Reports werden regelmäßig erzeugt und entsprechen den Anforderungen der Auftraggeber.
5. Das Betriebshandbuch ist vollständig und aktuell; E2E-Tests decken alle Hauptprozesse ab.

## Quellen

Siehe Quellen [11], [12] im Quellenverzeichnis.
