# Systemarchitektur

Die Architektur des Cloud Service Portals basiert auf einer Shopware 6-Installation mit Erweiterungen.  Kernbestandteile sind:

1. **Shopware 6 Core** – Verantwortlich für Produktkatalog, Warenkorb, Checkout und grundlegende B2B-Funktionen.
2. **Custom Plugins** – Implementieren B2G-spezifische Features wie Genehmigungsworkflows, Kostenstellenverwaltung, Mandate, e-Rechnungen und Punchout-Schnittstellen.
3. **Integration Layer** – Synchronisiert Daten mit externen Systemen (ERP, IdM, Punchout).  Besteht aus REST-Clients, Message-Queues (z. B. RabbitMQ) und optional einem Middleware-Service.
4. **Frontend** – Shopware Storefront mit angepasstem Theme für Barrierefreiheit und Mandantenbranding.  Ergänzt um Admin-Module für Behörden-Administratoren und Genehmiger.
5. **Monitoring & Logging Stack** – Tools zur Überwachung (Prometheus, Grafana), Log-Analyse (ELK) und SIEM-Anbindung.
6. **CI/CD Pipeline** – GitLab-CI sorgt für automatisierte Tests, Linter, Builds und Deployments (Docker/Kubernetes).

Das folgende Schaubild (als Beschreibung) illustriert die Zusammensetzung:

- **Nutzer** (Einkäufer, Genehmiger, Admin) → Shopware Storefront/Admin → Plugins → Datenbank
- **Plugins** ↔ **ERP/IdM/Fachverfahren** über Integration Layer (REST, Queue)
- **Plugins** → **Rechnungsservice/PEPPOL** für E-Rechnungen
- **Monitoring Stack** erhält Events/Logs aus Shopware und Plugins

Dieses Modul bildet die Grundlage für die detailierten Datenmodelle und Integrationsmuster.
