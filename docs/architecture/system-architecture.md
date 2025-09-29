# Systemarchitektur

## Kundenanforderung

Öffentliche Auftraggeber erwarten eine skalierbare, sichere und erweiterbare Architektur.  Der Shop muss hohe Lasten bewältigen, Ausfälle verkraften und modular anpassbar sein.  Gleichzeitig dürfen Änderungen in einem Modul andere Komponenten nicht unbeabsichtigt beeinträchtigen.【38†L112-L120】

## Warum ist das so?

Ein B2G-Portal ist kritische Infrastruktur.  Gesetzliche Vorgaben verlangen höchste Verfügbarkeit und Sicherheitsmaßnahmen【38†L112-L120】.  Die heterogene IT-Landschaft der Behörden erfordert flexible Integrationsmöglichkeiten.  Zudem können Gesetzesänderungen neue Funktionen nötig machen – die Architektur muss daher erweiterbar sein.

## Anforderungen & Besonderheiten (B2G)

1. **Modularität:** Kern (Shopware Core) getrennt von B2G-Plugins/App-Services.  Neue Module können hinzugefügt werden, ohne den Kern zu verändern.
2. **Integration Layer:** Adapter für ERP, IdM, Fachverfahren und Punchout.  Lose Kopplung via REST/Events/Queues.  Idempotenz beachten.
3. **Scalability & High Availability:** Horizontal skalierbar (z. B. Kubernetes).  Caching und Load-Balancing für hohe Nutzerzahlen.
4. **Security:** Zero-Trust-Network, TLS überall, Secrets-Management, CSP-Header, regelmäßige Pen-Tests.
5. **Observability:** Monitoring, Logging und Tracing übergreifend.  Alerts und Dashboards (siehe Betriebsmodul).
6. **Extensibility:** Plugins und Apps, die über Events, DAL und APIs integrieren können.  Konfigurierbarkeit via System Config.

## Umsetzung – Technische Leitplanken

- **Layered Architecture:** Unterteilen Sie die Architektur in Presentation (Storefront/Admin), Application (Plugins/Apps), Integration (API-Gateways, Message-Broker), Domain (Core + DAL) und Infrastructure (DB, Cache, Queue, Monitoring).  Jedes Layer kommuniziert nur mit Nachbarschichten.
- **Message-Driven Integration:** Nutzen Sie Event-Bus/Queue (RabbitMQ, Kafka) zur entkoppelten Kommunikation zwischen Shopware und externen Services (ERP, SIEM).  Implementieren Sie Publisher und Subscriber in Plugins.
- **API-Gateway & Middleware:** Verwenden Sie ein API-Gateway vor Shopware, das Authentifizierung, Ratelimits und Logging zentral regelt.  Eine Middleware kann Daten transformieren (cXML ↔ JSON).
- **High Availability:** Deployen Sie Shopware im Cluster (Docker/Kubernetes).  Nutzen Sie Blue-Green-Deployments für Zero-Downtime-Releases.  Replikation und Failover für DB und Cache (MySQL Cluster, Redis Sentinel).
- **Infrastructure-as-Code:** Provisionieren Sie Infrastruktur via Terraform/Ansible.  Secrets in Vault oder K8s Secrets verwalten.  CI/CD automatisiert Deployments (GitLab).

## Checkliste

- [ ] Architekturdiagramm erstellt (siehe Schaubild in README).  
- [ ] Layered Architecture umgesetzt (Presentation, Application, Integration, Domain, Infrastructure).
- [ ] Event-Bus/Queue für asynchrone Integration implementiert.
- [ ] API-Gateway konfiguriert (TLS, Auth, Ratelimits).
- [ ] Hochverfügbarkeit (Cluster, Failover, Load Balancer) eingerichtet.
- [ ] Infrastruktur automatisiert provisioniert und dokumentiert.

## Abhängigkeiten/Überschneidungen

Die Systemarchitektur bildet die Grundlage für alle Module.  Das Integrationslayer bedient ERP, SSO und E-Rechnung.  Sicherheit und Monitoring hängen von den Architekturentscheidungen ab.  Änderungen in einem Layer können sich stark auswirken; daher müssen Architekturentscheidungen in ADRs dokumentiert werden.

## Akzeptanzkriterien

1. Die Architektur ist dokumentiert, implementiert und erfüllt High-Availability- und Security-Anforderungen.
2. Module (Plugins/Apps) können ohne Kernänderungen hinzugefügt oder entfernt werden.
3. Integration Layer ist entkoppelt und idempotent; externe Systeme können angeschlossen werden.
4. Automatisierte Tests für Last und Ausfallszenarien durchgeführt.

## Quellen

Siehe Quellen [11], [12] im Quellenverzeichnis.
