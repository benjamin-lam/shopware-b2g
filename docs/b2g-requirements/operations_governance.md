# Betrieb, Monitoring & Governance

Der Shop wird als kritische Infrastruktur angesehen.  Daher gelten hohe Anforderungen an Verfügbarkeit, Sicherheit und Nachweisbarkeit:

- **Monitoring & Alerting:** Metriken wie Verfügbarkeit, Latenzen, Fehlerraten und Schnittstellenstatus werden kontinuierlich überwacht.  Auffällige Ereignisse (z. B. Login-Fehlversuche, hohe Fehlerquoten) müssen erkannt und an ein zentrales SIEM weitergeleitet werden.  Für den 24/7-Betrieb sind Rufbereitschaften und Eskalationsketten zu definieren[2].
- **Backup & Disaster Recovery:** Regelmäßige Backups, dokumentierte Wiederherstellungsprozesse und definierte RPO/RTO-Werte sind erforderlich.  Recovery-Tests müssen regelmäßig durchgeführt und protokolliert werden.
- **Change- & Release-Management:** Änderungen am System erfolgen strukturiert über Change-Requests, Tests auf Staging-Umgebungen, Freigaben durch Verantwortliche und einen kontrollierten Roll-out.  Ein Betriebshandbuch dokumentiert alle Prozesse, Wartungsfenster und Ansprechpartner.
- **Testing & Abnahme:** Vor der Produktivsetzung sind End-to-End-Szenarien (Login → Bestellung → Freigabe → ERP-Export → Rechnung) zu testen.  Schnittstellentests (OCI/cXML, XRechnung) und Barrierefreiheitstests sind Teil der Abnahme.  Abnahmeprotokolle werden archiviert.

**Umsetzung in Shopware:**

Für das Monitoring können Tools wie Prometheus/Grafana, ELK-Stacks oder New Relic eingesetzt werden; Shopware-Events lassen sich an eine Message-Queue koppeln, um Betriebsdaten zu sammeln.  Backups werden per Datenbank-Dump und Dateisicherung durchgeführt.  CI/CD mit GitLab sorgt für automatisierte Tests und Deployments.  Das Betriebshandbuch wird als Markdown im Repository gepflegt.

**Offene Fragen / Akzeptanzkriterien:**

- Welche SLAs (Uptime, Reaktionszeiten) müssen gewährleistet sein?
- Welche Logging-Formate und Aufbewahrungsfristen gelten für sicherheitsrelevante Ereignisse?
- Wie werden Change-Requests dokumentiert und von wem freigegeben?
